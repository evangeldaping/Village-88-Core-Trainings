function bePositive(arr){
    const arry = arr.map( v => Math.floor( Math.abs(v) * 100) / 100 );

    console.log(arry);
}

bePositive([-1,-3,-5]);
bePositive([-1,-3,-5, 7, -9]);
bePositive([0,2,4, -6, -8]);
bePositive([-1]);