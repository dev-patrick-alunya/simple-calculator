let num1 = '';
        let num2 = '';
        let operation = '';

        function appendNumber(number) {
            if (operation === '') {
                num1 += number;
                document.getElementById('display').value = num1;
            } else {
                num2 += number;
                document.getElementById('display').value = num1 + ' ' + operation + ' ' + num2;
            }
        }

        function setOperation(op) {
            if (num1 !== '') {
                operation = op;
                document.getElementById('operation').value = op;
                document.getElementById('display').value = num1 + ' ' + operation;
            }
        }

        function clearDisplay() {
            num1 = '';
            num2 = '';
            operation = '';
            document.getElementById('display').value = '';
            document.getElementById('num1').value = '';
            document.getElementById('num2').value = '';
            document.getElementById('operation').value = '';
        }

        function calculateResult() {
            if (num1 !== '' && num2 !== '' && operation !== '') {
                document.getElementById('num1').value = num1;
                document.getElementById('num2').value = num2;
                document.getElementById('calculator-form').submit();
            }
        }