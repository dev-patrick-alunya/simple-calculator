<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>
<body>
    <h1>Simple Calculator</h1>
    <div class="calculator-form">
        <form id="calculator-form" action="<?php echo site_url('calculator/calculate'); ?>" method="post">
            <input type="hidden" id="num1" name="num1" required>
            <input type="hidden" id="num2" name="num2" required>
            <input type="hidden" id="operation" name="operation" required>
            <input type="text" id="display" readonly style="width: 100%; padding: 10px; margin-bottom: 10px; text-align: right;">
            <div>
                <button type="button" onclick="appendNumber(7)">7</button>
                <button type="button" onclick="appendNumber(8)">8</button>
                <button type="button" onclick="appendNumber(9)">9</button>
                <button type="button" onclick="setOperation('/')">/</button>
            </div>
            <div>
                <button type="button" onclick="appendNumber(4)">4</button>
                <button type="button" onclick="appendNumber(5)">5</button>
                <button type="button" onclick="appendNumber(6)">6</button>
                <button type="button" onclick="setOperation('*')">*</button>
            </div>
            <div>
                <button type="button" onclick="appendNumber(1)">1</button>
                <button type="button" onclick="appendNumber(2)">2</button>
                <button type="button" onclick="appendNumber(3)">3</button>
                <button type="button" onclick="setOperation('-')">-</button>
            </div>
            <div>
                <button type="button" onclick="appendNumber(0)">0</button>
                <button type="button" onclick="clearDisplay()">C</button>
                <button type="button" onclick="calculateResult()">=</button>
                <button type="button" onclick="setOperation('+')">+</button>
            </div>
        </form>
    </div>

    <?php if (isset($result)): ?>
        <h2>Result: <?php echo $result; ?></h2>
    <?php endif; ?>

	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
</body>
</html>

