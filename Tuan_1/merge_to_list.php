<!-- You are given the heads of two sorted linked lists list1 and list2.
Merge the two lists into one sorted list. The list should be made by splicing together the nodes of the first two lists.
Return the head of the merged linked list. 
Input: list1 = [1,2,4], list2 = [1,3,4]
Output: [1,1,2,3,4,4]
-->
<?php
class Solution {

    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        if(is_null($list1)){
            return $list2;
        }elseif(is_null($list2)){
            return $list1;
        }

        if($list1->val < $list2->val){
            $list1->next = $this->mergeTwoLists($list1->next, $list2);
            return $list1;
        }
        $list2->next = $this->mergeTwoLists($list1, $list2->next);
        return $list2;
    }
}