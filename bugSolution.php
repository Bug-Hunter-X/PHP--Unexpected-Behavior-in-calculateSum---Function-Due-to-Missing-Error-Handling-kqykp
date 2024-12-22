```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      trigger_error("Non-numeric value encountered in array.", E_USER_WARNING);
      //Alternative solution : throw new InvalidArgumentException("Non-numeric value encountered in array."); 
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 'a', 5];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //Now it gives a warning message and correct output
```