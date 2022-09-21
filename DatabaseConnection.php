<?php

class DatabaseConnection
{
    function getConnection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bakery";
        return mysqli_connect($servername, $username, $password, $dbname);
    }
}
