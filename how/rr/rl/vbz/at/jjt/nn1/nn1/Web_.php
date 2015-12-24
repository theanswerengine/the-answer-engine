<?php 
/*
how / rr / rl / vbz / at / jjt / nn1 / nn1 / 
how / general adverb / locative adverb / is / article / general superlative adjective / singular common noun / singular common noun / 
*/

class Web_ implements Answerer {
    /**
     * check_question
     * @param array [$question] ordered array of the words in the question
     * @return boolean Can this algorithm answer the given question?
     */
    public static function check_question(array $question) {
        return false; // This algorithm doesn't do anything yet.

        /*
        if ($question[0] == "how" && $question[1] == "far" && $question[3] == "is" && $question[4] == "the" && $question[5] == "nearest" && $question[7] == "store?") {
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
          Author's original question: 'how far away is the nearest grocery store?'

          Comments:

          google nearest store named <word #7> and return the distance only

        */
    }
}
