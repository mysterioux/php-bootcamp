## Variables and data types

Variable names begin with `$`, followed by a letter or underscore. They cannot start with a number.

```php
$name = "Ari";       // string
$age = 20;           // integer (int)
$price = 4.99;       // floating-point number (float)
$isReady = true;     // boolean (bool)
$nothing = null;     // no value
$colors = ["red", "blue"]; // array

$_GET['name'] = "Chris"; // used by globals
$this = "something" // $this cannot be used as a variable name
```

PHP determines a variable's type from its value. Inspect a value and its type with `var_dump($value)`.

## Strings

Single-quoted strings are simple text. Double-quoted strings can interpolate variables. Use `.` to concatenate strings.

```php
$name = "Ari";
echo 'Hello, world';
echo "Hello, $name";
echo "Hello, {$name}!";
$message = "Hello, " . $name . "!";
```

Note: We have variable vairables as well

```php
$foo = 'bar';
$$foo = 'barrack'; // this will become $bar = 'barrack'
echo $$foo;
echo "$$foo"; // will not print out the content
echo "{$$foo}"; // will print it out
echo "${$foo}"; // will also print it out

```

## Constants

Constants do not use `$` and cannot be changed after definition.

```php
const SITE_NAME = "Example";
define("MAX_ATTEMPTS", 3);
echo SITE_NAME;
```

Note: const is executed on compiled time while define() is executed at runtime
