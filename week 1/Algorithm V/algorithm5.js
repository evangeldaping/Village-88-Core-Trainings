function returnArrayCountGreaterThanY(arr, y){
var count = 0;

    for (var i = 0; i < arr.length; i++) {
        if (arr[i] > y) {
            count++;
        }
    }

    console.log(count);
}
returnArrayCountGreaterThanY( [2,3,5], 4);
returnArrayCountGreaterThanY( [2,3,5], 1);
returnArrayCountGreaterThanY( [4,10,15], 10);
returnArrayCountGreaterThanY( [4,10,15], 20);

console.log("----------");

function findMinMaxAndAve(arr){
    sum = 0;
    if(arr.length === 0){
        return sum;
    }
    for (let i = 0; i < arr.length; i++){
        sum += arr[i];
    }
    console.log("The average is:" + sum / arr.length);

    var minMaxArray = arr.reduce(function (r, n) {
            r[0] = (!r[0])? n : Math.min(r[0], n);
            r[1] = (!r[1])? n : Math.max(r[1], n);
            return r;
        }, []);
    console.log("Minimun and Maximum values are:" + minMaxArray);
}

findMinMaxAndAve([1,3,5]);
findMinMaxAndAve([-1,3,5]);
findMinMaxAndAve([-1,-3,-5]);
findMinMaxAndAve([-1, -3, 10]);

console.log("----------");

function replaceNegatives(arr){
    console.log(arr.map(a => a.toString()[0] !== '-' || a.toString()[0] == 0 ? a : 'Dojo'));
}

replaceNegatives([1,2,-3,-5,5]);

console.log("----------");

function removeVals(arr, start, end){
    while (end >= start) {
        for (i = end; i < arr.length - 1; i++) {
            arr[i] = arr[i + 1];
        }
        end--;
        arr.pop();
    }
    console.log(arr);
}

removeVals([20,30,40,50,60,70],2,4);
