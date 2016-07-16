<?php
namespace Daily\Category\SubCategory;
use Daily\Users;

class SubCategory  {
  private $_id;
  private $_name;
  private $_category_id;
  private static  $_user;

  public function  __construct($data)
  {
     !empty($data["name"]) ? $this->_name = $data["name"] : false;
     !empty($data["id"]) ? $this->_id = $data["id"] : false;
  }


  public static function setUser(Users\Users $u)
  {
    self::$_user = $u;
  }

  public static function getUsersSubCategory()
  {
    global $dbh;
    $q = 'select * from expense.expense_subcategory_users
    where user_id = '.self::$_user->getUserID();
    $sth = $dbh->prepare($q);
    $sth->execute();
    $count = $sth->rowCount();
    $res = array();
    if($count > 0 ){
      for($i=0; $i<$count; $i++){
        $row = $sth->fetch();
        $res[$row["category_id"]][$row["id"]] = $row;
      }
      return $res;
    }
    else
      return false;
  }
}
?>