function resetNegatives(arr){
    console.log(arr.map(a => a.toString()[0] !== '-' ? a : 0));
}
resetNegatives([1,2,-1,-3]);

console.log("----------");

function moveForward(arr){
    arr.shift();
    arr.push(0);
    console.log(arr);
}
moveForward([1,2,3]);



console.log("----------");

function returnReversed(arr){
    for (var i = 0; i < arr.length / 2; i++) {
        temp = arr[i];
        arr[i] = arr[arr.length - 1 - i];
        arr[arr.length - 1 - i] = temp;
    }
    console.log(arr);
}
returnReversed([1,2,3])

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
repeatTwice([4,"Ulysses", 42, false])
