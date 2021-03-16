function arrayConcat(arr1, arr2){
    let newArr = [];

    for (let i = 0; i < arr1.length; i++) {
        newArr.length += 1;
        newArr[newArr.length - 1] = arr1[i];
    }

    for (let i = 0; i < arr2.length; i++) {
        newArr.length += 1;
        newArr[newArr.length - 1] = arr2[i];
    }

    console.log(newArr);
}

arrayConcat([1,2], [3,4]);
arrayConcat([1,2], [3,4,5]);
arrayConcat([1,2,3], [3,4,5,6]);
arrayConcat([ -1 ], [ -5, 3 ]);