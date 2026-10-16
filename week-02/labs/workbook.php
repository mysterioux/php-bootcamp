<?php

// NULL
$x = null;

echo "The value of x is: ";
var_dump($x);
echo "<br>";
var_dump(is_null($x));
echo "<br>";
var_dump($x === null);

// Arrays
$programmingLanguages = array("PHP", "JavaScript", "Python", "Java");
// Old way of creating an array
// $programmingLanguagesOld = array("PHP", "JavaScript", "Python", "Java");    
echo "<br>";
echo str_repeat("*", 100);
echo "<br>";
echo "The value of programmingLanguages is: ";
echo "<pre>";
// print_r() is used to print human-readable information about a variable
print_r($programmingLanguages);
echo "</pre>";
// used for checking if a variable is set and is not NULL
echo isset($programmingLanguages[0]) ? "The first programming language is set." : "The first programming language is not set.";
echo "<br>";
echo isset($programmingLanguages[4]) ? "The fifth programming language is set." : "The fifth programming language is not set.";
echo "<br>";
echo "<br>";
echo str_repeat("*", 100);
array_push($programmingLanguages, "C++", "C#");
echo "<br>";
echo "The value of programmingLanguages after adding C++ and C# is: ";
echo "<pre>";
print_r($programmingLanguages);
echo "</pre>";
echo count($programmingLanguages) . " programming languages are in the array.";
echo "<br>";
echo str_repeat("*", 100);
// Associative Arrays
$programversions =[
    "PHP" => [
        "creator" => "Rasmus Lerdorf",
        "first_release" => "1995",
        "latest_release" => "8.2",
        "extensions" => ".php",
        "is_open_source" => true,
        "website" => "https://www.php.net/",
        "versions" => [
            "5.6" => "2014-08-28",
            "7.0" => "2015-12-03",
            "7.1" => "2016-12-01",
            "7.2" => "2017-11-30",
            "7.3" => "2018-12-06",
            "7.4" => "2019-11-28",
            "8.0" => "2020-11-26",
            "8.1" => "2021-11-25",
            "8.2" => "2022-12-08"
        ]

    ],
    "python" => [
        "creator" => "Guido van Rossum",
        "first_release" => "1991",
        "latest_release" => "3.11",
        "extensions" => ".py",
        "is_open_source" => true,
        "website" => "https://www.python.org/",
        "versions" => [
            "2.7" => "2010-07-03",
            "3.0" => "2008-12-03",
            "3.1" => "2009-06-27",
            "3.2" => "2011-02-20",
            "3.3" => "2012-09-29",
            "3.4" => "2014-03-16",
            "3.5" => "2015-09-13",
            "3.6" => "2016-12-23",
            "3.7" => "2018-06-27",
            "3.8" => "2019-10-14",
            "3.9" => "2020-10-05",
            "3.10" => "2021-10-04",
            "3.11" => "2022-10-24"
        ]
    ],
    "javascript" => [
        "creator" => "Brendan Eich",
        "first_release" => "1995",
        "latest_release" => "ES2021",
        "extensions" => ".js",
        "is_open_source" => true,
        "website" => "https://developer.mozilla.org/en-US/docs/Web/JavaScript",
        "versions" => [
            "ES5" => "2009-12-03",
            "ES6" => "2015-06-17",
            "ES7" => "2016-06-17",
            "ES8" => "2017-06-27",
            "ES9" => "2018-06-27",
            "ES10" => "2019-06-27",
            "ES11" => "2020-06-27",
            "ES12" => "2021-06-27"
        ]
    ]
];
echo "<br>";
echo "The value of programversions is: ";
echo "<pre>";
print_r($programversions);
echo "</pre>"; 
echo $programversions["PHP"]["creator"] . " created PHP in " . $programversions["PHP"]["first_release"] . ". The latest release is " . $programversions["PHP"]["latest_release"] . " and it was released on " . $programversions["PHP"]["versions"]["8.2"] . ".";

// Array Functions
echo "<br>";
echo str_repeat("*", 100);
// Array_pop() removes the last element from an array and returns it
$fruits = ["apple", "banana", "orange"];
echo "<br>";
echo "The value of fruits before removing the last element is: ";
echo "<pre>";
print_r($fruits);
echo "</pre>";
array_pop($fruits);
// array_shift($fruits);
echo "<br>";
echo "The value of fruits after removing the last element is: ";
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<br>";
echo str_repeat("*", 100);

$x = file('Context.txt');