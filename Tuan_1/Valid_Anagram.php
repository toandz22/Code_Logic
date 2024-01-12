<!-- Given two strings s and t, return true if t is an anagram of s, and false otherwise.
An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once.

Example 1:
Input: s = "anagram", t = "nagaram"
Output: true

Example 2:
Input: s = "rat", t = "car"
Output: false -->

<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        if (strlen($s) != strlen($t)) return false;
        
        $anagram1 = $anagram2 =[];
        for($i =0; $i <strlen($s); $i++) {
            $anagram1[$s[$i]]++;
            $anagram2[$t[$i]]++;
        }
        return $anagram1 == $anagram2;
    }
}