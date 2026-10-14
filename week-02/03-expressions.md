```markdown
# PHP Expressions

An **expression** is PHP code that produces a value. A number, a variable, or a calculation can all be expressions.

```php
42                 // produces the integer 42
"Hello"            // produces a string
2 + 3              // produces 5
$price * $quantity // produces a calculated value
```

## Variables and assignment

PHP variable names start with `$`. Use `=` to assign the result of an expression to a variable.

```php
$price = 12;
$quantity = 3;
$total = $price * $quantity;

echo $total; // 36
```

## Arithmetic expressions

```php
echo 8 + 2;  // 10: addition
echo 8 - 2;  // 6: subtraction
echo 8 * 2;  // 16: multiplication
echo 8 / 2;  // 4: division
echo 8 % 3;  // 2: remainder
echo 2 ** 3; // 8: exponentiation
```

## Strings and concatenation

The `.` operator joins strings.

```php
$firstName = "Ada";
$message = "Hello, " . $firstName . "!";
echo $message; // Hello, Ada!
```

## Comparisons

Comparison expressions produce a boolean value: `true` or `false`.

```php
var_dump(5 > 3);   // bool(true)
var_dump(5 === 5); // bool(true): same value and type
var_dump(5 < 3);   // bool(false)
```

Use `===` (identical) and `!==` (not identical) when you want to compare both value and type.

## Logical expressions

Use `&&` for AND, `||` for OR, and `!` for NOT.

```php
$age = 20;
$hasTicket = true;
$canEnter = $age >= 18 && $hasTicket;

var_dump($canEnter); // bool(true)
```

## Order of operations

Multiplication is evaluated before addition. Parentheses let you specify the order clearly.

```php
$result = 2 + 3 * 4;   // 14
$result = (2 + 3) * 4; // 20
```

## Expressions in statements

An expression produces a value; a statement is a complete instruction. Statements often contain expressions and usually end with a semicolon.

```php
$subtotal = 10 * 3; // assignment statement containing an expression
echo $subtotal + 2; // displays 32
```

## Practice

1. Set `$length` to `7` and `$width` to `4`, then calculate `$area`.
2. Join a first name and a last name into one string.
3. Write a comparison that checks whether `$area` is greater than `20`.
4. Use parentheses to make `4 + 6 * 2` produce `20`.
```
