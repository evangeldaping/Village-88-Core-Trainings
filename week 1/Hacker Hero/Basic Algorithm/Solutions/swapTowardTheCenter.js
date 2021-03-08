function swapTowardCenter(arr){
    var ret = new Array;
    for(var i = arr.length-1; i >= 0; i--) {
        ret.push(arr[i]);
    }
    console.log(ret);
}

swapTowardCenter([true,42,"Ada",2,"pizza"]);
swapTowardCenter([1,2,3,4,5,6]);
swapTowardCenter(["hi", "coding", "dojo", "fans"]);