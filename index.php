<?php
$MySQLConnection = mysql_connect($servername, $username, $password);
    $MySQLSelectedDB = mysql_select_db($dbname, $MySQLConnection);
    mysql_query("SET $dbname utf8");

    $MySQLRecordSet = mysql_query('SELECT keyword FROM main');
    while($Result = mysql_fetch_assoc($MySQLRecordSet))
    {
        foreach($Result as $k => $val)
        {
            echo "Name: " . $val;
        }
        echo "<br>";
    }
?>