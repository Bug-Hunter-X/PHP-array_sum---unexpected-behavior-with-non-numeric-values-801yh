function foo(array $arr): int {
  // Filter out non-numeric values using array_filter and is_numeric
  $numericArr = array_filter($arr, 'is_numeric');

  if (empty($numericArr)) {
    return 0; // Handle empty array after filtering
  }

  // Sum only numeric values
  return array_sum($numericArr);
}