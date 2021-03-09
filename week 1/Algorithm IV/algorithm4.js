function a(x,y){
    return 5;
}
console.log(a(5,5))

console.log("----------");

function b(x,y){
    z = []
    z.push(x);
    z.push(y);
    z.push(5);
    console.log(z);
    return z;
}
c = b(2,2)
console.log(c);
console.log(b(6,8));

console.log("----------");

function a(x){
    z = [];
    z.push(x);
    z.pop();
    z.push(x);
    z.push(x);
    return z;
}
y = a(2);
y.push(5);
console.log(y);

console.log("----------");

function aa(x){
    if(x[0] < x[1]) {
        return true;
    }
    else {
        return false;
    }
}
b = aa([2,3,4,5])
console.log(b);

console.log("----------");

function aaa(x){
    for(var i=0; i<x.length; i++){
        if(x[i] > 0){
            x[i] = "Coding";
        }
    }
    return x;
}
console.log(aaa([1,2,3,4]))

console.log("----------");

function a4(x){
    for(var i=0; i<x.length; i++){
        if(x[i] > 5){
            x[i] = "Coding";
        }
        else if(x[i] < 0){
            x[i] = "Dojo";
        }
    }
    return x;
}
console.log(a4([5,7,-1,4]))

console.log("----------");

function a5(x){
    if(x[0] > x[1]) {
        return x[1];
    }
    return 10;
}
b = a5([5,10])
console.log(b);

console.log("----------");

function sum(x){
    sum = 0;
    for(var i=0; i<x.length; i++){
        sum = sum + x[i];
        console.log(sum);
    }
    return sum;
}

console.log("----------");

console.log("Part 2");

console.log("----------");

function printAverage(x){
    sum = 0;
   // your code here
    if(x.length === 0){
        return sum;
        
    }
    for (let i = 0; i < x.length; i++){
        sum += x[i];
    }
    return sum / x.length;
}
y = printAverage([1,2,3]);
console.log(y); // should log 2

y = printAverage([2,5,8]);
console.log(y); // should log 5

console.log("----------");

function returnOddArray(){
   // your code here
    for(i = 1; i <= 255; i++){ 
    if((i % 2) != 0){ 
            console.log(i);
        } 
    } 
}
y = returnOddArray();
console.log(y); // should log [1,3,5,...,253,255]

console.log("----------");

function squareValue(x){
   // your code here
    for (var i = 0; i < x.length; i++)
    {
        x[i] *= x[i];
    }
    return x;
}
y = squareValue([1,2,3]);
console.log(y); // should log [1,4,9]

y = squareValue([2,5,8]);
console.log(y); // should log [4,25,64]
