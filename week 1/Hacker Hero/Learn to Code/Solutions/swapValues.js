function swapFirstLast(arr){
    var inputCopy = [...arr];
    var [first, last] = [inputCopy.splice(0,1), inputCopy.splice(-1)];
    console.log([...last, ...inputCopy, ...first]);
}

swapFirstLast([1,3,5]);
swapFirstLast([1,3,5,7,9]);
swapFirstLast([1,3]);