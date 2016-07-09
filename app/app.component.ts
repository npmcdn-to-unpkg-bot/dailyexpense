import { Component } from '@angular/core';



@Component({
    selector: 'addcategory',
    templateUrl: '../templates/addcategory.php'
})

export class Category {

    SubCategory: Selection<any>;
    SubCategoryList: string[];


    deleteCategory(item, id) {
    	item.remove();
    }

    editCategory(event, item){
        $(item).empty().append('<div class="col-md-6">' +
            '<form action="test.php"><input type="text" name="name" autofocus class="form-control input-sm" id="subcategory_name"/>' +
            '</div> <div class="col-md-2">' +
            '<button class="btn btn-sm btn-primary">Edit</button></div>' +
            '<div class="col-md-2"><button class="btn btn-sm btn-warning">Cancel</button>' +
            '</div></form>');
    }


    cancelEvent(){
        alert("asdf");
    }
}