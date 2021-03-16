function greaterThanSecond(arr){
    if (arr.length <= 1) {
        console.log(false);
    } else {
        var newarr = [];
        for (var x = 0; x < arr.length; x++) {
        if (arr[x] > arr[1]) {
            newarr.push(arr[x]);
        }
        }
        console.log(newarr);
    }
}

greaterThanSecond([1, 3, 5, 7]);
greaterThanSecond([0, -3, 2, 5]);
greaterThanSecond([2]);
greaterThanSecond([]);
greaterThanSecond([0, 1, 2, -5]);