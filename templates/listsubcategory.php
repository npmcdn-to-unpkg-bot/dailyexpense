<div class="x_panel">
  <div class="x_title" style="margin-bottom:0px; border:0;">
    <h2>Maintain Your Subcategorie(s)</h2>
  </div>
  <div class="x_content">
    <div class="col-md-6">
      <select (change)="onChangeCategory($event.target.value)" class="form-control input-sm">
        <option value="0">Select a Category</option>
        <option *ngFor="let item of category" value="{{item.id}}">{{item.name}}</option>
      </select>
    </div>
    <div class="col-md-12" style="margin-top: 5px;" >
      <ul class="to_do">
        <li *ngFor="let item of selectedSubCategories" #t>
          <div class="row">
            <div class="col-md-7">
              <input type="text" #textsub class="form-control form-horizontal input-sm" value="{{item.name}}"/>
            </div>
            <div class="col-md-2">
              <a (click) ="editSub($event, textsub.value, item.id)" class="btn btn-sm btn-primary">Edit</a>
            </div>
            <div class="col-md-2">
              <a (click) ="deleteSub($event, t, item.id)" class="btn btn-sm btn-danger">Delete</a>
            </div>
          </div>
        </li>
      </ul>
      <form method="post" action="../addsubcategory.php" (ngSubmit)="onSubmit(g)" #g="ngForm" [ngStyle]="{display: !category_id ? 'none' : 'block'}">
        <input type="text" class="form-control input-xs" name="subcategoryname" #subcategoryname="ngForm"
               placeholder="Enter a New Subcatgeory" ngControl="SubCategoryName"/>
        <br />
        <button type="submit" [disabled]="!category_id || !subcategoryname.value" class="btn btn-primary btn-sm"
                value="Add a Subcatgeory" >Add a Subcategory
        </button>
        <input type="hidden" name="category_id" value="{{category_id}}"/>
      </form>
    </div>
    <div class="col-md-4">
    </div>
  </div>
</div>


