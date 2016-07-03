<?php
// what vbz nn: what is <singular common noun>?

class JustWikiIt implements Answerer {
    public static function check_question(array $question) {
        return true; // sure, i'll answer anything.
    }

    public static function answer_question(array $question) {
        $answer = "";
        $noun = $question[2];

        $url = "https://en.wikipedia.org/w/api.php?action=parse&prop=properties|text&page=$noun&format=json&section=0";

        $ch = curl_init($url);
        curl_setopt_array($ch, array(
            CURLOPT_FRESH_CONNECT => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FORBID_REUSE => 1,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.85 Safari/537.36'
            )
        );

        if (!$result = curl_exec($ch)) {
            error_log("Curl problem with url '$url' - ". curl_error($ch));
            return false;
        }

        $result = json_decode($result, true);
        $text = strip_tags($result['parse']['text']['*']);
        $props = $result['parse']['properties'];


        $matches = array();
        preg_match_all("/(?i)($noun )(\(.*\) )?(is|was) (.*?)\./", $text, $matches);

        foreach ($matches[0] as $match) {
            $answer .= $match ." ";
        }

        return trim($answer);
    }
}

