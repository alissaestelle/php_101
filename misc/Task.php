<?php

// **OOP Overview**

/*
If I'm building a task app, it makes sense to create a 'task' model, or *class*, which contains desired features.
For instance, tasks could have different descriptions, categories, prioritization levels, etc.
These are the types of characteristics, or *properties*, that could be given to a task class.

In addition to properties, classes can also be given specific behaviors, or *methods*.
*/

// Class Glossary
// property: what something is
// method: what something does (or how it acts)

class Task {

    // PROPERTIES:

    public $title;
    // $title: a string/text title for each task
    public $description;
    // $description: a string/text description for each task
    public $completed = false;
    // $completed: a default boolean which indicates that each task begins as incomplete

    // METHODS:

    public function __construct($title, $description)
    // __construct (keyword): any code within this scope will be automatically called for each new class instance
    {
        $this->title = $title;
        $this->description = $description;
        // $this (keyword): references the current instance of a class
    }

    public function complete() {
        $this->completed = true;
    }
    // Note: This method has to be called manually in order to run since it's outside the __construct scope.

}

$oOP = new Task('Learn OOP', 'A summary of the basics of object-oriented programming ...');
var_dump($oOP->title);
var_dump($oOP->description);
$oOP->complete();
var_dump($oOP->completed);

$groceries = new Task('Pick Up Groceries', 'Grocery List: Apples, Pears, Cereal ...');
var_dump($groceries->title);
var_dump($groceries->description);

?>