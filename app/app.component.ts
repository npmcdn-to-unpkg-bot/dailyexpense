import { Component } from '@angular/core';
import {Category} from './category.ts'
import {SubCategory} from './subcategory.ts'


@Component({
    selector: 'app',
    template: '<add></add><subcategory></subcategory>',
    directives: [Category, SubCategory]
})

export class Daily {
}