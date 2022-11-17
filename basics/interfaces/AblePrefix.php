<?php 

interface Filterable {
    function filter();
}

class Favorites implements Filterable {
    function filter()
    {
        return "Filter by Favorites";
    }
}

class Unread implements Filterable {
    function filter()
    {
        return "Filter by Unread";
    }
}

var_dump($thisUser = (new Favorites)->filter());
var_dump($thatUser = (new Unread)->filter());

?>