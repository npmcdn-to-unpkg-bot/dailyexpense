<?php
namespace Daily\Category;
use Daily\Users;

class Category  {

  private $_id;
  private $_name;
  private $_subcategory = array();
  private static  $_user;

  public function  __construct($data)
  {
     !empty($data[1]) ? $this->_name = $data[1] : false;
     !empty($data[0]) ? $this->_id = $data[0] : false;
  }

  public function getID()
  {
    return $this->_id;
  }

  public function addSubCategory(SubCategory $o)
  {
    $this->_subcategory[] = $o;
  }


  public function getSubCategories()
  {
    return $this->_subcategory;
  }

  public function getName()
  {
    return $this->_name;
  }

  public static function setUser(Users\Users $u)
  {
    self::$_user = $u;
  }


  public static function getCategoryByUser()
  {
    global $dbh;
    $q = 'select * from expense.expense_category_users 
    where user_id = '.self::$_user->getUserID();
    $sth = $dbh->prepare($q);
    $sth->execute();
    $count = $sth->rowCount();
    $res = array();
    if($count > 0 ){
      for($i=0; $i<$count; $i++){
        $row = $sth->fetch();
        $res[$row["id"]] = $row;  
      }
      return $res;
    }
    else
      return false;
  }
}


?>