function nToLast(arr, n){
    if (arr.length > n) {
        console.log(arr[arr.length - n]);
    } else {
        console.log(null);
    }
}

nToLast( [5,2,3,6,4,9,7], 3 );
nToLast( [1,2], 3 );
nToLast( [5,2,3,6,4,9,7], 4 );
nToLast( [5,2,3,6,4,9,7], 5 );
nToLast( [1,2,3,5,5,7,10], 1 );