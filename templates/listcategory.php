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
                {{r}}
                <div class="clearfix"></div>
            </div>
            <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <table class="table table-striped table-bordered" id="listCate">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php                        
                        if(!empty($category_users)){
                            foreach($category_users as $key => $user){    
                                echo '<tr #delete'.$user["id"].'>';
                                  echo '<td #edit'.$user["id"].'>'.$user["name"];
                                ?>
                                <form method="post" action="test.php" [ngStyle]="{display: CategoryName === 'taken' ? 'block': 'none'}">
                                    <input  type="text" class="input-sm form-control"  />
                                    <input type="submit" />
                                </form>
                                </td><td>
                                    <a (click)="editCategory($event, edit<?php echo $user["id"] ?>)" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <?php
                                  echo '</td>
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
</div>
