<!-- Simple Calculator Controller -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculator extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('calculator_form');
    }

    public function calculate() {
        $num1 = $this->input->post('num1');
        $num2 = $this->input->post('num2');
        $operation = $this->input->post('operation');

        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num2 != 0 ? $num1 / $num2 : 'Cannot divide by zero';
                break;
            default:
                $result = 'Invalid operation';
        }

        $data['result'] = $result;
        $this->load->view('calculator_form', $data);
    }
}
