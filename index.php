<?php
require_once("./category/Subcategory.php");
require_once("./factory/FactoryMethod.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path = $_SERVER['DOCUMENT_ROOT'];
chdir($path);
require_once("./db.php");
require_once("Users.php");
require_once("./category/Category.php");
$user = new Daily\Users\Users(array("user_id" => 2425));
Daily\Category\Category::setUser($user);
$category_users = Daily\Category\Category::getCategoryByUser();

Daily\Category\SubCategory\SubCategory::setUser($user);
$subcategory_users = Daily\Category\SubCategory\SubCategory::getUsersSubCategory();

require_once("./Expense.php");
Daily\Expense\Expense::setUser($user);
$user_expense = Daily\Expense\Expense::getUsersExpense();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Title of the document</title>
  <!-- Font Awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css" m/>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"
          integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
          integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
          crossorigin="anonymous"></script>
  <script src="https://unpkg.com/core-js/client/shim.min.js"></script>
  <script src="https://unpkg.com/zone.js@0.6.12?main=browser"></script>
  <script src="https://unpkg.com/reflect-metadata@0.1.3"></script>
  <script src="https://unpkg.com/systemjs@0.19.27/dist/system.src.js"></script>
  <script src="systemjs.config.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/datepicker.js"></script>
  <script>
    System.import('app').catch(function (err) {
      alert(err);
      // console.error(err);
    });
  </script>
</head>
<body>
<input type="hidden" value='<?php echo json_encode($category_users) ?>' id="user_categories"/>
<input type="hidden" value='<?php echo json_encode($subcategory_users) ?>' id="user_subcategories"/>
<input type="hidden" value='<?php echo json_encode($user_expense) ?>' id="user_expenses"/>
<div class="wrapper">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><i class="fa fa-bars"></i> Tabs
          <small>Float left</small>
        </h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
               aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="" role="tabpanel" data-example-id="togglable-tabs">
          <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab"
                                                      data-toggle="tab" aria-expanded="false">Home</a>
            </li>
            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab"
                                                data-toggle="tab" aria-expanded="true">Profile</a>
            </li>
            <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2"
                                                data-toggle="tab" aria-expanded="false">Profile</a>
            </li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane active in" id="tab_content1" aria-labelledby="home-tab">
              <div class="col-md-6">
                <app>
                </app>
              </div>
              <div class="col-md-6">
                <listexpenses>
                </listexpenses>
              </div>
              <div class="col-md-12">

              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade fade" id="tab_content2"
                 aria-labelledby="profile-tab">
              <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson
                artisan four loko farm-to-table craft beer twee. Qui photo
                booth letterpress, commodo enim craft beer mlkshk aliquip</p>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
              <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson
                artisan four loko farm-to-table craft beer twee. Qui photo
                booth letterpress, commodo enim craft beer mlkshk </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

