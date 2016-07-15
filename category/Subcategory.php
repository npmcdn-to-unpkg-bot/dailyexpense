<?php
namespace Daily\Category\SubCategory;
class SubCategory  {
  private $_id;
  private $_name;
  private $_category_id;
  public function  __construct($data) {
     !empty($data["name"]) ? $this->_name = $data["name"] : false;
     !empty($data["id"]) ? $this->_id = $data["id"] : false;
  }
}
?>