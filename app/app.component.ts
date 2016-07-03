import { Component } from '@angular/core';

@Component({
    selector: 'addcategory',
    templateUrl: '../templates/addcategory.php'
})

export class AppComponent {
    categories: string[];
    subcategories: string[];
    myElement:string;
    constructor(){

    }


}