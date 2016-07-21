
<div class="x_panel">
  <div class="x_title">
    <h2>Expense Records 2016
      <small>Editable</small>
    </h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <article class="media event" *ngFor="let item of expenses">
      <a class="pull-left date" style="text-decoration: none;">
        <p class="month">{{item.month}}</p>

        <p class="day">{{item.day}}</p>
      </a>

      <div class="media-body">
        <a class="title" href="#">{{item.name}}</a> <strong>${{item.price}}</strong>

        <div class="pull-right">
          <a #edit (click)="editexpense($event,item)" data-toggle="modal" data-target="#myModal"><i
              class="fa fa-edit"></i></a>
          <a href="deleteExpense.php?id={{item.id}}" #remove><i class="fa fa-remove"></i></a>
        </div>
        <div class="bg bg-success" style="width:30%;">adfs</div>
        <p>{{item.notes}}</p>
      </div>
    </article>
  </div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="../updateexpense.php" (ngSubmit)="onSubmit(l)" #l="ngForm" >
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="pwd">Name</label>
              <input type="text" name="name" class="form-control input-sm" [value]="itemName"  id="pwd" placeholder="Enter password">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="pwd">Category</label>
              <select name="category_id" class="form-control input-sm" (click)="onChangeCategory($event.target.value)">
                <option value="0">Select a Category</option>
                <option *ngFor="let item of category" [value]="item.id"   [attr.selected]="item.id == selectedCategory_id ? true : null"
                  >{{item.name}}</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="pwd">Subcategory</label>
              <select name="subcategory_id" class="form-control input-sm">
                <option *ngFor="let item of selectedSubCategories" value="{{item.id}}" [attr.selected]="item.id == selectedSubCategory_id ? true : null">{{item.name}}</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="pwd">Dates</label>
              <input type="text" name="date" id="date_expense"  [value]="itemDate" class="form-control input-sm" placeholder="Enter Dates">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="pwd">Prices</label>
              <input type="text" name="price" id="test" [value]="itemPrice" class="form-control input-sm" placeholder="Enter Dates">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Notes</label>
        <textarea rows="3" name="notes" class="form-control">
  {{itemNote}}
        </textarea>
            </div>
          </div>
          <div class="col-md-4 pull-right">
            <div class="form-group pull-right">
              <input type="submit" value="Update Expense" class="btn btn-sm btn-success"/>
            </div>
          </div>
        </div>
         <input type="hidden" name="id" [value]="id"/>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>