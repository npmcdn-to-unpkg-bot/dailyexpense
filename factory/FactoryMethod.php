<?php
namespace Daily;

class FactoryMethod
{
  public static function generateObjects()
  {
    global $dbh;
    $q = ' select *, group_concat(b.name, "_", b.id) as s, a.id as expense_id, a.name as name from expense_category a
    left join expense_subcategory b on a.id = b.expense_id
    group by a.id ';
    $sth = $dbh->prepare($q);
    $sth->execute();
    $count = $sth->rowCount();
    if($count > 0){
      $categories = array();
      for($i=0; $i<$count; $i++){
        $result = $sth->fetch($dbh::FETCH_ASSOC);
        $o = new Category\Category(array($result["expense_id"], $result["name"]));
        if(!empty($result["s"])){
          $pieces = explode(",",$result["s"]);
          if(!empty($pieces) && is_array($pieces)){
            foreach($pieces as $pie){
              $m = explode("_", $pie);
              $o->addSubCategory(new Category\SubCategory\SubCategory(array("name"=>$m[0], "id"=>$m[1])));
            }
          }
        }
        $categories[$o->getID()] = $o;
      }
      return $categories;
    }
    else
      return false;
  }
}
?>