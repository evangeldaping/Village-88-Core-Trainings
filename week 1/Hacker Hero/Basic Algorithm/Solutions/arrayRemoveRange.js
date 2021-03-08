function removeRange(arr, start, end){
    while (end >= start) {
        for (i = end; i < arr.length - 1; i++) {
            arr[i] = arr[i + 1];
        }
        end--;
        arr.pop();
    }
    console.log(arr);
}

removeRange([20,30,40,50,60,70],2,4);
removeRange([20,30,40,50,60,70],1,3);
removeRange([20,30,40,50,60,70],1,4);
removeRange([1,2,3,4,5,6],2,5);