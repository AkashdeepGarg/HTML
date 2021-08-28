var name1 = prompt("Enter Name of first person: ");
var name2 = prompt("Enter Name of second person: ");

function loveper(){
    var x = Math.random();
    x = x * 100;
    x = Math.floor(x) + 1;
    return x;
}

console.log("The love percentage is " + loveper() + "%");
