function countPositives(arr){
    var count = 0;

    for (var i = 0; i < arr.length; i++) {
        if (arr[i] >= 0) {
        count++;
        }
    }

    arr[arr.length - 1] = count;
    console.log(arr);
}


countPositives([-1,1,1,1]);
countPositives([-1,-5,-5,10]);
countPositives([1,2,3,2]);