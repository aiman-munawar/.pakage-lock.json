/**
 * @param {number[]} height
 * @return {number}
 */
var trap = function(height) {
    let left=[];
    let right=[];
    left[0]=height[0];
    right[height.length-1]=height[height.length-1];
    let collector=0;
    for(let i=1;i<height.length-1;i++){
        left[i]=Math.max(height[i],left[i-1]);
    }
    for(let j=height.length-2;j>=0;j--){
        right[j]=Math.max(height[j],right[j+1]);
    }
    for(let k=0;k<height.length-1;k++){
       let waterlevel=Math.min(left[k],right[k]);
       let water=waterlevel-height[k];
       collector=collector+water;
    }
    return collector;
};