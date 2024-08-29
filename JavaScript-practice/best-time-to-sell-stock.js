/**
 * @param {number[]} prices
 * @return {number}
 */
var maxProfit = function(prices) {
    let minprice=Infinity;
    let max=0;
    for(let i=0;i<prices.length;i++){
        if(minprice>prices[i]){
            minprice=prices[i];
        }
        else{
           let profit=prices[i]-minprice;
           max=Math.max(profit,max)
        }

    }
    return max;
};