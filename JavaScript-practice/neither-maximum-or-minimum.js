/**
 * @param {number[]} nums
 * @return {number}
 */
var findNonMinOrMax = function(nums) {
    let min=Infinity;
    max=0;
    for(let i=0;i<nums.length;i++){
        max=Math.max(max,nums[i]);
        min=Math.min(min,nums[i]);
    }
    for(let j=0;j<nums.length;j++){
        if(nums[j]!==max && nums[j]!==min){
            return nums[j];
        }
    }
    
    return -1;
    
};