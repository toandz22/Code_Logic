<!-- Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.
An input string is valid if:
Open brackets must be closed by the same type of brackets.
Open brackets must be closed in the correct order.
Every close bracket has a corresponding open bracket of the same type.

Example 1:
Input: s = "()"
Output: true

Example 2:
Input: s = "()[]{}"
Output: true 

<?php
class Solution {

/**
 * @param String $s
 * @return Boolean
 */
function isValid($s) {
    $map = [];
    $correct = ['(' => ')', '[' => ']', '{' => '}'];
    for ($i = 0; $i < strlen($s); $i++){
        if(array_key_exists($s[$i], $correct)) {
            array_push($map, $correct[$s[$i]]);
        } elseif ($s[$i] === end($map)) {
            array_pop($map);
        } else {
            return false;
        }
    }
    return count($map) == 0;
}
}