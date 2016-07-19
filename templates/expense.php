<?php
$c = 0;
?>
<form method="post" action="../addexpense.php" (ngSubmit)="onSubmit(g)" #g="ngForm">
  <div class="x_panel">
    <div class="x_title" style="margin-bottom:0px; border:0;">
      <h2>Add an Expense</h2>
    </div>
    <div class="x_content">
      <div class="col-md-6">
        <div class="form-group">
          <label for="pwd">Name</label>
          <input type="text" name="name" class="form-control input-sm" id="pwd" placeholder="Enter password">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="pwd">Category</label>
          <select name="category_id" class="form-control input-sm" (click)="onChangeCategory($event.target.value)">
            <option value="0">Select a Category</option>
            <option *ngFor="let item of category" value="{{item.id}}">{{item.name}}</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="pwd">Subcategory</label>
          <select name="subcategory_id" class="form-control input-sm">
            <option *ngFor="let item of selectedSubCategories" value="{{item.id}}">{{item.name}}</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="pwd">Dates</label>
          <input type="text" name="date" id="date_expense" class="form-control input-sm" placeholder="Enter Dates">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="pwd">Prices</label>
          <input type="text" name="price" id="date_expense" class="form-control input-sm" placeholder="Enter Dates">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label>Notes</label>
        <textarea rows="3" name="notes" class="form-control">
        </textarea>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <input type="submit" value="Add an Expense" class="btn btn-sm btn-primary"/>
        </div>
      </div>
    </div>
  </div>
</form>
