function valGreaterThanSecond(arr) {
    var count = 0;
    for (var x = 0; x < arr.length; x++) {
        if (arr[x] > arr[1]) {
        console.log(arr[x]);
        count += arr[x];
        }
    }
    console.log(count);
}

valGreaterThanSecond([1,3,5,7,9,13]);
valGreaterThanSecond([1,3,5,7,9,13]);
valGreaterThanSecond([1,3,-5,7,-9,13]);
valGreaterThanSecond([1,5,3,7,0,19]);
valGreaterThanSecond([1,5,3,7,0,19]);