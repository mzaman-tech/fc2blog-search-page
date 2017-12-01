<?php
/* Smarty version 3.1.32-dev-38, created on 2017-11-30 11:16:53
  from 'C:\xampp\htdocs\fc2blog-search-page\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a1fda95c9b682_79415200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee7fc04ce88b2d825203b24678f6c198c65aa563' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fc2blog-search-page\\templates\\footer.tpl',
      1 => 1512037011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1fda95c9b682_79415200 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
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
	
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
