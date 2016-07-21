import { Component } from '@angular/core';


@Component({
    selector: 'addexpense',
    templateUrl: '../templates/expense.php'
})

export class Expense {
    subcategory = []
    category = []
    selectedSubCategories: string[]
    category_id : any;
    flags = [];


    ngOnInit() {
        $('#date_expense').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_4"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    }


    constructor()   {


        var response = JSON.parse(document.getElementById("user_subcategories").value);
        if (typeof response == 'object') {
            var c = 0;
            for (var k in response) {
                var t = this.subcategory[k]= [];
                for(var j in response[k]){
                    t.push({id: response[k][j].id, name: response[k][j].name});
                }
            }
        }
        var response = JSON.parse(document.getElementById("user_categories").value);
        if (typeof response == 'object') {
            var c = 0;
            for (var k in response) {
                this.category.push({id: k, name: response[k]["name"]});
            }
        }



    }

    onChangeCategory(v){
        this.selectedSubCategories = this.subcategory[v] !== "undefined" ? this.subcategory[v] : false;
        this.category_id = v;

    }


}



