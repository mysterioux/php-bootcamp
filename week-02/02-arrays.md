# PHP Arrays: Basic Lessons

An **array** stores multiple values in one variable. PHP arrays can use numbered keys, named keys, or a mix of both.

## 1. Create an indexed array

Indexed arrays use integer keys, starting at `0` by default:

```php
$fruits = ["apple", "banana", "orange"];

echo $fruits[0]; // apple
echo $fruits[2]; // orange
```

You can also create an array with `array()`:
This method is old now

```php
$numbers = array(10, 20, 30);
```

## 2. Add and change values

Assign to an existing key to change its value. Use `[]` to add an item at the end:

```php
$fruits[1] = "pear";
$fruits[] = "grape";

print_r($fruits);
```

## 3. Create an associative array

Associative arrays use named keys:

```php
$person = [
	"name" => "Mina",
	"age" => 24,
    "sex" => "male",
    "salary" => 5000.00,
    "is_active" => true
];

echo $person["name"]; // Mina
$person["city"] = "Toronto";
```

Keys are case-sensitive strings. Use the key to read, add, or update a value.

## 4. Loop through an array

Use `foreach` to visit every value:

```php
foreach ($fruits as $fruit) {
	echo $fruit . "\n";
}
```

To access both keys and values:

```php
foreach ($person as $key => $value) {
	echo $key . ": " . $value . "\n";
}
```

## 5. Common array functions

```php
count($fruits);                    // number of items
in_array("apple", $fruits);       // check whether a value exists
array_push($fruits, "melon");      // add one or more items to the end
array_pop($fruits) // removes the last element in the array
array_shift($fruits) // removes the first element
array_key_exist('orange', $fruit) // checks if a certain value exsits in the array
isset($fruit[0]) // if the key of the array exists
sort($fruits);                     // sort indexed values in place
```

`unset()` removes an item by key:

you can specify an index to remove
e.g

```php
unset($fruits[0]);
```

Removing an indexed item does not automatically renumber the remaining keys. Use `array_values()` if you need consecutive numeric keys again:

```php
$fruits = array_values($fruits);
```

## 6. Multidimensional arrays

An array can contain other arrays:

```php
$students = [
	["name" => "Kai", "grade" => 90],
	["name" => "Lee", "grade" => 85],
];

echo $students[0]["name"]; // Kai
```

Note: In array, the key pair is either number or string. PHP tends to convert into string

```php
$x = [ true => 1, "1" => 1, 1 = 1, 1.0 = 1]
```

## Practice

1. Make an indexed array with three favorite foods and print the second one.
2. Make an associative array for a book with `title` and `author` keys.
3. Loop through the book's values and print each one.
