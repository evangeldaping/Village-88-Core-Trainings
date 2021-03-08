function addSevenToMost(arr){
    var removeFirst =[];
    var addSeven = 7;

    for (let i = 0; i < arr.length; i++ ){
        removeFirst.push(arr[i]+addSeven) 
    }

    removeFirst.shift();
    console.log(removeFirst);
}

addSevenToMost([1,3,5]);
addSevenToMost([1,3,5,7]);
addSevenToMost([5,10,20]);