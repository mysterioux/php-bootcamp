/_ Data Types & Type Casting _/

## Scalar types

    - bool (true / false)
    - int (0,1,2,3 etc)
    - float (0.0, 1.5, -15.8)
    - string ('foo', "bar")

```php
$completed = true; //bool
$score = 75; //int
$price = 19.99; //float
$greeting = "Welcome to our bank"; //string

// To know the types
echo gettype($completed);
echo gettype($score);
echo gettype($price);
echo gettype($greeting);

```

## Compound types

    - array
    - object
    - callable
    - iterable

## Special type

    - resources
    - null

## Operators

```php
$sum = 5 + 2;
$difference = 5 - 2;
$product = 5 * 2;
$quotient = 5 / 2;
$remainder = 5 % 2;
$power = 5 ** 2;

$count = 1;
$count++;       // increment
$count += 2;    // add and assign

$same = (5 === 5);          // strict equality (value and type)
$different = (5 !== "5");
$greater = (8 > 3);
$both = true && false;
$either = true || false;
$not = !true;
$label = $name ?? "Guest"; // fallback if null or unset
```

Prefer `===` and `!==` for comparisons that should check both value and type.

## Conditions

```php
$score = 75;

if ($score >= 90) {
	echo "Excellent";
} elseif ($score >= 60) {
	echo "Passed";
} else {
	echo "Try again";
}

$status = $score >= 60 ? "pass" : "retry"; // ternary expression
```

Use `switch` to choose between several cases:

```php
switch ($day) {
	case "Monday":
		echo "Start of the week";
		break;
	case "Friday":
		echo "Almost the weekend";
		break;
	default:
		echo "Another day";
}
```

## Arrays

Indexed arrays use numeric keys starting at `0`. Associative arrays use named keys.

```php
$colors = ["red", "green", "blue"];
echo $colors[0]; // red
$colors[] = "yellow"; // append

$person = [
	"name" => "Ari",
	"age" => 20,
];
echo $person["name"];
echo count($colors); // number of items
```

## Loops

`foreach` is useful for iterating over arrays:

```php
foreach ($colors as $color) {
	echo $color . "\n";
}

foreach ($person as $key => $value) {
	echo "$key: $value\n";
}
```

PHP also has `for`, `while`, and `do...while` loops:

```php
for ($i = 0; $i < 3; $i++) {
	echo $i;
}

$i = 0;
while ($i < 3) {
	echo $i;
	$i++;
}

do {
	echo "Runs at least once";
} while (false);
```

`break` exits a loop; `continue` skips to its next iteration.

## Functions

Declare a function with `function`. Parameters can have types and default values, and a function can declare its return type.

```php
function greet(string $name = "Guest"): string
{
	return "Hello, " . $name;
}

echo greet("Ari");
echo greet();
```

Variables declared inside a function are local to it. Pass data through parameters and return values.

## PHP and HTML

PHP can be embedded in HTML. `<?= ... ?>` is shorthand for `<?php echo ...; ?>`.

```php
<?php $title = "My page"; ?>
<!doctype html>
<html lang="en">
<head><title><?= htmlspecialchars($title, ENT_QUOTES, "UTF-8") ?></title></head>
<body>
	<h1><?= htmlspecialchars($title, ENT_QUOTES, "UTF-8") ?></h1>
</body>
</html>
```

Escape untrusted text before putting it into HTML to help prevent cross-site scripting (XSS).

## Including files

`include` and `require` load another PHP file. Their `_once` forms avoid loading it more than once. `require` stops execution if the file cannot be loaded; `include` issues a warning and continues.

```php
require_once __DIR__ . "/helpers.php";
```

## Classes and objects

A class describes an object. Use `new` to create one and `->` to access its properties or methods.

```php
class Greeter
{
	public function greet(string $name): string
	{
		return "Hello, " . $name;
	}
}

$greeter = new Greeter();
echo $greeter->greet("Ari");
```

## Good habits

- Use clear names and consistent indentation.
- Validate input and escape output for its context, such as HTML.
- Use prepared statements when working with databases.
- Run a script from a terminal with `php filename.php` if PHP is installed.
