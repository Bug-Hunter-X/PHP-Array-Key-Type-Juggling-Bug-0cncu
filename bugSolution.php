This solution uses explicit type casting to ensure that array keys are always strings, preventing the type juggling issue:

```php
<?php
$data = [];
$id = 1.5;
$data[(string)$id] = 'value'; // Explicitly convert $id to a string
var_dump($data); // Output will show a string key
$id = "1.5";
$data[$id] = 'value2';
var_dump($data); // Output will show a string key
?>
```

By explicitly casting `$id` to a string using `(string)$id`, we ensure that the array key is always a string, regardless of the original data type of `$id`. This prevents PHP's implicit type conversion from causing unexpected behavior.