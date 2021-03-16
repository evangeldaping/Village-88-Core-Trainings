function printEven4to22(){
    x = 4;
    var sum = 0;
    while(x <= 22) {
    if(x % 2 == 0) {
        sum += x;
        console.log(x); 
    }
    x++;
    }
    console.log(sum);
}

printEven4to22();
printEven4to22();