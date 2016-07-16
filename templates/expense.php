<?php
$c = 0;
?>

<div class="x_panel">
  <div class="x_title" style="margin-bottom:0px; border:0;">
    <h2>Add an Expense</h2>
  </div>
  <div class="x_content">
    <div class="col-md-4">
      <div class="form-group">
        <label for="pwd">Name:</label>
        <input type="password" class="form-control input-sm" id="pwd" placeholder="Enter password">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="pwd">Category</label>
        <select class="form-control input-sm">
          <option value="0">Select a Category</option>
          <option *ngFor="let item of category" value="{{item.id}}">{{item.name}}</option>
        </select>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="pwd">Category</label>
        <select class="form-control input-sm">
          <option value="0">Select a Category</option>
          <option *ngFor="let item of subcategory">{{item}}</option>
        </select>
      </div>
    </div>
  </div>
</div>

<?php

?>
<li *ngFor="let item of subcategory">
{{item}}
  <?php
$c += 1;;
  echo $c;
  echo 'adsf';
  ?>
</li>
<?php
echo $c.'asdf';