/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }

 Day 1 : 1st June 2020
 Idea : just swap child of every node 


 */
class Solution {

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function invertTree($root) {
        if ($root==NULL)return $root;
        $temp=$root->left;
        $root->left=$root->right;
        $root->right=$temp;
        $root->left=$this->invertTree($root->left);
        $root->right=$this->invertTree($root->right);
        return $root;
    }
}
