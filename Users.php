<?php
namespace Daily\Users;
use Daily\Category;

interface categories
{
    public function addCategories(\Daily\Category $category);
    public function removeCategories();
}


class Users implements categories
{
    private $_categories = array();
    private $_user_id;
    public function __construct($data)
    {
        !empty($data["user_id"]) ? $this->_user_id = $data["user_id"] : false;
    }

    public function getUserID()
    {
        return $this->_user_id;
    }

    public function getObj()
    {
        return $this;
    }

    public function addCategories(\Daily\Category $category)
    {
        $this->__categories[] = $category;
    }

    public function removeCategories()
    {

    }
}





?>