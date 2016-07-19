import { Component } from '@angular/core';

@Component({
    selector: 'listexpenses',
    templateUrl: '../templates/listexpense.php'
})

export class ListExpenses {
    expenses =  [];
    constructor() {
        var mS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
        var response = JSON.parse(document.getElementById("user_expenses").value);
        if (typeof response == 'object') {
            for (var k in response) {
               var index;
               var p;
               var day;
               if(response[k].date && response[k].date !== "0000-00-00"){
                   p = response[k].date.split("-");
                   index =  parseInt(p[1]) - 1;
                   day = p[2];
               }

               this.expenses.push({id: response[k].id, name:response[k].name, price:response[k].price,
               notes: response[k].notes, month: mS[index], day: day});
            }
        }

       // console.log(this.expenses);
    }

}



