<!-- 
Array manipulation functions in PHP 
-->

<?php
$basicArray = ['apple', 'banana', 'orange'];

$associativeArray = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];

$multiDimensionalArray = [
    ['name' => 'John', 'age' => 30],
    ['name' => 'Jane', 'age' => 25],
    ['name' => 'Doe', 'age' => 35]
];

$arrayWithFunctions = [
    'array_map' => function($array, $callback) {
        return array_map($callback, $array);
    },
    'array_filter' => function($array, $callback) {
        return array_filter($array, $callback);
    },
    'array_reduce' => function($array, $callback, $initial) {
        return array_reduce($array, $callback, $initial);
    }
];

$arrayByFunction = Array(
    "apple" => "fruit",
    "carrot" => "vegetable",
    "banana" => "fruit",
    "broccoli" => "vegetable",
);

$fruit = array_filter($arrayByFunction, function($value) {
    return $value === "fruit";
});

$vegetable = array_filter($arrayByFunction, function($value) {
    return $value === "vegetable";
});

$fruit = array_keys($fruit);
$vegetable = array_keys($vegetable);


// Print the results
echo "<h2>Basic Array</h2>";
print_r($basicArray);
echo "<h2>Associative Array</h2>";
print_r($associativeArray);
echo "<h2>Multi-Dimensional Array</h2>";
print_r($multiDimensionalArray);
echo "<h2>Array with Functions</h2>";
print_r($arrayWithFunctions);
echo "<h2>Array by Function</h2>";
print_r($arrayByFunction);
echo "<h2>Fruits</h2>";
print_r($fruit);
echo "<h2>Vegetables</h2>";
print_r($vegetable);
echo "<h2>Array Manipulation Functions</h2>";
print_r($arrayWithFunctions['array_map']($basicArray, function($item) {
    return strtoupper($item);
}));
echo "<h2>Array Filter</h2>";
print_r($arrayWithFunctions['array_filter']($basicArray, function($item) {
    return $item !== 'banana';
}));
echo "<h2>Array Reduce</h2>";
print_r($arrayWithFunctions['array_reduce']($basicArray, function($carry, $item) {
    return $carry . ' ' . $item;
}, 'Fruits:'));
echo "<h2>Array Merge</h2>";
print_r(array_merge($basicArray, $fruit));
echo "<h2>Array Unique</h2>";
print_r(array_unique(array_merge($basicArray, $fruit)));
echo "<h2>Array Slice</h2>";
print_r(array_slice($basicArray, 1, 2));
echo "<h2>Array Splice</h2>";
print_r(array_splice($basicArray, 1, 1, ['grape', 'kiwi']));
?>