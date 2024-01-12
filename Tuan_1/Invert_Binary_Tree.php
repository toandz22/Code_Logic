<!-- Given the root of a binary tree, invert the tree, and return its root.
Input: root = [4,2,7,1,3,6,9]
Output: [4,7,2,9,6,3,1]

Example 2:
Input: root = [2,1,3]
Output: [2,3,1] -->

<?php
class Solution {

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function invertTree($root) {
        if(!$root){
            return $root; 
        }
        $right = $root->right;
        $left = $root->left;

        $root->right = $this->invertTree($left);
        $root->left = $this->invertTree($right);

        return $root;
    }
}