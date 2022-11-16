<?php

// interface Animal {
//     function communicate();
// }

interface Logger {
    function execute($content);
}

// interface JSONable {
//     function convertToJSON();
// }

class FileLog implements Logger {
    function execute($content)
    {
        var_dump("Log Message to File: $content");
    }
}

class DatabaseLog implements Logger {
    function execute($content)
    {
        var_dump("Log Message to Database: $content");
    }
}

class User {
    // function __construct(protected LogToFile $logger) {}
    function __construct(public Logger $logger) {}
    function display()
    {
        $name = 'Alissa';
        $this->logger->execute($name);
    }
}

$record = new User(new FileLog);
$record = new User(new DatabaseLog);
$record->display();

?>