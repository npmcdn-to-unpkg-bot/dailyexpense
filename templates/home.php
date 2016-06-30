<br />
<div class="col-md-6">
    <?php
    require_once("../db.php");
    require_once("../factory/FactoryMethod.php");
    $categories = Daily\FactoryMethod::generateObjects();
    ?>
  <form method="post">
  <div class="col-md-12">
    <h3>Add a new </h3>
  </div>
  <div class="col-md-6">
  <select class="form-control">
    <?php
    if(!empty($categories)){
      foreach($categories as $key=> $v){
        echo '<option>'.$v->getName().'</option>';
      }
    }
    ?>
  </select>
  </div>
  <div class="col-md-6">
    <input type="" class="form-control" />
  </div>
  </form>

</div>