function threesFives(num){
    var sum = 0;
    for (var i = 1; i <= num; i++) {
        if (i % 5 == 0 || i % 3 == 0) {
        
        } else {
            sum = sum + i;
        }
    }
    console.log(sum);
}

threesFives(10);
threesFives(15);