function savePackageModule(action,package_id)
{
    let id = action.val();
    let package_name = $(this).text();

    $.ajax({
        url: APP_URL + "/package/save-package-modules",
        type: 'POST',
        dataType: 'json',
        data: {
                id: id,
                package_id: package_id,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
        success: function (data) {
            alert('Success!!');
        }
    });
}

