/* 
 *Получение данных из формы
 */

function getData(obj_form){
    var hData={ };
    $('input, textarea, select', obj_form).each(function(){
        if (this.name && this.name!=' '){
            hData [this.name]= this.value;
            console.log ( 'hData[' +this.name+ ']=' + hData[this.name]);
             }
    } );
    return hData;
};

/*
 * добавление новой категории
 * 
 * вызывает addnewcatAction
 */

 
function newCategory(){
    var postData = getData('#blockNewCategory');
    $.ajax ({
        type: 'POST',
        async: false, 
        url: "/admin/addnewcat/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                 alert (data['message']);
                $('#newCategoryName').val(' ');
                } else {
                    alert (data['message']);
                }
        }
    })
}

/*
 * обновление данных в таблице категорий
 * 
 *  вызывает updatecategoryAction
 */

function updateCat (itemId){
    var parentId       =$('#parentId_'+itemId).val();
    var newName     =$('#itemName_'+itemId).val();
    var postData      = {itemId: itemId, parentId: parentId, newName:newName};
      
        $.ajax ({
          type: 'POST',
           async: false, 
           url: "/admin/updatecategory/",
           data: postData,
          dataType: 'json',
          success: function(data){
                alert (data['message']);
                }
        });
}

/*
 *добавление нового продукта
 *
* вызывает addproductAction
*/

function addProduct (){
    var itemName          = $('#newItemName').val();
    var itemPrice            = $('#newItemPrice').val();
    var itemCatId           = $('#newItemCatId').val();
    var itemDescShort    = $('#newItemDescShort').val();
    var itemDesc            = $('#newItemDesc').val();
                                
    var postData      = {itemName: itemName, itemPrice: itemPrice, itemCatId: itemCatId, itemDescShort: itemDescShort, itemDesc: itemDesc };
      
        $.ajax ({
          type: 'POST',
           async: false, 
           url: "/admin/addproduct/",
           data: postData,
          dataType: 'json',
          success: function(data){
                alert (data['message']);
                if(data['success']){
                            $('#newItemName').val('');
                            $('#newItemPrice').val('');
                            $('#newItemCatId').val('');
                            $('#newItemDescShort').val('');
                            $('#newItemDesc').val('');
                          }
            }
        });
}

/*
 * обновление данных в таблице экскурсии
 * 
 * вызывает updateproductAction
*/

function updateExcursion(itemId){
    
    var itemName        = $('#itemName_'+itemId).val();
    var itemPrice         = $('#itemPrice_'+itemId).val();
    var itemCatId        = $('#itemCatId_'+itemId).val();
    var itemDescShort = $('#itemDescShort_'+itemId).val();
    var itemDesc        = $('#itemDesc_'+itemId).val();
    var itemStatus     = $('#itemStatus_'+itemId).attr('checked');
   // var newFileName        = $('#newFileName_'+itemId).val(); 
    if( ! itemStatus){
        itemStatus=1
    } else {
        itemStatus=0
    }  
        
    var postData      = {itemId: itemId, itemName: itemName, itemPrice: itemPrice, 
                                itemCatId: itemCatId, itemDescShort: itemDescShort, itemDesc: itemDesc, itemStatus: itemStatus};
      
        $.ajax ({
          type: 'POST',
           async: false, 
           url: "/admin/updateexcursion/",
           data: postData,
          dataType: 'json',
          success: function(data){
                alert (data['message']);
              }
        });
}

