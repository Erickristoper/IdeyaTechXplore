
            function searchItem(){
                var data = {'itemName': $('#itemname').val()  };
                var apiUrl = 'search_item.php';
               $.ajax({
                   url: apiUrl,         
                   method: 'POST',
                   contentType: 'application/json',
                   data: JSON.stringify(data),
                   success: function(result) {
                    var itemDetails = $.parseJSON(result);
                    if (itemDetails.result.length == 0) {
                    }else {
                    //   toastr.success('Page Contents successfully saved.');
                     
                      console.dir(itemDetails);
                    //   couponname = discountDetails1.result[0].CouponCode;
                   //    window.location.href = indexPath; }
                    }
                   },
                   error: function (jqXHR, status, err) {
                   }
               });
            }
    
    $(document).ready(function(){
        $('.login-info-box').fadeOut();
        $('.login-show').addClass('show-log-panel');

    });
    
    // $('#itemname').on('keyup',function(e){
    //   searchItem();
    // });


    $('#submit').click(function(){
        searchItem();
    })



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
      
    