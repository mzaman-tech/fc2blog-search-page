<script>
	var search_date = $('#date').val();
	if(search_date != ''){
		var prev = $('#prev').attr('href') + '&date=' + search_date;
		$('#prev').attr('href', prev);
		
		var next = $('#next').attr('href') + '&date=' + search_date;
		$('#next').attr('href', next);
	}
	
	var search_user_name = $('#user_name').val();
	if(search_user_name != ''){
		var prev = $('#prev').attr('href') + '&user_name=' + search_user_name;
		$('#prev').attr('href', prev);
		
		var next = $('#next').attr('href') + '&user_name=' + search_user_name;
		$('#next').attr('href', next);
	}
	
	
	var search_server_number = $('#server_number').val();
	if(search_server_number != ''){
		var prev = $('#prev').attr('href') + '&server_number=' + search_server_number;
		$('#prev').attr('href', prev);
		
		var next = $('#next').attr('href') + '&server_number=' + search_server_number;
		$('#next').attr('href', next);
	}
	
	var search_entry_number = $('#entry_number').val();
	if(search_entry_number != ''){
		var prev = $('#prev').attr('href') + '&entry_number=' + search_entry_number;
		$('#prev').attr('href', prev);
		
		var next = $('#next').attr('href') + '&entry_number=' + search_entry_number;
		$('#next').attr('href', next);
	}
	
</script>

</body>
</html>