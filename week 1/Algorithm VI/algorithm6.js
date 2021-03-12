function resetNegatives(arr){
    for(var i=0; i<=arr.length; i++){
        if(arr[i]<0){
            arr[i] = 0;
        }
    }
    console.log(arr);
}

resetNegatives([-1,2,3,4,5]);
resetNegatives([-1,-2,3,4,5]);
resetNegatives([1,-2,-3,4,5]);
resetNegatives([1,2,-3,-4,5]);
resetNegatives([1,2,3,-4,5]);

console.log("----------");

function moveForward(arr){
    for(var i=0; i<arr.length-1; i++){
        arr[i] = arr[i+1];
    }
    arr[arr.length-1] = 0;
    return arr;
}

moveForward([1,2]);
moveForward([2,3,4]);
moveForward([3,3,4,5]);
moveForward([4,5,6,7,9]);
moveForward([5,6,7,8,9,10]);

console.log("----------");

function returnReversed(arr){
    //solution 1
    for (var i=0; i<arr.length/2; i++) {
        temp = arr[i];
        arr[i] = arr[arr.length-1-i];
        arr[arr.length-1-i] = temp;
    }
    console.log(arr);

    //solution 2
    var container = 0;
    var lastIndex = arr.length-1;
    for(var i=0; i<arr.length/2; i++){
        container = arr[lastIndex];
        arr[i] = container;
        lastIndex--;
    }
    console.log(arr);

}

returnReversed([1,2,3,4,5,6]);
returnReversed([1,2,3,4,5]);
returnReversed([1,2,3,4]);
returnReversed([1,2,3]);
returnReversed([1,2,]);

console.log("----------");

function repeatTwice(element) {

    temp = [];
    for(var i=0; i<element.length; i++){
        temp.push(element[i]);
        temp.push(element[i]);
    }
    console.log(temp);
}

repeatTwice(["Ulysses", 42, false,4])
repeatTwice([4,"Ulysses", 42, false])
repeatTwice([false,4,"Ulysses",42])
repeatTwice([42,false, 4, "Ulysses"])

