function multiply(a,b) {
    return a*b;
}

function square(n) {
    return multiply(n,n);
}

function cube(x) {
    return multiply(square(x),x);
}

console.log(cube(3));

console.log(multiply(square(2+square(3+1+cube(1))), square(2)));