import { Component } from '@angular/core';


@Component({
    selector: 'add',
    template: '' +
    '' +
    '' +
    '<div class="x_panel">' +
    '<br /><div class="x_title" style="margin-bottom:0px; border:0;"><h2>Add a New Category</h2></div>' +
    '<form method="post" action="validate.php" (ngSubmit)="onSubmit(f)" #f="ngForm">' +
    '<div class="x_content">' +
    '<div id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left">' +
    '<div class="form-group">' +
    '<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >Name<span class="required">*</span></label>' +
    '<div class="col-md-4 col-sm-4 col-xs-12">' +
    '<input type="text" ngControl="CategoryName" id="first-name" id="CategoryName" name="name" #categoryname="ngForm" required class="form-control input input-sm">' +
    '</div>' +
    '<div class="col-md-4 col-sm-4 col-xs-12 ">' +
    '<button [disabled]="!categoryname.value" type="submit"  class="btn btn-sm btn-primary">Add a New Category</button>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</form>' +
    '<br />' +
    '<div class="x_title" style="margin-bottom:0px; border:0;"><h2>Edit Your Categorie(s)</h2></div>' +
    '<div class="x_content">' +
    '<table class="table table-striped table-bordered">' +
    '<thead>' +
    '<tr><th>Name</th><th></th><th></th></tr>' +
    '</thead>' +
    '<tbody>' +
    '<tr #t  *ngFor="let item of category">' +
    '<td [ngStyle]="{display:'+ " flags[item.id] === false  ? 'table-cell': 'none' "+'}">{{item.name}}</td>' +
    '<td [ngStyle]="{display:'+ " flags[item.id] === false  ? 'table-cell': 'none' "+'}"><a (click)="editCategory($event, item.name, item.id, t, textfield)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>' +
    '<td [ngStyle]="{display:'+ " flags[item.id] === false  ? 'table-cell': 'none' "+'}"><a (click)="deleteCategory($event, item.id, t)"><i class="fa fa-close"></i></a></td>' +
    '<td #editform1 [ngStyle]="{display: '+ "flags[item.id] === true ? 'table-cell' : 'none' }"+
    '"><input #textf autofocus type="text" value="{{item.name}}" class="form-control input-sm" /></td>' +
    '<td #editform2 [ngStyle]="{display: '+ "flags[item.id] === true ? 'table-cell' : 'none' }"+
    '"><a (click)="UpdateCategory(item.id, textf.value)" class="btn btn-sm btn-primary">Edit</a></td>' +
    '<td #editform3 [ngStyle]="{display: '+ "flags[item.id] === true ? 'table-cell' : 'none' }"+
     '"><a (click)="CancelCategory(item.id)" class="btn btn-sm btn-warning">Cancel</a></td>' +
    '</tr>' +
    '</tbody>' +
    '</table>' +
    '</div>' +
    '</div>',
})

export class Category {
    category = [];
    flags = [];
    constructor() {
    }
    listenFunc:Function;
    ngOnInit() {
        var response = JSON.parse(document.getElementById("user_categories").value);
        if (typeof response == 'object') {
            var c = 0;
            for (var k in response) {
                this.category.push({id: k, name: response[k]["name"]});
                this.flags[k] = false;
            }
        }
    }
    deleteCategory(n, id, e) {
        $.post("../deleteCategory.php", {id: id}, function (data) {
        });
        e.remove();
    }
    editCategory(n, name, id, e, t) {
        this.flags[id] = true;
    }
    CancelCategory(id){
        this.flags[id] = false;
    }
    UpdateCategory(id, val){
        $.post("../updateCategory.php", {id: id, val: val}, function (data) {
        });
        this.flags[id] = false;
        for (var k in this.category) {
            if(this.category[k].id == id){
                this.category[k].name = val;
            }
        }
    }
}



