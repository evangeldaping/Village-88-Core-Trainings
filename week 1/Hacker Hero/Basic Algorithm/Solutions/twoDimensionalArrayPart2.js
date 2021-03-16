function twoDimensional(row, column){
    let arr = [];
    // creating two dimensional array
    for (let i = 0; i< row; i++) {
        var arr2 = [];
        for(let j = 0; j< column; j++) {
            if(i==0 || i==row-1 || j==0 || j==column-1){
            arr2.push(1)
        }
        else {
            arr2.push(0);    
        }
    }
    arr.push(arr2);
    }
    console.log(arr);
}


twoDimensional(2,5);
twoDimensional(5,5);
twoDimensional(8,8);