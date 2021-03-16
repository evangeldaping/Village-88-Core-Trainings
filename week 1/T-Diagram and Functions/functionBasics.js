// Without function
var a = 7;
var b = 87;
a += 5;
a *= 30;
b *= a;
console.log("The value of a is currently:", a);
console.log("The value of b is currently:", b);
a /= 3;
b /= a;
console.log("The value of a is currently:", a);
console.log("The value of b is currently:", b);
a *= 27;
b *= 13;
console.log("The value of a is currently:", a);
console.log("The value of b is currently:", b);

//With Function

function printValues() {
    console.log("The value of a is currently:", a);
    console.log("The value of b is currently:", b);
}

var a = 7;
var b = 87;
a += 5;
a *= 30;
b *= a;
printValues();
a /= 3;
b /= a;
printValues();
a *= 27;
b *= 13;
printValues();