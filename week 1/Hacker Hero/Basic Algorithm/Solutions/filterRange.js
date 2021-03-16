function filterRange(arr, min, max){
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] >= max || arr[i] <= min) {
            for (var j = i; j < arr.length; j++) {
                arr[j] = arr[j + 1];
            }
            arr[arr.length-1];
            arr.pop();
            i--;
        }
    }
    console.log(arr);
}

filterRange([1,3,5,7,10], 4, 8);
filterRange([1,3,5,7,10], -1, 4);
filterRange([2,4,3,5], 2, 6);
filterRange([2,4,3,5], 0, 4);
filterRange([6,2,-3,5,7], 3, 8);