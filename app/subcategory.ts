import { Component } from '@angular/core';


@Component({
    selector: 'subcategory',
    templateUrl: '../templates/listsubcategory.php'
})

export class SubCategory {
    subcategory = []
    category = []
    selectedSubCategories: string[]
    category_id : any;
    flags = [];

    constructor()   {
        var response = JSON.parse(document.getElementById("user_subcategories").value);
        if (typeof response == 'object') {
            var c = 0;
            for (var k in response) {
                var t = this.subcategory[k]= [];
                for(var j in response[k]){
                    t.push({id: response[k][j].id, name: response[k][j].name});
                    this.flags[j] = false;
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

    editSub(event, val, id){
        $.post("../editSubCategory.php", {id: id, val: val}, function (data) {
        });
    }

    deleteSub(event, t, id){
        $.post("../deleteSubCategory.php", {id: id}, function (data) {
            t.remove();
        });
    }

}



