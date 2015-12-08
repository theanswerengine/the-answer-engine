# The Answer Engine

Collection of micro-algorithms for answering English-language questions of a given
grammatical form.


## About
Ask a question in natural English and get an answer.

[The Answer Engine][theae] first determines the parts of speech in your question using
the [CLAWS part-of-speech tagger][claws], then all the algorithms ever written for questions
in that format generate answers. This is that repository.

## How to use

[Ask a question][theae].

## How to contribute

Write an algorithm! The easiest way to get started is to [ask a question][theae]. The site will create a branch
for your question type and give you a link to it. Fork this repo, write the algorithm, and submit a pull request.

### Coding a micro-algorithm

* Algorithm code must be written in PHP 5.6.
* They must define a class that implements the `Answerer` interface.
* The class name must describe the Answerer's behavior. E.g.:

    `class ComputesBasicArithmetic implements Answerer`
* The file name must be the same as the class name. E.g.: `ComputesBasicArithmetic.php`.
* Any files beside this class file should be in a folder named after the class name. E.g.: `ComputesBasicArithmetic/`.

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

Have a look at any existing algorithm for examples. An automated tester is on the todo list and will be run as part of pull request approval.

[theae]: http://www.theanswerengine.net
[claws]: http://ucrel.lancs.ac.uk/claws/
