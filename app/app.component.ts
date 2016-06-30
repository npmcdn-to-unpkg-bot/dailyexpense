import { Component } from '@angular/core';

@Component({
    selector: 'category',
    templateUrl: '../templates/home.php'
})

export class AppComponent {
    categories: string[];
    subcategories: string[];
    myElement:string;
    constructor(){

    }


}