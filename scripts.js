
            var itemName = $('#itemname').val();
            var itemDetails;
            

            function waitForElement(elementPath, callBack){
                window.setTimeout(function(){
                if($(elementPath).length){
                        callBack(elementPath, $(elementPath));
                }else{
                        waitForElement(elementPath, callBack);
                }
                },500)
            }


            function searchItem(){
                var data = {'itemName': $('#itemname').val() };
                 itemName = $('#itemname').val();
                console.log(data);
                var apiUrl = 'search_item.php';
               $.ajax({
                   url: apiUrl,         
                   method: 'POST',
                   contentType: 'application/json',
                   data: JSON.stringify(data),
                   success: function(result) {
                    itemDetails = $.parseJSON(result);
                    if (itemDetails.result.length == 0) {
                    }else {
                    //   toastr.success('Page Contents successfully saved.');
                      console.dir(itemDetails);
                        var itemname = itemDetails.result['items'].name;
                        console.log(itemname);
                        var couponspan = '<input type="hidden" class="coupon-msg" id="couponhidden"></span>';
                         $('#product').append(couponspan);
                       
                        }
               },
                   error: function (jqXHR, status, err) {
                       console.log('error');
                   }
               });
            }


            function saveItem(){
                var data = {'itemName': $('#item').val(), 'price': $('#oldprice').val() };
                 itemName = $('#itemname').val();
                console.log(data);
                var apiUrl = 'save_item.php';
               $.ajax({
                   url: apiUrl,         
                   method: 'POST',
                   contentType: 'application/json',
                   data: JSON.stringify(data),
                   success: function(result) {
                    itemDetails = $.parseJSON(result);
                    if (itemDetails.result.length == 0) {
                    }else {
                    //   toastr.success('Page Contents successfully saved.');
                      console.dir(itemDetails);
                        // var itemname = itemDetails.result['items'].name;
                        // console.log(itemname);
                        // var couponspan = '<input type="hidden" class="coupon-msg" id="couponhidden"></span>';
                        //  $('#product').append(couponspan);
                       
                        }
               },
                   error: function (jqXHR, status, err) {
                       console.log('error');
                   }
               });
            }


    $(document).ready(function(){
        $('.login-info-box').fadeOut();
        $('.login-show').addClass('show-log-panel');
    });
    
    $('#submit').click(function(){
        searchItem();
        waitForElement('#couponhidden',function(){
        $.each(itemDetails.result['items'], function(index, cf) {
            if (cf.name == itemName) {
            var price =  cf.price;   
            var name =  cf.name;
            var row = $('#product');
            var size = cf.standard;
            var path = cf.image;
            var itemdiv =  '<div id="image"><img width="100" height="80" id ="itemimage"></div><div style ="display:inline-block"><h5 id="item"></h5><h5 id="size"></h5></div><div style ="display:inline-block"><h5>Old Price:</h5><h5 id ="oldprice">20.00</h5></div><div id="image"> <button class="btn success" id ="save">Add</button>';
            // <input type ="button" width="80" height="80" id ="addimage">+<button>';
                
            row.append(itemdiv);
            $('#item').text(name);
            $('#size').text('Size: '+ size);
            $("#itemimage").attr("src",path);
            // $("#addimage").attr("src",'assets/add.png');
            $("#addimage").innerHTML = '+';
            $('#product').css('margin-left:10px');

        //    $('#image').css('margin-left:20px');
         }
         });
    })
});


$('#addimage').click(function(){
 console.log('click');
});

$('#save').click(function(){
    saveItem();
   });




    $('.login-reg-panel input[type="radio"]').on('change', function() {
        if($('#log-login-show').is(':checked')) {
            $('.register-info-box').fadeOut(); 
            $('.login-info-box').fadeIn();
            
            $('.white-panel').addClass('right-log');
            $('.register-show').addClass('show-log-panel');
            $('.login-show').removeClass('show-log-panel');
            
        }
        else if($('#log-reg-show').is(':checked')) {
            $('.register-info-box').fadeIn();
            $('.login-info-box').fadeOut();
            
            $('.white-panel').removeClass('right-log');
            
            $('.login-show').addClass('show-log-panel');
            $('.register-show').removeClass('show-log-panel');
        }
    });
      
    