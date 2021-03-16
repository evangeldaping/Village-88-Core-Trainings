function isCreditCardValid(digitArr){
    //step 1
    var last_digit = digitArr[digitArr.length-1];
    console.log('last_digit is', last_digit);
    digitArr.pop();
    console.log('digitArr is now', digitArr);

    //step 2
    for(var i=digitArr.length-1; i>=0; i-=2){
        digitArr[i] = digitArr[i]*2;    
    }
    console.log('digitArr after step 2 is now', digitArr);

    //step 3
    for(var i=0; i<digitArr.length; i++){
        if(digitArr[i] > 9){
            digitArr[i] = digitArr[i] - 9;
            }    
    }
    console.log('digitArr after step 3 is now', digitArr);

    //step 4
    var sum = 0;
    for(var i=0; i<digitArr.length; i++){
        sum += digitArr[i];
    }
    console.log('sum of digitArr after step 4 is now', sum);

    //step 5
    sum += last_digit;
    console.log('sum after adding the last digit is', sum);

    //s return sum % 10 == 0;

    //if sum is multiple of 10 then it's a valid card number
    if(sum % 10 == 0){
        console.log("YES!!! It's a valid number");
        console.log(true);
    }
    else {
        console.log("No... It's not a valid number");
        console.log(false); 
    }
}

isCreditCardValid( [5, 2, 2, 8, 2] );
isCreditCardValid( [5, 2, 3, 8, 2] );
isCreditCardValid( [4,2,2,2,2,2,2,2,2,2,2,2,2] );
isCreditCardValid( [4,0,1,2,8,8,8,2,5,6,8,8,1,8,9,1] );