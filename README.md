# The Answer Engine

Micro-algorithms for answering English-language questions of a given grammatical form.


## About
Ask a question in natural English and get an answer.

[The Answer Engine][theae] first determines the parts of speech in your question using
the [CLAWS part-of-speech tagger][claws]. Then all the algorithms ever written to answer a question
of that specific format are run with your question as their input.

This is the repository of those algorithms, which anyone can contribute to.

## How to use The Answer Engine

[Ask a question][theae].

## How to contribute a micro-algorithm

The easiest way to start contributing to the engine is to [ask a question][theae]. The site will help you create
some boilerplate code on a branch made just for you. Then you just fork this repo, update your branch's code,
and submit a pull request.

### Micro-algorithm code requirements

* Micro-algorithms must be written in PHP 5.6.
* They must define a single class that implements the `Answerer` interface.
* The class's name must describe the algorithm's behavior. E.g.: `class ComputesBasicArithmetic implements Answerer`
* The class's file name must match the class name. E.g.: `ComputesBasicArithmetic.php`.
* Additional files used by the class (if any) must be in a folder matching the class name. E.g.: `ComputesBasicArithmetic/`.

### The `Answerer` interface

The micro-algorithm's `Answerer` interface requires the following class methods be defined.

#### `public static function check_question(array $question)`

Parameter `$question`: ordered array of the words in the question

Returns:

* (boolean) `true` if the algorithm can answer `$question`
* (boolean) `false` if the algorithm can not

#### `public static function answer_question(array $question)`

Parameter `$question`: ordered array of the words in the question

Returns:

* (string) the answer
* (boolean) `false` if the algorithm can not answer `$question`

### Getting your micro-algorithm into the Engine

A micro-algorithm must properly handle all the questions in the `examples.txt` file in its directory before it will be merged into
the master branch. For each line in `examples.txt`:

* `Answerer::check_question($question)` must return `false`, OR
* `Answerer::answer_question($question)` must return `false`, OR
* `Answerer::answer_question($question)` must return a string (with a valid answer to the question).

Have a look at any existing algorithm for examples. An automated tester is on my
todo list and will be run as part of any pull request merge.

[theae]: http://www.theanswerengine.net
[claws]: http://ucrel.lancs.ac.uk/claws/
