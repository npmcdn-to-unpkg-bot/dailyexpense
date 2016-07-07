<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path = $_SERVER['DOCUMENT_ROOT'];
chdir($path);
require_once("./db.php");
require_once("Users.php");
require_once("./category/Category.php");
$user = new Daily\Users\Users(array("user_id"=>2425));
Daily\Category\Category::setUser($user);
$category_users = Daily\Category\Category::getCategoryByUser();
?>
<div class="x_panel">
    <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
        <div class="panel">
            <div class="x_title">
                <h2>Added Categories</h2>
                <div class="clearfix"></div>
            </div>
            <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date Added<th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php                        
                        if(!empty($category_users)){
                            foreach($category_users as $key => $user){    
                                echo '<tr #delete'.$user["id"].'>';
                                  echo '<td>'.$user["name"].'</td>
                                  <td>'.date("d-m-Y H:i:s", strtotime($user["datetime"])).'</td>
                                  <td>
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                  </td>                                 
                                  <td><a (click)="deleteCategory(delete'.$user["id"].', '.$user["id"].')" data-id="'.$key.'" target="_blank">
                                  <i class="fa fa-close"></i></a></td>';  
                                echo '</tr>';
                            }
                        }
                        ?>                                                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="x_title" style="margin-bottom:0px;">
        <h2>Add a New Category</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" name="name" required="required" class="form-control input input-sm col-md-7 col-xs-12">
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" class="btn btn-sm btn-success">Add a New Category</button>
                </div>
            </div>

        </div>
    </div>
</div>
