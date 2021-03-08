function parensValid(str){
    if (typeof str !== "string")
    { console.log(false); }

    var numParens = 0;
    for (var idx=0; idx<str.length; idx++){
        if (str[idx] == "(") { numParens++; }
        if (str[idx] == ")") { numParens--; }
        if (numParens < 0) { console.log(false); }
        }
        console.log(numParens === 0);
}

parensValid("Y(3(p)p(3)r)s");
parensValid("N(0)t )0(k");
parensValid("N(0)t (0(k))");
parensValid("(N(0)t (0(k))");
parensValid("()(N(0)t (0(k)))");