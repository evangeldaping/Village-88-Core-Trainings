for(var i=0; i<5;i++){   
    console.log(i);
}
// T-Diagram
// Variables             Values
// i                  0->1->2->3->4

// output
// 0, 1, 2, 3, 4

console.log("----------");

for(var i=0; i<5; i++)
{
    i = i + 1;  
    console.log(i);
}

// T-Diagram
// Variables             Values
// i                  0->1->2->3->4

// i = i + 1
// 0 = 0 + 1 = 1
// 1 = 1 + 1 = 2
// 2 = 2 + 1 = 3
// 3 = 3 + 1 = 4
// 4 = 4 + 1 = 5

// output
// 1, 2, 3, 4, 5

console.log("----------");

for(var i=0; i<5; i++)
{
    i = i + 3; 
    console.log(i);
}

// T-Diagram
// Variables             Values
// i                  0->1->2->3->4

// i = i + 3
// 0 = 0 + 3 = 3
// 1 = 1 + 3 = 4
// 2 = 2 + 3 = 5
// 3 = 3 + 3 = 6
// 4 = 4 + 3 = 7

// output
// 3, 4, 5, 6, 7

console.log("----------");

function y(num1, num2){   
    return num1+num2;
}
console.log(y(2,3))
console.log(y(3,5))

// T-Diagram
// Variables             Values
// num1                  2->3
// num2                  3->5

// num1 + num2
// 2 + 3 = 5
// 3 + 5 = 8

// output
// 5, 8

console.log("----------");

function y(num1, num2){
    console.log(num1);   
    return num1+num2;
}
console.log(y(2,3))
console.log(y(3,5))

// T-Diagram
// Variables             Values
// num1                  2->3
// num2                  3->5

// num1
// 2, 3

// num1 + num2
// 2 + 3 = 5
// 3 + 5 = 8

// output
// 2, 5, 3, 8

console.log("----------");

a = 15;
console.log(a);
function y(a){
    console.log(a);   
    return a;
}
b = y(10);
console.log(b);

// T-Diagram
// Variables             Values
// a                  15
// b                  10

// console.log(a)
// 15
//function y(a)
// 10, 10

// 10

// output
// 15, 10, 10

console.log("----------");

a = 15;
console.log(a);
function y(a){
    console.log(a);   
    return a*2;
}
b = y(10);
console.log(b);

// T-Diagram
// Variables             Values
// a                  15
// b                  10

// console.log(a)
// 15
//function y(a)
// 10, 10

// 10

// output
// 15, 10, 20