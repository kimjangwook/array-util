## KimJangwook\ArrayUtil\ArrayUtil

```php
use KimJangwook\ArrayUtil\ArrayUtil;

// Test Varables
$testArr = [
    [ 'name' => 'a', 'age' => 30 ],
    [ 'name' => 'b', 'age' => 28 ],
    [ 'name' => 'c', 'age' => 30 ],
];
$trueCallback = function ($person) {
   return $person['age'] === 30;  
};
$falseCallback = function ($person) {
   return $person['age'] === 29;  
};

// find(): Shift value that result of the array_filter() function.
ArrayUtil::find($testArr, $trueCallback); // [ 'name' => 'a', 'age' => 30 ]
ArrayUtil::find($testArr, $falseCallback); // null

// exists(): Return true if item that is satisfied condition is exists
ArrayUtil::exists($testArr, $trueCallback); // true
ArrayUtil::exists($testArr, $falseCallback); // false
```