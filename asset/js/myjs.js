
$(document).ready(function(){

    $('.imprimer').on('click',function(){
        // printData();
        $('#table_to_print').printElement({    
            css: 'extend'
        });
    })

  
}); 

function printData()
{
   var divToPrint=document.getElementById("table_to_print");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
