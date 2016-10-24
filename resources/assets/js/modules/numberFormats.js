const numberFormat = function( n )
{
    const sign = n < 0 ? "-" : "";
    return sign + Math.abs(n).toString()
        .replace(/ /g, "")
        .replace(/./g, function (c, i, a) {
            return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
        });
};

const numberSign = function( n )
{
    const removeNumberFormat = n.split(",").join("");
    return parseInt( removeNumberFormat ) < 0 ? negativeSign( n ) : n;
};

const negativeSign = function( n )
{
    n = n.split(""); delete n[0]; n = n.join("");
    return `(${n})`;
};

export {
 numberFormat, numberSign
}