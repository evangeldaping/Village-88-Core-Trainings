function double(arr){
    for (var i = 0; i < arr.length; i++)
    {
        arr[i] *= 2;
    }
    console.log(arr);
}

double([1,2,3]);
double([-2, 0, 2]);
double([2,10,100]);