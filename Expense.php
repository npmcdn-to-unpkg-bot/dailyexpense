<?php
namespace Daily\Expense;
use Daily\Users;

class Expense
{
  public function __construct()
  {
    !empty($data["id"]) ? $this->_id = $data["id"] : false;
    !empty($data["notes"]) ? $this->_notes = $data["notes"] : false;
    !empty($data["date"]) ? $this->_date = $data["date"] : false;
    !empty($data["name"]) ? $this->_name = $data["name"] : false;
    !empty($data["category_id"]) ? $this->_cateogry_id = $data["category_id"] : false;
    !empty($data["subcategory_id"]) ? $this->_subcategory_id = $data["subcategory_id"] : false;
    !empty($data["user_id"]) ? $this->_user_id = $data["user_id"] : false;
  }

  public function getId()
  {
    return $this->_id;
  }

  public function getUserId()
  {
    return $this->_user_id;
  }

  public function getCategory_id()
  {
    return $this->_cateogry_id;
  }

  public function getSubCategory_id()
  {
    return $this->_subcategory_id;
  }

  public function getName()
  {
    return $this->_name;
  }

  public function getNotes()
  {
    return $this->_notes;
  }

  public function getDate()
  {
    return $this->_date;
  }


  public static function setUser(Users\Users $u)
  {
    self::$_user = $u;
  }

  public static function getUsersExpense()
  {
    global $dbh;
    $q = 'select * from expense.expense_users
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


  private $_id;
  private $_name;
  private $_notes;
  private $_date;
  private $_cateogry_id;
  private $_subcategory_id;
  private $_user_id;
  private static $_user;

}