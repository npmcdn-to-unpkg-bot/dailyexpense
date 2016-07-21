import { Component } from '@angular/core';

@Component({
    selector: 'listexpenses',
    templateUrl: '../templates/listexpense.php'
})

export class ListExpenses {
    expenses =  [];
    category= [];
    subcategory = [];
    selectedCategory_id: any;
    selectedSubCategory_id =[];
    selectedSubCategories=[];
    itemName : string;
    itemPrice: string;
    itemNote:string;
    itemDate: string;
    id: any;


    ngOnInit() {
        $('#date_expense').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_4"

        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });

        //$('#element').confirmation('hide');
    }

    constructor() {


        var mS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
        var response = JSON.parse(document.getElementById("user_expenses").value);
        if (typeof response == 'object') {
            for (var k in response) {
               var index;
               var p;
               var day;
               var date;
               if(response[k].date && response[k].date !== "0000-00-00"){
                   p = response[k].date.split("-");
                   index =  parseInt(p[1]) - 1;
                   day = p[2];
                   date = p[1]+"/"+p[2]+"/"+p[0];
               }
               this.expenses.push({id: response[k].id, name:response[k].name, price:response[k].price,
               notes: response[k].notes, month: mS[index], day: day, category_id: response[k].category_id,
               subcategory_id: response[k].subcategory_id, date:date});
            }
        }

        var response = JSON.parse(document.getElementById("user_categories").value);
        if (typeof response == 'object') {
            var c = 0;
            for (var k in response) {
                this.category.push({id: k, name: response[k]["name"]});
            }
        }

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
    }

    onChangeCategory(v){
        this.selectedSubCategories = this.subcategory[v] !== "undefined" ? this.subcategory[v] : false;
    }

    editexpense(event, item){
        this.selectedCategory_id = item.category_id ? item.category_id : false;
        this.selectedSubCategories = this.subcategory[item.category_id] !== "undefined" ? this.subcategory[item.category_id] : false;
        this.selectedSubCategory_id = item.subcategory_id ? item.subcategory_id : false;
        this.itemName = item.name;
        this.itemPrice= item.price;
        this.itemNote= item.notes;
        this.itemDate = item.date;
        this.id = item.id

    }

}



