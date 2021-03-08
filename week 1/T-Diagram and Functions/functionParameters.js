//Example 1
function printNumber (num) {
    console.log(50);
    console.log(num);
}

printNumber(49);
printNumber(13);

//Example 2
// Without function
var arrOne = [1,2,3,4,5];
var arrTwo = [10,20,30,40,50];
var arrThree = [100,200,300,400,500];
for(var i=0; i<arrOne.length; i++){
    console.log(arrOne[i]);
}
for(var j=0; j<arrTwo.length; j++){
    console.log(arrTwo[j]);
}
for(var k=0; k<arrThree.length; k++){
    console.log(arrThree[k]);
}

//Using Funcion
function printArrays(arr) {
    for(var j=0; j<arr.length; j++){
        console.log(arr[j]);
    }
}
var arrOne = [1,2,3,4,5];
var arrTwo = [10,20,30,40,50];
var arrThree = [100,200,300,400,500];
printArrays(arrOne);
printArrays(arrTwo);
printArrays(arrThree);
