# PHP array_sum() unexpected behavior with non-numeric values

This repository demonstrates a potential issue with PHP's `array_sum()` function and provides a solution for handling cases where the array might contain non-numeric values.  The `array_sum()` function is designed to sum numeric values, and it will produce unexpected results if non-numeric values are included in the array. The provided solution handles this by filtering out non-numeric elements before summation. 

## Bug
The original `foo()` function directly uses `array_sum()` which causes issues with non-numeric array values.  

## Solution
The improved function filters out non-numeric values before summation with the help of `array_filter()` and `is_numeric()`, providing a more robust and accurate result. 