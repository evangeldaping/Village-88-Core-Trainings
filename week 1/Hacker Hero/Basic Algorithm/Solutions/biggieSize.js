function makeItBig(arr){
    console.log(arr.map(a => a.toString()[0] === '-' || a.toString()[0] == 0 ? a : 'big'));
}
makeItBig([-1,3,5,-5]);
makeItBig([2,4,6]);
makeItBig([-4,0,4]);