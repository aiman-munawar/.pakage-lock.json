/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number}
 */
var searchInsert = function(nums, target) {
    let left=0;
    let right=nums.length-1;
    let mid=Math.floor((left+right)/2);
    while(left<=right){
        if(nums[mid]>target){
            right=mid-1;
        }
        else if(nums[mid]<target){
            left=mid+1;
        }
        else if(nums[mid]===target){
            return mid;
        }
        mid=Math.floor((left+right)/2);
    }
    return left;
};