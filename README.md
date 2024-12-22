# PHP: Unexpected Behavior in calculateSum() Function Due to Missing Error Handling

This repository demonstrates a common, yet subtle, error in PHP: a function failing silently when encountering unexpected input data. The `calculateSum()` function is intended to sum an array of numbers, but it lacks error handling for non-numeric inputs.

The `bug.php` file showcases the function's unexpected behavior when passed an array containing a non-numeric value. The `bugSolution.php` file presents a corrected version, incorporating error handling to make the function more robust and reliable.