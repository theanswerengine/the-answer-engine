<?php 
/*
how / rr / rl / vbz / at / nn1 / 
how / general adverb / locative adverb / is / article / singular common noun / 
*/

class Web_ElderDawnTile implements Answerer {
    /**
     * check_question
     * @param array [$question] ordered array of the words in the question
     * @return boolean Can this algorithm answer the given question?
     */
    public static function check_question(array $question) {
        return false; // This algorithm doesn't do anything yet.

        /*
        if ($question[0] == "how" && $question[3] == "is" && $question[4] == "the") {
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
          Author's original question: 'how far away is the moon?'

          Comments:

          for a few adverbs (far, near, close, etc.) try to determine the user's location, then find "The ____" -- it is probably a famous place because it starts with "The", perhaps use Google Maps api.
          
          use wiki for inputs that appear to be cosmic (the sun, the moon), probably a short list.
          
          finally, you can sarcastically respond "Yes, it is quite <general adverb>, isn't it?"
          
          

        */
    }
}
