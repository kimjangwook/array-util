## KimJangwook\ArrayUtil\ArrayUtil

```php
use KimJangwook\ArrayUtil\ArrayUtil;

$testArr = [
    [ 'name' => 'a', 'age' => 30 ],
    [ 'name' => 'b', 'age' => 28 ],
    [ 'name' => 'c', 'age' => 30 ],
];

// find(): Shift value that result of the array_filter() function.
ArrayUtil::find($testArr, function ($person) {
   return $person['age'] === 30;  
}); // [ 'name' => 'a', 'age' => 30 ]
ArrayUtil::find($testArr, function ($person) {
   return $person['age'] === 29;  
}); // null
```