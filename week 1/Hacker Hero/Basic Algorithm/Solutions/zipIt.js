function zipIt(arr1, arr2){
    var   result = [],
    i, l = Math.min(arr1.length, arr2.length);
    
    for (i = 0; i < l; i++) {
        result.push(arr1[i], arr2[i]);
    }
    result.push(...arr1.slice(l), ...arr2.slice(l));

    console.log(result);
}

zipIt([1,2], [10,20,30,40 ]);
zipIt([1,2,3,4], [10,20 ]);
zipIt([1,2,3,4], [10,20,30,40 ]);
zipIt([1], [10,20 ]);
zipIt([1,2,3], [10 ]);