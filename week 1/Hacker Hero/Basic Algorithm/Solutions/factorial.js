function factorial(num){
    var sum = 1;
    for (var i = 1; i <= num; i++) {
    sum *= i;
    }

    console.log(sum);
}


factorial(3);
factorial(5);
factorial(7);
factorial(8);