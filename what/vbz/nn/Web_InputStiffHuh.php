<?php 
/*
what / vbz / nn / 
what / verb, present tense, 3rd person singular / noun, common, singular or mass / 
*/

class Web_InputStiffHuh implements Answerer {
    /**
     * check_question
     * @param array [$question] ordered array of the words in the question (all lowercase)
     * @return boolean Can this algorithm answer the given question?
     */
    public static function check_question(array $question) {
        /*
        if ($question[0] == "what" && $question[1] == "is") {
            return true;
        }
        */

        return false;
    }

    /**
     * answer_question
     * @param array [$question] ordered array of the words in the question
     * @return string The answer to the given question.
     */
    public static function answer_question(array $question) {
        /*

          Author: Web user (IP 65.182.48.83)
          Author's original question: 'what is love?'

          just wiki it

        */
    }
}
