function fibonacci(index){
    var fibArray = [0, 1, 1];

    for (var i = 3; i <= index; i++) {
        fibArray[i] = fibArray[i - 1] + fibArray[i - 2];
    }

    console.log(fibArray[index]);
}

fibonacci(0);
fibonacci(1);
fibonacci(2);
fibonacci(5);
fibonacci(6);
fibonacci(7);