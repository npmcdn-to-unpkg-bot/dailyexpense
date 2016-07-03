<?php

class dbFunct {

    public static function insert($table, $data, $types)
    {
        if(empty($data))
            return false;

        global $dbh;

        $q = ' insert into '.$table.'(';
        $q2 = '';

        foreach($data as $key => $value){
            $q .= $key.', ';
            $q2 .= ':'.strtoupper($key).', ';
        }

        $q = substr_replace($q ,"",-2).')values(';
        $q2 = substr_replace($q2,"",-2).');';
        $q .= $q2;

        $sth = $dbh->prepare($q);

        foreach($data as $key => $value){
            $sth->bindValue(':'.strtoupper($key), $value, $types[$key]);
        }

        $sth->execute();
        if(!$sth){
            echo $dbh->errorInfo();
            exit;
            return false;
        }
        return $dbh->lastInsertId();
    }

}