//Example 1
// a = 35;
// console.log(a);
// function hello(){
//     a = 50;
//     console.log(a);
// }
// console.log(a);
// b = hello();
// console.log(b);

//output: 35 50 undefined

//Example 2
// a = 35;
// console.log(a);
// function hello(a) {
//     a = 50;
//     console.log(a);
//     return 20;
// }
// console.log(a);
// b = hello(a);

//output 35 20 35 50

//Example 3
a = 20;
console.log(a);
function hello() {
    a = 50;
    console.log(a);
    return a;
}
a = hello(a);
console.log(a);

//output 20 undefined 50