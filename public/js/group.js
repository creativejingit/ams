function checkModules(action,module_id,row_id)
{
    let isChecked   = action.is(':checked');
    console.log(isChecked);
    if(isChecked == true) {
        let rowId = action.data('row-id');
        if(rowId == row_id) {
            $('.multisel_'+rowId).attr('selected',true);
        }


    }

    // $.ajax({
    //     url: APP_URL + "/package/save-package-modules",
    //     type: 'POST',
    //     dataType: 'json',
    //     data: {
    //             id: id,
    //             package_id: package_id,
    //             _token: $('meta[name="csrf-token"]').attr('content')
    //         },
    //     success: function (data) {
    //         alert('Success!!');
    //     }
    // });
}


function saveModules(action,module_id,rowId)
{
    let id = action.val();
    let package_name = $(this).text();
    console.log(rowId);    
    let selected_methods = $('.multisel_'+rowId).val();

    console.log(selected_methods);

    // $.ajax({
    //     url: APP_URL + "/package/save-package-modules",
    //     type: 'POST',
    //     dataType: 'json',
    //     data: {
    //             id: id,
    //             package_id: package_id,
    //             _token: $('meta[name="csrf-token"]').attr('content')
    //         },
    //     success: function (data) {
    //         alert('Success!!');
    //     }
    // });
}

