# PHP Null Types

`null` represents the absence of a value. It is different from `0`, `false`, and an empty string (`''`).

```php
$nickname = null;
var_dump($nickname); // NULL
```

## Nullable types

Prefix a type with `?` to allow either that type or `null`:

```php
function findNickname(): ?string
{
	return null; // The result may be a string or null
}

function greet(?string $name): string
{
	if ($name === null) {
		return 'Hello, guest!';
	}

	return "Hello, $name!";
}

echo greet(findNickname());
```

In PHP 8.0 and later, `string|null` is an equivalent way to write the return type `?string`:

```php
function getLabel(): string|null
{
	return 'Ready';
}
```

## Checking and handling null

Use strict comparison to check specifically for null:

```php
if ($nickname === null) {
	echo 'No nickname set';
}
```

The null coalescing operator (`??`) supplies a fallback when a value is unset or null:

```php
$displayName = $nickname ?? 'Guest';
```

Avoid `empty()` for a null-only check: it also treats `0`, `false`, and `''` as empty.

## Remember

- `null` is its own value and means “no value.”
- `?Type` accepts either `Type` or `null`.
- Use `=== null` for an explicit null check and `??` for a fallback.
