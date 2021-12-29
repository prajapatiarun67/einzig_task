$('#save-frm').on('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();
    
    var formObj = $(this);
    var formUrl = formObj.attr('action');
    var formData = new FormData(formObj[0]); 

    $.each(formObj.find('input, select, textarea, file'), function (i, field) {  
        var elem = $('[name="' + field.name + '"]'); 
        if ($("select").hasClass('select2-hidden-accessible')) {   
            elem.next().removeClass('error').siblings('label').remove();
            elem.next('label').remove();
        } else { 
            elem.removeClass('error')
                .next('label.error').remove();
        }
    });

    $.ajax({ 
        type: 'POST',
        url: formUrl,
        data: formData,
        dataType: 'JSON',
        mimeType: 'multipart/form-data',
        processData: false,
        contentType: false,
        success: function (data) {
        if(data.success == true)
        {
            /* swal(
                {
                    title: data.message, 
                    type: "success",
                    confirmButtonText: "OK"
                }, 
                function () {
                    window.location.href = data.redirect;
                }
            ); */ 
            window.alert(data.message);
            window.location.href=data.redirect;
        }  
    },
    error: function (err) {  
        if(err.responseJSON)
        {
            $.each(err.responseJSON.errors, function (key, val) { 
                    if(key.indexOf('.') !== -1) {
                        var keys = key.split('.');
                       // console.log(keys);
                        key = keys[0]+'['+keys[1]+']';
                        if(keys[2]) {
                            key = key + '['+keys[2]+']';
                        } 
                    }

                    //console.log(key);

                    var elem = $('[name="' + key + '"]', formObj); 
                    if (elem.hasClass('select2-hidden-accessible')) {
                        elem.next().addClass('error').siblings('label').remove().end().after('<label class="error">'+val+'</label>'); 
                    } else {
                        elem.removeClass('error')
                            .next('label.error').remove()
                            .end()
                            .addClass('label.error').after('<label class="error">'+val+'</label>');
                    }
                });
                $('.form-group.error').eq(0).addClass('focused');
            }
        }

});


});

