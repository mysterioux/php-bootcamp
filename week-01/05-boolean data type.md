# Using Boolean

```php
$isComplete = false;

// integret 0 -0 = false
// flase 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false


// method
var_dump($isComplete)
is_bool($isComplete)

if($isComplete){
    // do something
}else{
    // do something
}

```

/_ INTEGERS _/

```php
$x = PHP_INT_MIN;
$y = PHP_INT_MAX;
$num = 2_000_000;

var_dump($num);

```
