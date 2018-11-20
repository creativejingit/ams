$( document ).ready(function() {
	// on load populate module in multiple checbox
	$.ajax({
        url: APP_URL + "/package/get-modules",
        type: 'GET',
        dataType: 'json',
        success: function (data) {
			$('#multisel').formSelect();

			var Options="";
			$.each(data.data, function(i, val){ 
				$('#multisel').append("<option value='"+val.id+"'>"+val.name+"</option>");
				$('#multisel').formSelect();
			});
        }
    });


    $('#multisel').on('change', function(){
    	let id = $(this).val();
    	let package_name = $(this).text();
    	let package_id = $(this).data('package-id');

    	console.log(package_id);

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
    });

});