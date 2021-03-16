var thaiFood = 150;
var group = 4;

function tip(bill) {
    console.log(bill*1.2);
    return bill*1.2;
}

//calculate the bill with tip
// divide total by 4

var total = tip(thaiFood); //A function call is equal to whatever that function returns.
console.log(total/group);