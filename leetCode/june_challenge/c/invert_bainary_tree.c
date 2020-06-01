/**
 * Definition for a binary tree node.
 * struct TreeNode {
 *     int val;
 *     struct TreeNode *left;
 *     struct TreeNode *right;
 * };
 */

//Time 4ms
//Day 1: 1st June 2020
//Idea just swap left and right child of every root

struct TreeNode* invertTree(struct TreeNode* root){
    
    if (root==NULL)return;
    struct TreeNode *temp;
    temp=root->left;
    root->left=root->right;
    root->right=temp;
    invertTree(root->left);
    invertTree(root->right);
    return root;

}
