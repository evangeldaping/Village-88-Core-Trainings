function heights(arr){
    let highest = 0;
    let visible = [];

    for(let i = 0; i < arr.length; i++) {
        if (arr[i] > highest) {
            highest = arr[i];
            visible.push(arr[i]);
        }
    }

    console.log(visible);
}

heights( [-1, 1, 1, 7, 3] );
heights( [0, 4] );
heights( [-1, 1, 1, 7, 3, 5, 9] );
heights( [-1, 1, 1, 7, 3, 5, 9, -3, 3, 15] );