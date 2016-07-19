<div class="x_panel">
  <div class="x_title">
    <h2>Expense Records 2016<small>Editable</small></h2>
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
          <a><i class="fa fa-edit"></i></a>
          <a><i class="fa fa-remove"></i></a>
        </div>
        <p>{{item.notes}}</p>
      </div>
    </article>
  </div>
</div>




