function sum() {
    let num1 = parseInt(document.getElementById('number1').value);
    console.log("num1 >> ",num1);
    console.log("num1 >> ",typeof(num1));
    let num2 = parseInt(document.getElementById('number2').value);
    console.log("num2 >> ",typeof(num2));
    let sum= num1+num2;
    console.log("sum >> ",sum);
    document.getElementById('result').value=sum;
}

function subtract() {
    let num1 = parseInt(document.getElementById('number1').value);
    console.log("num1 >> ",num1);
    console.log("num1 >> ",typeof(num1));
    let num2 = parseInt(document.getElementById('number2').value);
    console.log("num2 >> ",typeof(num2));
    let sum= num1-num2;
    console.log("sum >> ",sum);
    document.getElementById('result').value=sum;
}