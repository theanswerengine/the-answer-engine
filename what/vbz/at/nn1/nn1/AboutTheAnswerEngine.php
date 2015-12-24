<?php 
/*
what / vbz / at / nn1 / nn1 / 
what / is / article / singular common noun / singular common noun / 
*/

class AboutTheAnswerEngine implements Answerer {
    /**
     * check_question
     * @param array [$question] ordered array of the words in the question
     * @return boolean Can this algorithm answer the given question?
     */
    public static function check_question(array $question) {
        $question = array_map('strtolower', $question);

        if ($question[0] == "what" && 
            $question[1] == "is" && 
            $question[2] == "the" && 
            $question[3] == "answer" && 
            $question[4] == "engine?") {
            return true;
        }
    }

    /**
     * answer_question
     * @param array [$question] ordered array of the words in the question
     * @return string The answer to the given question.
     */
    public static function answer_question(array $question) {
        $answer = "This site, The Answer Engine, is a collection of simple, highly-specialized, ".
                  "open source PHP functions, each one designed to answer an English question of a particular format. ".
                  "Contributors write algorithms to answer the kinds of questions they're interested in. Over time, ".
                  "The Answer Engine may achieve its goal: ask any question, get the answer.";

        return $answer;
    }
}
