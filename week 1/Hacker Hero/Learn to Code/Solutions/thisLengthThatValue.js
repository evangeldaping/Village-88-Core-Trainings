function thisLengthThatValue(num1, num2){
    var arr = [];

    for (var i = 0; i < num1; i++) {
        arr.push(num2);
    }
    console.log(arr);

    if (num1 === num2) {
        console.log('Jinx!!!');
    }
}

thisLengthThatValue(3,5);
thisLengthThatValue(2,10);
thisLengthThatValue(3,10);
thisLengthThatValue(1,55);
thisLengthThatValue(10,2);