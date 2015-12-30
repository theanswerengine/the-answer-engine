# The Answer Engine

Micro-algorithms for answering English-language questions of a given grammatical form.


## About
Ask a question in natural English and get an answer.

[The Answer Engine][theae] first determines the parts of speech in your question using
the [CLAWS part-of-speech tagger][claws]. Then all the algorithms ever written for a question
of that specific format are run on your question and return their answers. This is the repository
of those algorithms, which you can contribute to.

## How to use The Answer Engine

[Ask a question][theae].

## How to contribute a micro-algorithm

The easiest way to contribute to the engine is to [ask a question][theae]. The site will help you create
some boilerplate code on a branch made just for you, and then give you a link to it. Then you just fork this
repo, update your code, and submit a pull request.

### Micro-algorithm code

* Micro-algorithms must be written in PHP 5.6.
* They must define a single class that implements the `Answerer` interface.
* The file name must match the class name. E.g.: `ComputesBasicArithmetic.php`.
* The class name must describe the algorithm's behavior. E.g.: `class ComputesBasicArithmetic implements Answerer`
* Additional files (if any) must be in a folder matching the class name. E.g.: `ComputesBasicArithmetic/`.

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

### Test cases

The class must properly handle all the questions in the `examples.txt` file in its directory. For each line in `examples.txt`, either:

* `Answerer::check_question($question)` returns `false`, or
* `Answerer::answer_question($question)` returns `false`, or
* `Answerer::answer_question($question)` returns a string with a valid answer to the question.

Have a look at any existing algorithm for examples.

#### Automated tester
The `test.php` script here in the root of this repository will automatically test your algorithm for you.
Usage:

```
php -f test.php <algorithm file>               # usage
php -f test.php what/vbz/nn1/JustWikiIt.php    # example
```


[theae]: http://www.theanswerengine.net
[claws]: http://ucrel.lancs.ac.uk/claws/
