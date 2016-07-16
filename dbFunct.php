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


    public static function update($table, $data, $where, $types)
    {
        if(empty($data)){
            return false;
        }
        global $dbh;

        $q = "update ".$table .' set ';

        foreach($data as $key=>$value){
            $q .=  $key."=:".strtoupper($key).', ';
        }

        $q = substr_replace($q ,"",-2).' where ';

        if(is_array($where) && !empty($where)){
            foreach($where as $key => $value){
                $q .=  $key .'=:'.strtoupper($key).' and ';
            }
            $q = substr_replace($q,"",-4);
        }


        $sth = $dbh->prepare($q);

        foreach($data as $key => $value){
            $sth->bindValue(':'.strtoupper($key), $value, $types[$key]);
        }

        if(!empty($where)){
            foreach($where as $key => $value){
                $sth->bindValue(':'.strtoupper($key), $value, $types[$key]);
            }
        }

        $sth->execute();
        if(!$sth){
            return false;
        }
        return true;

    }

}