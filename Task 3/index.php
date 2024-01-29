<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <form id="calculatorForm">
    <h1>Calculator</h1>
    <br>
        <label for="number1">Number 1:</label>
        <input type="text" id="number1" name="number1">
        <br>
        <label for="number2">Number 2:</label>
        <input type="text" id="number2" name="number2">
        <br>
        <button type="button" onclick="calculateSum()">Calculate Sum</button>
        <br>
        <div id="result">Sum : 0</div>
    <span style=" color: red;" id="validationError"></span>
    </form>
    <script>
        function calculateSum() {
            var number1 = document.getElementById('number1').value;
            var number2 = document.getElementById('number2').value;
            var resultContainer = document.getElementById('result');
            var validationError = document.getElementById('validationError');
            var numericRegex = /^[0-9]+$/;
            if (numericRegex.test(number1) && numericRegex.test(number2)){
                validationError.textContent = "";
                var sum = parseInt(number1, 10) + parseInt(number2, 10);
                resultContainer.textContent = "Sum: " + sum;
            } 
            else{
                validationError.textContent = "Please enter only numeric values.";
                resultContainer.textContent = ""; 
            }
        }
    </script>
</body>
</html>
