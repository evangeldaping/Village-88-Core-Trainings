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
returnArrayCountGreaterThanY( [4,10,15], 30);

console.log("----------");

function findMinMaxAndAve(arr){
    sum = 0;
    var temp = 0;
    
    if(arr.length === 0){
        return sum;
    }
    for (let i = 0; i < arr.length; i++){
        sum += arr[i];
    }
    
    for (var i = 0; i < arr.length; i++) {
        for (var j = i; j < arr.length; j++) {
            if (arr[j] < arr[i]) {
                temp = arr[j];
                arr[j] = arr[i];
                arr[i] = temp;
            }
        }
    }
    console.log("The average is:" + sum / arr.length);
    console.log("Minimun and Maximum values are:" + arr[0] +","+ arr[arr.length-1]);
}

findMinMaxAndAve([1,3,5]);
findMinMaxAndAve([-1,3,5,8]);
findMinMaxAndAve([-1,-3,-5,-8,0]);
findMinMaxAndAve([-1,-3,10,1,3,3.5]);
findMinMaxAndAve([-1,-3,15,25,25.1,25.4,25.5]);

console.log("----------");

function replaceNegatives(arr){
    for(var i=0; i<=arr.length; i++){
        if(arr[i]<0){
            arr[i] = "Dojo";
        }
    }
    console.log(arr);
}

replaceNegatives([-1,2,3,4,5]);
replaceNegatives([1,-2,3,4,5]);
replaceNegatives([1,2,-3,4,5]);
replaceNegatives([1,2,3,-4,5]);
replaceNegatives([1,2,3,4,-5]);

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

removeVals([10,20,30,40,50,60],1,2);
removeVals([20,30,40,50,60,70],2,3);
removeVals([30,40,50,60,70,80],3,4);
removeVals([40,50,60,70,80,90],1,2);
removeVals([50,60,70,80,90,100],2,3);


function sortArray(array) {
    var temp = 0;
    for (var i = 0; i < array.length; i++) {
        for (var j = i; j < array.length; j++) {
        if (array[j] < array[i]) {
            temp = array[j];
            array[j] = array[i];
            array[i] = temp;
        }
        }
    }
    return array;
}

console.log(sortArray([-3,1,2]));