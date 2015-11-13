# The Answer Engine

Collection of Answerer algorithms for answering English-language questions of a given
grammatical form.


## About
At The Answer Engine you can ask a question in natural English and get an answer.
The site determines the parts of speech from your question and inputs your
question into the algorithm written for questions of that form.

## How to use

Ask any question at The Answer Engine.

## How to contribute

Fork this repo, write the Answerer you want to write, and submit a pull request.

* Answerer algorithm files be written in PHP 5.6.
* They must define a class that `implement`s the `Answerer` interface.
* The class name must describe the Answerer's behavior. E.g.:

    `class WikiThenSearchForSentences implements Answerer`
* The file name must be the same as the class name. E.g.: `WikiThenSearchForSentences.php`

### The `Answerer` interface

The stuff your `Answerer` class has to do.

#### `public static function check_question(array $question)`

Parameter `$question`: ordered array of the words in the question

Return:

* (boolean) `true` if the algorithm can answer `$question`
* (boolean) `false` if the algorithm can not

#### `public static function answer_question(array $question)`

Parameter `$question`: ordered array of the words in the question

Return:

* (string) the answer
* (boolean) `false` if the algorithm can not answer `$question`

### Test cases

The class must properly handle all the questions in the `examples.txt` file in its directory. For each line in `examples.txt`, either:

* `Answerer::check_question($question)` returns `false`, or
* `Answerer::answer_question($question)` returns a string with a correct answer to the question.

Have a look at any existing algorithm for examples.

