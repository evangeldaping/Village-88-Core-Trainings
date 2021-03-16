function printPositives(arr){
    console.log(arr.filter(x => x>=0).join(' '));
}


printPositives([-1,3,-5,10]);
printPositives([-1,3,-5]);
printPositives([-1,10,15]);