function returnArrayCountGreaterThanY(arr, y){
    var count = 0;

    for (var i = 0; i < arr.length; i++) {
        if (arr[i] > y) {
        count++;
        }
    }

    console.log(count);
}

returnArrayCountGreaterThanY( [2,3,5], 4);
returnArrayCountGreaterThanY( [2,3,5], 1);
returnArrayCountGreaterThanY( [4,10,15], 10);
returnArrayCountGreaterThanY( [4,10,15], 20);