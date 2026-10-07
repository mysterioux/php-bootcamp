# PHP Basics: Syntax for Beginners

PHP is a server-side programming language. Code is usually saved in a `.php` file and runs on a web server or from the command line.

## PHP tags and statements

PHP code goes between `<?php` and `?>`. In a file that contains only PHP, the closing tag is usually omitted.

```php
<?php
echo "Hello, world!";
```

Most PHP statements end with a semicolon. PHP keywords are not case-sensitive, but variable names are case-sensitive. Use consistent casing.

## Comments

```php
// Single-line comment
# Also a single-line comment

/* Multi-line
   comment */

/**
 * Documentation comment (PHPDoc) for a function.
 *
 * @param string $name The name to greet.
 * @return string A greeting.
 */
function greet(string $name): string
{
	return "Hello, " . $name;
}
```

PHPDoc comments start with `/**` and can document functions, classes, properties, and parameters. Tools and IDEs can use tags such as `@param` and `@return` to provide help and type information.

## Output

Use `echo` or `print` to output text. `echo` is commonly used and can output multiple values.

```php
echo "Welcome";
echo "Name: ", "Ari";
echo ("Welcome Admin"); // less used
print "Hello again";
print("Hello world");
```
