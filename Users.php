<?php
namespace Daily\Users;
use Daily\Category;

interface categories
{
    public function addCategories(\Daily\Category\Category $category);
    public function removeCategories();
    public function addSubcategories(\Daily\Category\SubCategory\SubCategory $sub);
    public function removeSubCategories();
}


class Users implements categories
{
    private $_categories = array();
    private $_subcategories = array();
    private $_user_id;

    public function __construct($data)
    {
      !empty($data["user_id"]) ? $this->_user_id = $data["user_id"] :  false;
    }

    public function getUserID()
    {
        return $this->_user_id;
    }

    public function getObj()
    {
        return $this;
    }

    public function addCategories(\Daily\Category\Category $category)
    {
        $this->_categories[] = $category;
    }

    public function addSubcategories(\Daily\Category\SubCategory\SubCategory $subCategory)
    {
      $this->_subcategories[] = $subCategory;
    }

    public function removeCategories()
    {

    }

    public function removeSubCategories()
    {

    }
}





?>