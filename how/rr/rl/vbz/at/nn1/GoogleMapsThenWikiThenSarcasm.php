<?php
/*
how / rr / rl / vbz / at / nn1 /
how / general adverb / locative adverb / is / article / singular common noun /
*/

class GoogleMapsThenWikiThenSarcasm implements Answerer {
    /**
     * check_question
     * @param array [$question] ordered array of the words in the question
     * @return boolean Can this algorithm answer the given question?
     */
    public static function check_question(array $question) {
        if ($question[0] == "how" && $question[3] == "is" && $question[4] == "the") {
            return true;
        }
        return false;
    }

    /**
     * answer_question
     * @param array [$question] ordered array of the words in the question
     * @return string The answer to the given question.
     */
    public static function answer_question(array $question) {
        /*
          Author's original question: 'how far away is the moon?'
         */

        // for a few adverbs (far, near, close, etc.) try to determine the user's location, then use Google Maps
        // api to find "The ____" -- it is probably a famous place because it starts with "The"

        // use wiki for inputs that appear to be cosmic (the sun, the moon), probably a short list

        // Finally, sarcastically respond "Yes, it is quite <general adverb> <locative>, isn't it?"
        $adv = $question[1];
        $loc = $question[2];
        return "Yes, it is quite $adv $loc, isn't it?";

    }
}
