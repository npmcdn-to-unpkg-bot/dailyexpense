import { Component } from '@angular/core';
import {Category} from './category.ts'
import {ListCategory} from './listcategory.ts'


@Component({
    selector: 'app',
    template: '<add></add>',
    directives: [Category]
})

export class Daily {
}