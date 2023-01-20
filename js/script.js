var unitValue = 0;
var beerCount = 0;
var beerTotalValue = 0;

const printValues = () => {
    document.getElementById("beerCount").innerHTML = "<p> Total de biritas: " + beerCount + "</p>";
    unitValue = document.getElementById("beerUnitValue").value;
    beerTotalValue = beerCount * unitValue;
    document.getElementById("totalValue").innerHTML = "<p> Total a pagar: R$ " + beerTotalValue.toFixed(2) + "</p>";
    document.getElementById("graphicBeerCount").innerHTML = "";
    for (let i = 1; i <= beerCount; i++) {
        document.getElementById("graphicBeerCount").innerHTML += '<img src="./assets/images/beer.png" style="width: 254px;">';
    }
}

const beerCounterPlus = () => {
    beerCount = beerCount + 1;
    printValues();
}
const beerCounterMinus = () => {
    beerCount = (beerCount > 0) ? beerCount - 1 : beerCount;
    printValues();
}	