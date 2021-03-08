function bubbleSort(arr){
    var messy = true;
    while (messy) {
        messy = false;
        for (var i = 1; i < arr.length; i++) {
            if (arr[i] < arr[i-1]) {
                messy = true;
                var temp = arr[i];
                arr[i] = arr[i-1];
                arr[i-1] = temp;
            }
        }
    }

    console.log(arr);
}

bubbleSort([5,3,1,2]);
bubbleSort([5,4,3,2,1]);
bubbleSort([5, 3, 1, -1, -3]);
bubbleSort([5, 3, 1]);