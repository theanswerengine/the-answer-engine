<?php 
/*
what / vbz / at / nn1 / nn1 / 
what / is / article / singular common noun / singular common noun / 
*/

class Web_TeammateBeastBlessing implements Answerer {
    /**
     * check_question
     * @param array [$question] ordered array of the words in the question
     * @return boolean Can this algorithm answer the given question?
     */
    public static function check_question(array $question) {
        return false; // This algorithm doesn't do anything yet.

        /*
        if ($question[0] == "what" && $question[1] == "is" && $question[2] == "the" && $question[3] == "answer" && $question[4] == "engine?") {
            return true;
        }
        */
    }

    /**
     * answer_question
     * @param array [$question] ordered array of the words in the question
     * @return string The answer to the given question.
     */
    public static function answer_question(array $question) {
        /*

          Author: Web user IP 65.182.48.83
          Author's original question: 'what is the answer engine?'

          Comments:

          for this very specific question, answer it! information about this site, etc.

        */
    }
}
