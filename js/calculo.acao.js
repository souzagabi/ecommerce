function sumTotal(qtde, elementValue, elementTotal)
{
    if (elementValue.value !== '') {
        elementValue.value = replaceComa(elementValue);
    }
    if (qtde > 0 && elementValue.value > 0) {
        var total =  qtde * elementValue.value;
        document.getElementById(elementTotal.name).value = total.toFixed(2);
    }
    if (elementTotal.name === "tlsell") {
        
        var vlbuy = document.getElementById("tlbuy").value;
        var vlsell = elementTotal.value;
        if (vlbuy > 0 && vlsell > 0) {
            var lucre = vlsell - vlbuy;
            if (lucre > 0) {
                var tax = ((lucre*100)/vlbuy);
                document.getElementById("tax").value = tax.toFixed(2)+" %";
            }
        }
        document.getElementById("lucre").value = lucre.toFixed(2);
    }

    return total;
}

function replaceComa(element)
{
    var v = element.value.replace(/,/g, '.');
    document.getElementById(element.name).value = v;
    return v ;
}
function replaceSlash(element)
{
    var dt = element.value.replace(/[\/\-]/g, '-');
    document.getElementById(element.name).value = dt;
}