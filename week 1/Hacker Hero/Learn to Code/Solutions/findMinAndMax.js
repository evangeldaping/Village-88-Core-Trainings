function findMinMax(arr){
    var minMaxArray = arr.reduce(function (r, n) {
            r[0] = (!r[0])? n : Math.min(r[0], n);
            r[1] = (!r[1])? n : Math.max(r[1], n);
            return r;
        }, []);

    console.log(minMaxArray);
}

findMinMax([1,3,5]);
findMinMax([-1,3,5]);
findMinMax([-1,-3,-5]);
findMinMax([-1, -3, 10]);