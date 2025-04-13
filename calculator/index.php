<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">
        <div class="display" id="display">0</div>
        <div class="buttons">
   
    <button class="btn paren" onclick="appendToDisplay('(')">(</button>
    <button class="btn paren" onclick="appendToDisplay(')')">)</button>
    <button class="btn operator" onclick="appendToDisplay('%')">%</button>
    <button class="btn ac" onclick="clearDisplay()">AC</button>
    
    
    <button class="btn number" onclick="appendToDisplay('7')">7</button>
    <button class="btn number" onclick="appendToDisplay('8')">8</button>
    <button class="btn number" onclick="appendToDisplay('9')">9</button>
    <button class="btn operator" onclick="appendToDisplay('/')">÷</button>
    
    <button class="btn number" onclick="appendToDisplay('4')">4</button>
    <button class="btn number" onclick="appendToDisplay('5')">5</button>
    <button class="btn number" onclick="appendToDisplay('6')">6</button>
    <button class="btn operator" onclick="appendToDisplay('*')">×</button>
    
    <button class="btn number" onclick="appendToDisplay('1')">1</button>
    <button class="btn number" onclick="appendToDisplay('2')">2</button>
    <button class="btn number" onclick="appendToDisplay('3')">3</button>
    <button class="btn operator" onclick="appendToDisplay('-')">–</button>
    
    
    <button class="btn number" onclick="appendToDisplay('0')">0</button>
    <button class="btn number" onclick="appendToDisplay('.')">.</button>
    <button class="btn equals" onclick="calculate()">=</button>
    <button class="btn operator" onclick="appendToDisplay('+')">+</button>
</div>
    </div>
    <script src="script.js"></script>
</body>
</html>