function multiply(x,y){
    console.log(x);
    console.log(y);
}
b = multiply(2,3);
console.log(b);


console.log("----------");

function multiply(x,y){
    return x*y;
}
b = multiply(2,3);
console.log(b);
console.log(multiply(5,2));

console.log("----------");

var x = [1,2,3,4,5,10];
for(var i=0; i<5; i++)
{
    i = i + 3; 
    console.log(i);
}

// T-diagram     values
// i            0->1->2->3->4

// i = i + 3
// 0 = 0 + 3 = 3
// 1 = 1 + 3 = 4
// 2 = 2 + 3 = 5
// 3 = 3 + 3 = 6
// 4 = 4 + 3 = 7

console.log("----------");

var x=15;
console.log(x);
function awesome(){
    var x=10;
    console.log(x);
}
console.log(x);
awesome();
console.log(x);

console.log("----------");

for(var i=0; i<15; i+=2){
    console.log(i);
}

// T-diagram     values
// i            0->2->4->6->8->10->12

// i = i + 2
// 0 = 0 + 2 = 2
// 2 = 2 + 2 = 4
// 4 = 4 + 2 = 6
// 6 = 6 + 2 = 8
// 8 = 8 + 2 = 10
// 10 = 10 + 2 = 12
// 12 = 12 + 2 = 14

// output
// 0, 2, 4, 6, 8, 10, 12, 14

console.log("----------");

for(var i=0; i<3; i++){
    for(var j=0; j<2; j++){      
        console.log(i*j);
    }
}

// T-diagram     values
// i            0->1->2
// j            0->1

// i * j
// 0 * 0 = 0
// 0 * 1 = 0

// i * j
// 1 * 1 = 1
// 2 * 1 = 2

// output
// 0, 0, 0, 1, 0, 2

console.log("----------");

function looping(x,y){
    for(var i=0; i<x; i++){
        for(var j=0; j<x; j++){        
            console.log(i*j);
        } 
    }
}
z = looping(3,3);
console.log(z);

// T-diagram     values
// i            0->1->2
// j            0->1

// i * j
// 0 * 0 = 0
// 0 * 1 = 0

// i * j
// 1 * 1 = 1
// 2 * 1 = 2

// output
// 0, 0, 0, 0, 1, 2, 0, 2, 4

console.log("----------");

console.log("Part 2");

console.log("----------");

function printUpTo(x){
    for(var i=1; i<=x; i++){
        console.log(i);       
    }
    return Object.is(Math.abs(x), + x);
}
//printUpTo(1000); // should print all the integers from 1 to 1000
y = printUpTo(-10); // should return false
console.log(y); // should print false

console.log("----------");

function printSum(x){
    var sum = 0;
    //your code here
    for(var i=1; i<=x; i++){
        console.log(i);
        sum += i;          
    }
    return sum
}
//y = printSum(255) // should print all the integers from 0 to 255 and with each integer print the sum so far.
console.log(y) // should print 32640

console.log("----------");

function printSumArray(x){
    var sum = 0;
    for(var i=0; i<x.length; i++) {
        //your code here
        if(isNaN(x[i])){
            continue;
        }
            sum += Number(x[i]);
        }
    
    return sum;
}
console.log( printSumArray([1,2,3]) ); // should log 6

console.log("----------");

var array = [1, 30, 5, 7];
var largest= 0;

for (i=0; i<=largest;i++){
    if (array[i]>largest) {
        var largest=array[i];
    }
}
console.log(largest);