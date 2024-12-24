function foo(array $arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      $keysToRemove[] = $key;
    }
  }
  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$arr = ['foo', 'bar', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [3] => baz )

//Alternative solution using array_filter:
function foo2(array $arr): array {
  return array_filter($arr, fn($value) => $value !== 'bar');
}
$arr = ['foo', 'bar', 'bar', 'baz'];
$result = foo2($arr);
print_r($result); // Output: Array ( [0] => foo [3] => baz )