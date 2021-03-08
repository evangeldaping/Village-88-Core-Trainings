function extractDigit(num,digitNum){
    var separator= 1;

    if(digitNum >= 0) {
        for(var i=0; i<digitNum; i++) {
            separator = separator*10;
        }
        //separator = Math.pow(10, digitNum);
        console.log(separator);
        
        var remainder = num % separator;
        num = (num-remainder)/separator;
        //console.log('num is now', num);
        
        num = num%10;
        console.log('the digit we were looking for was', num);
        console.log(num);
    }
    else {
        var separator = 1;
        
        for(var i=0; i>digitNum; i--){
                separator = separator*10;
            }
            console.log('separator for the negative digitNum is', separator);
            num = num*separator;
            num = num - num%1; //gets rid for the remaining decimals
            console.log('num is now', num);
            num = num%10;
            console.log('after modulus 10, num is now', num);
            console.log(num);
        }
}

extractDigit(1824, 2);
extractDigit(1824, 0);
extractDigit(1234.56, -1);
extractDigit(199.35, 0);
extractDigit(199.35, -1);
extractDigit(199.35, -2);