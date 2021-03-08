function isPrime(num){
    var prime;

    //check for divisibilty up to num (exclusive)
    for (var i = 2; i < num; i++) {
        if (num % i == 0) {
            prime = false;
            break;
        } else {
            prime = true;
        }
    }
    //log whether number is prime or not
    if (prime == false) {
        console.log("false");
    } else {
        console.log("true");
    }
}

isPrime(3);
isPrime(4);
isPrime(13);
isPrime(65);
isPrime(17);