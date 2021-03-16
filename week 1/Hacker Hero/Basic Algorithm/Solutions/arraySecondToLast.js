function secondToLast(arr){
    console.log(arr.length >= 2 ? arr[arr.length - 2] : null);
}

secondToLast( [42,true,4,"Kate",7] );
secondToLast([42,true,4,"Kate",7, 9] );
secondToLast([42,true,4,"Kate",7, 9, "dojo", "awesome"]);
secondToLast([1]);