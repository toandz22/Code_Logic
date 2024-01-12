<!-- Given an integer array nums, find the 
subarray
with the largest sum, and return its sum.

Example 1:
Input: nums = [-2,1,-3,4,-1,2,1,-5,4]
Output: 6

Explanation: The subarray [4,-1,2,1] has the largest sum 6.
Example 2:
Input: nums = [1]
Output: 1
Explanation: The subarray [1] has the largest sum 1. -->

<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        if (empty($nums)) {
            return 0;
        }
        if (count($nums) == 1) {
            return $nums[0];
        }

        $maxSum = $nums[0];
        $currentSum = 0;
        
        foreach($nums as $num) {
            if ($num > ($currentSum + $num)) {
                $currentSum = $num;
            } else {
                $currentSum = $currentSum + $num;
            }
            if ($currentSum > $maxSum) {
                $maxSum = $currentSum;
            }
        }
        return $maxSum;
    }
}