import { Component } from '@angular/core';
import {Http} from '@angular2/http';


@Component({
    selector: 'addcategory',
    templateUrl: '../templates/addcategory.php'
})

export class Category {
    id: int;
    constructor(){
    };
    deleteCategory(item, id) {
    	item.remove();
    	this.id = id;
    	$.post( "deleteCategory.php", {"id": this.id},  function( data ) {    	
		});
    }
}