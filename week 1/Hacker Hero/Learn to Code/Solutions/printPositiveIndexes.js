function printPositiveIndex(arr){
    console.log((arr.map((ele, index) => [ele, index])
        .filter(([ele]) => ele > 0)
        .map(([_, origIndex]) => origIndex)).join(' '));
}

printPositiveIndex([1, 3, -10]);
printPositiveIndex([10, 5, -5, 15]);
printPositiveIndex([10, 5, 5, 15]);