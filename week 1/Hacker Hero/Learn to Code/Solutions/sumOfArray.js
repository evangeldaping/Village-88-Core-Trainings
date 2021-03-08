function findSum(arr){
    if(!Array.isArray(arr)) return;
    console.log(arr.reduce((a, v)=>a + v));
}

findSum([1,2,3]);
findSum([1,3,5]);
findSum([-1,2,-3]);
findSum([-2,0,2]);