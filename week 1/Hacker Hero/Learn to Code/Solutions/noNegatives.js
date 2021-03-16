function noNeg(arr){
    console.log(arr.map(a => a.toString()[0] !== '-' ? a : 0));
}

noNeg([1,5,10,-2]);
noNeg([1,5,10]);
noNeg([1,-5,-10]);
noNeg([2,-5,-10, -5]);
noNeg([-1, -3, -5]);