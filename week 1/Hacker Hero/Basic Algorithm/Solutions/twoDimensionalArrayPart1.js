function twoDimensional(row, column){
    let arr = [];

    // creating two dimensional array
    for (let i = 0; i< row; i++) {
        for(let j = 0; j< column; j++) {
            arr[i] = [];
        }
    }

    // inserting elements to array
    for (let i = 0; i< row; i++) {
        for(let j = 0; j< column; j++) {
            arr[i][j] = 0;
        }
    }

    console.log(arr);
}

twoDimensional(2,5);
twoDimensional(3,4);
twoDimensional(1,5);