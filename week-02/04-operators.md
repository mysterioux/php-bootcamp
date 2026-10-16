# PHP Operators

Operators perform actions on values and variables. This lesson introduces the operators commonly used in PHP.

## Arithmetic operators

| Operator | Action               |
| -------- | -------------------- |
| `+`      | Add                  |
| `-`      | Subtract             |
| `*`      | Multiply             |
| `/`      | Divide               |
| `%`      | Return the remainder |
| `**`     | Raise to a power     |

```php
$a = 10;
$b = 3;

echo $a + $b; // 13
echo $a % $b; // 1
echo $a ** 2; // 100
```

Check that a divisor is not zero before dividing.

## Assignment operators

`=` assigns a value. Compound assignment updates a variable using its current value:

```php
$total = 10;
$total += 5; // Same as $total = $total + 5
$total -= 2;
$total *= 3;
$total /= 2;
```

// Some functions to know

```php
echo fdiv(10 / 3);
echo fmod(10 / 3);

```

## Comparison operators

Comparisons evaluate to `true` or `false`.

| Operator   | Meaning                                             |
| ---------- | --------------------------------------------------- |
| `==`       | Equal after type conversion                         |
| `===`      | Equal in value and type                             |
| `!=`       | Not equal after type conversion                     |
| `!==`      | Not equal in value or type                          |
| `<`, `>`   | Less than, greater than                             |
| `<=`, `>=` | Less than or equal, greater than or equal           |
| `<=>`      | Returns `-1`, `0`, or `1` when comparing two values |

```php
var_dump(5 == "5");  // true
var_dump(5 === "5"); // false: int and string have different types
var_dump(8 >= 8);     // true
```

Prefer `===` and `!==` when both type and value should match.

## Logical operators

Logical operators combine Boolean expressions:

| Operator | Meaning                                |
| -------- | -------------------------------------- | --- | --------------------------------------- |
| `&&`     | True if both expressions are true      |
| `        |                                        | `   | True if at least one expression is true |
| `!`      | Reverses true and false                |
| `xor`    | True if exactly one expression is true |

```php
$age = 20;
$hasTicket = true;

if ($age >= 18 && $hasTicket) {
	echo "You may enter.";
}
```

## Increment and decrement

`++` adds one and `--` subtracts one. Prefix changes the value before it is used; postfix changes it afterward.

```php
$count = 2;
echo $count++; // Prints 2; $count is now 3
echo ++$count; // $count becomes 4, then prints 4
```

## String operators

The `.` operator joins strings, and `.=` appends text to an existing string.

```php
$firstName = "Ada";
$message = "Hello, " . $firstName . "!";
$message .= " Welcome.";
echo $message;
```

## Conditional operators

The ternary operator chooses between two values based on a condition:

```php
$score = 72;
$result = $score >= 50 ? "Pass" : "Try again";
```

The null coalescing operator (`??`) provides a fallback when a value is absent or `null`:

```php
$name = $_GET["name"] ?? "Guest";
```

## Precedence and parentheses

Precedence determines the order of evaluation. Use parentheses to make the intended order clear:

```php
$result = (2 + 3) * 4; // 20
```

## Practice

1. Create two number variables and print their sum, product, and remainder.
2. Compare `10` and `"10"` with both `==` and `===`. What changes?
3. Write a condition that checks whether `$number` is between 1 and 100, inclusive.
4. Join a first name and last name using the string concatenation operator.
5. Set a default value for an optional variable using `??`.
