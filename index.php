<?php
declare(strict_types=1);

$projectRoot = realpath(__DIR__);

function escapeHtml(string $value): string
{
	return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function findProjectFile(string $relativePath, string $projectRoot): ?string
{
	if ($relativePath === '' || str_contains($relativePath, "\0")) {
		return null;
	}

	$path = realpath($projectRoot . DIRECTORY_SEPARATOR . $relativePath);
	if ($path === false || !str_starts_with($path, $projectRoot . DIRECTORY_SEPARATOR) || !is_file($path)) {
		return null;
	}

	return in_array(strtolower(pathinfo($path, PATHINFO_EXTENSION)), ['php', 'md'], true) ? $path : null;
}

function findProjectDirectory(string $relativePath, string $projectRoot): ?string
{
	if ($relativePath === '' || str_contains($relativePath, "\0")) {
		return null;
	}

	$path = realpath($projectRoot . DIRECTORY_SEPARATOR . $relativePath);
	if ($path === false || !str_starts_with($path, $projectRoot . DIRECTORY_SEPARATOR) || !is_dir($path)) {
		return null;
	}

	return $path;
}

function listDirectory(string $directory, string $relativePath = ''): void
{
	$entries = scandir($directory);
	if ($entries === false) {
		return;
	}

	$directories = [];
	$files = [];
	foreach ($entries as $entry) {
		if ($entry === '.' || $entry === '..' || str_starts_with($entry, '.')) {
			continue;
		}

		$fullPath = $directory . DIRECTORY_SEPARATOR . $entry;
		if (is_link($fullPath)) {
			continue;
		}
		if (is_dir($fullPath)) {
			$directories[] = $entry;
		} elseif (is_file($fullPath) && in_array(strtolower(pathinfo($entry, PATHINFO_EXTENSION)), ['md', 'php'], true)) {
			$files[] = $entry;
		}
	}

	sort($directories, SORT_NATURAL | SORT_FLAG_CASE);
	sort($files, SORT_NATURAL | SORT_FLAG_CASE);

	foreach ($directories as $name) {
		$childRelative = $relativePath === '' ? $name : $relativePath . '/' . $name;
		echo '<li><strong><a href="?read=' . rawurlencode($childRelative) . '">' . escapeHtml($name) . '/</a></strong><ul>';
		listDirectory($directory . DIRECTORY_SEPARATOR . $name, $childRelative);
		echo '</ul></li>';
	}

	foreach ($files as $name) {
		$fileRelative = $relativePath === '' ? $name : $relativePath . '/' . $name;
		$parameter = strtolower(pathinfo($name, PATHINFO_EXTENSION)) === 'php' ? 'run' : 'read';
		echo '<li><a href="?' . $parameter . '=' . rawurlencode($fileRelative) . '">' . escapeHtml($name) . '</a></li>';
	}
}

$runPath = isset($_GET['run']) && is_string($_GET['run']) ? $_GET['run'] : null;
$readPath = isset($_GET['read']) && is_string($_GET['read']) ? $_GET['read'] : null;
$selectedPath = $runPath ?? $readPath;
$selectedFile = $selectedPath !== null ? findProjectFile($selectedPath, $projectRoot) : null;
$selectedDirectory = $selectedPath !== null ? findProjectDirectory($selectedPath, $projectRoot) : null;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project directory</title>
	<style>
		body { max-width: 960px; margin: 2rem auto; padding: 0 1rem; font: 16px/1.5 system-ui, sans-serif; }
		pre { overflow: auto; padding: 1rem; background: #f4f4f4; white-space: pre-wrap; }
	</style>
</head>
<body>
	<h1>Project directory</h1>
	<p><a href="index.php">Back to directory list</a></p>

	<?php if ($selectedPath !== null): ?>
		<?php if ($selectedDirectory !== null): ?>
			<h2><?= escapeHtml($selectedPath) ?></h2>
			<ul><?php listDirectory($selectedDirectory, $selectedPath); ?></ul>
		<?php elseif ($selectedFile === null): ?>
			<p>File not found or unsupported.</p>
		<?php elseif ($runPath !== null && strtolower(pathinfo($selectedFile, PATHINFO_EXTENSION)) === 'php'): ?>
			<h2>PHP output: <?= escapeHtml($selectedPath) ?></h2>
			<?php if ($selectedFile === realpath(__FILE__)): ?>
				<p>The directory browser cannot execute itself.</p>
			<?php else: ?>
				<?php
				$output = (static function (string $__file): string {
					$oldDirectory = getcwd();
					chdir(dirname($__file));
					ob_start();
					try {
						include $__file;
					} catch (Throwable $error) {
						echo '<pre>' . escapeHtml($error->getMessage()) . '</pre>';
					} finally {
						if ($oldDirectory !== false) {
							chdir($oldDirectory);
						}
					}
					return (string) ob_get_clean();
				})($selectedFile);
				echo $output;
				?>
			<?php endif; ?>
		<?php else: ?>
			<h2><?= escapeHtml($selectedPath) ?></h2>
			<pre><?= escapeHtml((string) file_get_contents($selectedFile)) ?></pre>
		<?php endif; ?>
	<?php else: ?>
		<ul><?php listDirectory($projectRoot); ?></ul>
	<?php endif; ?>
</body>
</html>
