function sumToOne(num) {
    var str = num.toString();
    var sum = 0;

    if (str.length == 1) {
        sum = parseInt(str, 10);
        console.log(sum);
    } else {
        for (var i = 0; i < str.length; i++) {
        sum += parseInt(str.charAt(i), 10);
        }
        console.log(sumToOne(sum));
    }
}

sumToOne(35);
sumToOne(928);
sumToOne(5798);
sumToOne(35798);