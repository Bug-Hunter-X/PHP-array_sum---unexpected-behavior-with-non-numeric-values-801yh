function foo(array $arr): int {
  if (empty($arr)) {
    return 0; // Handle empty array
  }

  //Using array_sum() for the sum of the array elements.
  return array_sum($arr);
}