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

function addExcursionJs(){
    var itemName          = $('#newItemName').val();
    var itemPrice            = $('#newItemPrice').val();
    var itemCatId           = $('#newItemCatId').val();
    var itemDescShort    = $('#newItemDescShort').val();
    var itemDesc            = $('#newItemDesc').val();
    var itemStatus          = $('#newitemStatus').prop('checked');
   // var newFileName        = $('#newFileName_'+itemId).val(); 
        if( ! itemStatus){       itemStatus=1    }
                    else {        itemStatus=0           }                 
                    
    var postData      = {itemName: itemName, itemPrice: itemPrice, itemCatId: itemCatId,
                    itemDescShort: itemDescShort, itemDesc: itemDesc, itemStatus : itemStatus };
      
        $.ajax ({
          type: 'POST',
           async: false, 
           url: "/?controller=admin&action=addexcursiontodb",
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

function updateExcursionJs(itemId){
                             
    var itemName        = $('#itemName_'+itemId).val();
    var itemPrice         = $('#itemPrice_'+itemId).val();
    var itemCatId        = $('#itemCatId_'+itemId).val();
    var itemDescShort = $('#itemDescShort_'+itemId).val();
    var itemDesc        = CKEDITOR.instances['itemDesc_'+itemId].getData();
    var itemStatus     = $('#itemStatus_'+itemId).prop('checked');
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
           url: "/?controller=admin&action=updateexcursion",
           data: postData,
          dataType: 'json',
          success: function(data){
                alert (data['message']);
              }
        });
}

/** -------------------------- статьи --------------------------------- **/

/** 
 * обновление данных в таблице статей
 * 
 * вызывает updatearticleAction
**/
         
function updateArticleJs(itemId){
    
    var itemName        = $('#itemName_'+itemId).val();
    var itemDate         = $('#itemDate_'+itemId).val();
    var itemCatId        = $('#itemCatId_'+itemId).val();
    var itemTeaser      = $('#itemTeaser_'+itemId).val();
    var itemText = CKEDITOR.instances['itemText_'+itemId].getData();
         
     // var newFileName        = $('#newFileName_'+itemId).val(); 
    var itemTeg        = $('#itemTeg_'+itemId).val();
    var itemStatus     = $('#itemStatus_'+itemId).prop('checked');   
    if( ! itemStatus){  itemStatus=1  }                         
            else {   itemStatus=0    }  
   
    var postData   = {itemId: itemId, itemName: itemName, itemDate : itemDate , 
        itemCatId: itemCatId, itemTeaser: itemTeaser, itemText: itemText, itemStatus: itemStatus, itemTeg: itemTeg};
      
        $.ajax ({
          type: 'POST',
           async: false, 
           url: "/?controller=admin&action=updatearticle",
           data: postData,
          dataType: 'json',
          success: function(data){
                alert (data['message']);
              }
        });
}

/*
 *добавление новой статьи
 *
* вызывает addarticletodbAction
*/

function addArticleJs(){
    var itemName          = $('#newItemName').val();
    var itemCatId           = $('#newItemCatId').val();
    var itemTeaser         = $('#newItemTeaser').val();
    var itemText            = $('#newItemText').val();
    var itemTeg             = $('#newItemTeg').val();
    var itemStatus         = $('#newItemStatus').prop('checked');   
    if( ! itemStatus){  itemStatus=1  }                         
            else {   itemStatus=0    }  
   
    var postData      = {itemName: itemName, itemCatId : itemCatId, 
        itemTeaser : itemTeaser, itemText :itemText, itemTeg:itemTeg, itemStatus : itemStatus};
      
        $.ajax ({
          type: 'POST',
           async: false, 
           url: "/?controller=admin&action=addarticletodb",
           data: postData,
          dataType: 'json',
          success: function(data){
                alert (data['message']);
                if(data['success']){
                            $('#newItemName').val('');
                            $('#newItemCatId').val('');          
                            $('#newItemTeaser').val('');
                            $('#newItemText').val('');
                            $('#newItemTeg').val('');
                          }
            }
        });
}