# PHP foreach Loop Bug

This repository demonstrates a common, yet subtle, bug in PHP when using foreach loops to modify arrays during iteration.  The issue arises when using `unset()` within the loop, which can lead to unexpected index behavior.  The example shows how unsetting elements doesn't always re-index the array properly, potentially skipping elements.

The `bug.php` file contains the problematic code. The `bugSolution.php` file offers a solution using an alternative iteration approach.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output compared to the expected behavior.