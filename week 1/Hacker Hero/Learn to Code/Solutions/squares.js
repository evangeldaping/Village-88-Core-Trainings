function squareVal(arr){
    console.log (arr.map(function (x) {
        console.log(Math.pow(x, 2));
    }));
}

squareVal([1,3,5]);
squareVal([1,-3]);
squareVal([0, 2, 4]);