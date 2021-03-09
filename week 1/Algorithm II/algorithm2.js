function a(){
    console.log('hello');
}
    console.log('Dojo');

console.log("----------");

function b(){
    console.log('hello');
    return 15;
}
    x = b();
    console.log('x is', x);

console.log("----------");

function c(n){
    console.log('n is', n);
    y = n*2;
    return y;
}
    x = c(3) + c(5);
    console.log('x is', x);

console.log("----------");

function op(a,b){
    c = a+b;
    console.log('c is', c);
    return c;
}
    x = op(2,3) + op(3,5);
    console.log('x is', x);

console.log("----------");

function opq(a,b){
    c = a+b;
    console.log('c is', c);
    return c;
}
    x = opq(2,3) + opq(3,opq(2,1)) + opq(opq(2,1),opq(2,3));
    console.log('x is', x)
