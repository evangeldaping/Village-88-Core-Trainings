function reverse(arr){
    var temp;

    for (var i = 0; i < arr.length / 2; i++) {
        temp = arr[i];
        arr[i] = arr[arr.length - 1 - i];
        arr[arr.length - 1 - i] = temp;
    }
    console.log(arr);
}

reverse([1,3,5]);
reverse([-1, 3, -5]);
reverse([1, 2, 3, 4, 5]);
reverse([2, 10, 13, 15]);