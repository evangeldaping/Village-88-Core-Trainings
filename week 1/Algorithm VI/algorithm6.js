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
    if(!arr.length){
        return undefined;
    }
    arr.push(0);
    arr1 = arr.splice(1, arr.length);

    console.log(arr1);
}

moveForward([1,2]);
moveForward([2,3,4]);
moveForward([3,3,4,5]);
moveForward([4,5,6,7,9]);
moveForward([5,6,7,8,9,10]);

console.log("----------");

function returnReversed(arr){
    for (var i = 0; i < arr.length / 2; i++) {
        temp = arr[i];
        arr[i] = arr[arr.length - 1 - i];
        arr[arr.length - 1 - i] = temp;
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

const res = element.reduce((acc, curr, idx) => {
    acc.push(curr, curr);
    // if (idx == 0) 
    // acc.push(curr);
    return acc;
}, []);

console.log(res);
}

repeatTwice(["Ulysses", 42, false,4])
repeatTwice([4,"Ulysses", 42, false])
repeatTwice([false,4,"Ulysses",42])
repeatTwice([42,false, 4, "Ulysses"])

