<?php 
/* 
what / vbz / mc / ii / mc / 
what / is / cardinal number,neutral for number (two, three..) / general preposition / cardinal number,neutral for number (two, three..) / 
 */

class ComputeSimpleArithmetic implements Answerer {
    public static function check_question(array $question) {
        $operation = strtolower($question[3]);
        $operand_1 = $question[2];
        $operand_2 = $question[4];
        $accepted_operations = array(
            'plus', '+',
            'minus', '-',
            'over', '/',
            'times', '*'
        );


        return (in_array($operation, $accepted_operations) && is_numeric($operand_1) && is_numeric($operand_2));
    }

    public static function answer_question(array $question) {
        $operation = strtolower($question[3]);
        $operand_1 = intval($question[2]);
        $operand_2 = intval($question[4]);

        $retval = false;
        if ($operation == 'plus' || $operation == '+') {
            $retval = $operand_1 + $operand_2;
        } else if ($operation == 'minus' || $operation == '-') {
            $retval = $operand_1 - $operand_2;
        } else if ($operation == 'over' || $operation == '/') {
            $retval = $operand_1 / $operand_2;
        } else if ($operation == 'times' || $operation == '*') {
            $retval = $operand_1 * $operand_2;
        }

        if ($retval !== false) {
            $retval = strval($retval);
        }
        return $retval;
    }
}
