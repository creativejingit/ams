$('.add_row').on('click', function(){
	let html = '';
	let getIncVal = parseInt($(this).attr('data-info'));	
	let inc = parseInt(getIncVal + 1);
	$(this).attr('data-info',inc);
		html += '<tr class="row_'+parseInt(inc++)+'">';
		html += '<td><input type="text" name="Item[]"></td>';
		html += '<td><input type="text" name="Description[]"></td>';
		html += '<td><input type="text" name="Quantity[]"></td>';
		html += '<td><input type="text" name="Total_Cost[]"></td>';
		html += '<td><input type="hidden" value='+parseInt(inc++)+' name="row_id[]"></td>';
		html += '</tr>';
	$('#mainTable').append(html);
	$('#mainTable').editableTableWidget();
});