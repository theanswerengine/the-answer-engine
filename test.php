<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function usage() {
    $msg = "Usage: php -f test.php <algorithm file>";
    return $msg;
}

interface Answerer {
    // return true if question is answerable by this answerer, false otherwise.
    public static function check_question(array $question);

    // return a string answer to the question
    public static function answer_question(array $question);
}

$test_file = $argv[1] or die(usage());
$test_dir = dirname($test_file);
$test_class = basename($test_file, '.php');


echo "Testing $test_file for class $test_class\n";
require_once($test_file);

if (!class_exists($test_class)) {
    die("File named $test_file does not define a class named $test_class.");
}

echo "Reading $test_dir/examples.txt.\n";
if (is_readable("$test_dir/examples.txt")) {

    $examples_file = file("$test_dir/examples.txt");

    $test_count_success = 0;
    $test_count_failure = 0;
    foreach ($examples_file as $example) {
        $example = str_replace(array('.', ',', '?', "\n"), '', trim($example));
        $example_arr = explode(' ', $example);
        if ($example_arr) {
            echo "Test question: '$example' - Answer...\n";
            if (!$test_class::check_question($example_arr)) {
                $test_count_success++;
                echo "check_question FALSE [OK]\n";
            } else {
                echo "check_question TRUE\n";
                $result = $test_class::answer_question($example_arr);
                if ($result === false) {
                    $test_count_success++;
                    echo "answer_question FALSE [OK]\n";
                } else if (strlen($result) > 0) {
                    $test_count_success++;
                    echo "answer_question: '$result'. [OK]\n";
                } else {
                    $test_count_failure++;
                    echo "answer_question: ''. [FAIL]\n";
                }
            }
        }
    }

    echo "\n".
         "$test_count_success / ". ($test_count_success + $test_count_failure) ." Successes. ". (($test_count_failure == 0)? '[OK]' : '[FAIL]') ."\n";

} else {
    die("Couldn't read ./examples.txt.");
}




?>
