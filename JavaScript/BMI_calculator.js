var weight = prompt("Enter The weight (in Kg): ");
var height = prompt("Enter height (in m): ");

function bmicalculator(weight, height){
    height = Math.pow(height,2);
    var BMI = weight/height;
    return BMI;
}

var B = bmicalculator(weight, height);
B = B.toFixed(2);
console.log("Your BMI is: " + B);
