/_ STRINGS _/

Single quote '' - variables cannot be used with it.
Double Quote "" - variable can be used with it.

e.g

```php
$firstname = "Chris";
$lastname = "Nike";
$fullname = "$firstname $lastname";
// or
$fullname = "{$firstname} - {$lastname}";

$lastname[3] = "0";
echo $lastname[1];

```

// Heredoc
Treats strings as if in double quotes

```php
$text = <<<TEXT
line 1
line 2
line 3
TEXT;

echo nl2br($text);
```

// Nowdoc
Treats strings as single quote
Note: Identifier must be in single quote

```php
$text = <<<'TEXT'
line 1
line 2
line 3
TEXT;

echo nl2br($text);
```
