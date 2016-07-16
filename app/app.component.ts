import { Component } from '@angular/core';
import {Category} from './category.ts'
import {SubCategory} from './subcategory.ts'
import {Expense} from './expense.ts'


@Component({
    selector: 'app',
    template: '<addexpense></addexpense><add></add><subcategory></subcategory>',
    directives: [ Expense,Category, SubCategory]
})

export class Daily {
}