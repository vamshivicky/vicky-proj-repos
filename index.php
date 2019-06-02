<!--
//index.php
!-->

<html>  
    <head>  
        <title>PHP - Sending multiple forms data through jQuery Ajax</title>  
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="bootstrap.min.css" />
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
			<br />
			
			<h3 align="center">PHP - Sending multiple forms data through jQuery Ajax</a></h3><br />
			<br />
			<br />
			<div align="right" style="margin-bottom:5px;">
				<button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
			</div>
			<br />
			<form method="post" id="user_form">
				<div class="table-responsive">
					<table class="table table-striped table-bordered" id="user_data">
						<tr>
							<th>Question</th>
							<th>option1</th>
							<th>option2</th>
							<th>option3</th>
							<th>option4</th>
							<th>Details</th>
							<th>Remove</th>
						</tr>
					</table>
				</div>
				<div align="center">
					<input type="submit" name="insert" id="insert" class="btn btn-primary" value="Insert" />
				</div>
			</form>

			<br />
		</div>
		<div id="user_dialog" title="Add Data">
			<div class="form-group">
				<label>Enter Question</label>
				<input type="text" name="Question" id="Question" class="form-control" />
				<span id="error_Question" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Enter option1</label>
				<input type="text" name="option_1" id="option_1" class="form-control" />
				<span id="error_option_1" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Enter option2</label>
				<input type="text" name="option_2" id="option_2" class="form-control" />
				<span id="error_option_2" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Enter option3</label>
				<input type="text" name="option_3" id="option_3" class="form-control" />
				<span id="error_option_3" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Enter option4</label>
				<input type="text" name="option_4" id="option_4" class="form-control" />
				<span id="error_option_4" class="text-danger"></span>
			</div>
			
			<div class="form-group" align="center">
				<input type="hidden" name="row_id" id="hidden_row_id" />
				<button type="button" name="save" id="save" class="btn btn-info">Save</button>
			</div>
		</div>
		<div id="action_alert" title="Action">

		</div>
    </body>  
</html>  




<script>  
$(document).ready(function(){ 
	
	var count = 0;

	$('#user_dialog').dialog({
		autoOpen:false,
		width:400
	});

	$('#add').click(function(){
		$('#user_dialog').dialog('option', 'title', 'Add Data');
		$('#Question').val('');
		$('#option_1').val('');
		$('#option_2').val('');
		$('#option_3').val('');
		$('#option_4').val('');
		$('#error_Question').text('');
		$('#error_option_1').text('');
		$('#error_option_2').text('');
		$('#error_option_3').text('');
		$('#error_option_4').text('');
		$('#Question').css('border-color', '');
		$('#option_1').css('border-color', '');
		$('#option_2').css('border-color', '');
		$('#option_3').css('border-color', '');
		$('#option_4').css('border-color', '');
		$('#save').text('Save');
		$('#user_dialog').dialog('open');
	});

	$('#save').click(function(){
		var error_Question = '';
		var error_option_1 = '';
		var error_option_2 = '';
		var error_option_3 = '';
		var error_option_4 = '';
		var Question = '';
		var option_1 = '';
		var option_2 = '';
		var option_3 = '';
		var option_4 = '';
		if($('#Question').val() == '')
		{
			error_Question = 'Question is required';
			$('#error_Question').text(error_Question);
			$('#Question').css('border-color', '#cc0000');
			Question = '';
		}
		else
		{
			error_Question = '';
			$('#error_Question').text(error_Question);
			$('#Question').css('border-color', '');
			Question = $('#Question').val();
		}	
		if($('#option_1').val() == '')
		{
			error_option_1 = 'option1 is required';
			$('#error_option_1').text(error_option_1);
			$('#option_1').css('border-color', '#cc0000');
			option_1 = '';
		}
		else
		{
			error_option_1 = '';
			$('#error_option_1').text(error_option_1);
			$('#option_1').css('border-color', '');
			option_1 = $('#option_1').val();
		}
		if($('#option_2').val() == '')
		{
			error_option_2 = 'option2 is required';
			$('#error_option_2').text(error_option_2);
			$('#option_2').css('border-color', '#cc0000');
			option_2 = '';
		}
		else
		{
			error_option_2 = '';
			$('#error_option_2').text(error_option_2);
			$('#option_2').css('border-color', '');
			option_2 = $('#option_2').val();
		}
		if($('#option_3').val() == '')
		{
			error_option_3 = 'option3 is required';
			$('#error_option_3').text(error_option_3);
			$('#option_3').css('border-color', '#cc0000');
			option_3 = '';
		}
		else
		{
			error_option_3 = '';
			$('#error_option_3').text(error_option_3);
			$('#option_3').css('border-color', '');
			option_3 = $('#option_3').val();
		}
		if($('#option_4').val() == '')
		{
			error_option_4 = 'option4 is required';
			$('#error_option_4').text(error_option_4);
			$('#option_4').css('border-color', '#cc0000');
			option_4 = '';
		}
		else
		{
			error_option_4 = '';
			$('#error_option_4').text(error_option_4);
			$('#option_4').css('border-color', '');
			option_4 = $('#option_4').val();
		}
		if(error_Question != '' || error_option_1 != '' || error_option_2 != '' || error_option_3 != '' || error_option_4 != '')
		{
			return false;
		}
		else
		{
			if($('#save').text() == 'Save')
			{
				count = count + 1;
				output = '<tr id="row_'+count+'">';
				output += '<td>'+Question+' <input type="hidden" name="hidden_Question[]" id="Question'+count+'" class="Question" value="'+Question+'" /></td>';
				output += '<td>'+option_1+' <input type="hidden" name="hidden_option_1[]" id="option_1'+count+'" value="'+option_1+'" /></td>';
				output += '<td>'+option_2+' <input type="hidden" name="hidden_option_2[]" id="option_2'+count+'" value="'+option_2+'" /></td>';
				output += '<td>'+option_3+' <input type="hidden" name="hidden_option_3[]" id="option_3'+count+'" value="'+option_3+'" /></td>';
				output += '<td>'+option_4+' <input type="hidden" name="hidden_option_4[]" id="option_4'+count+'" value="'+option_4+'" /></td>';
				output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
				output += '</tr>';
				$('#user_data').append(output);
			}
			else
			{
				var row_id = $('#hidden_row_id').val();
				output = '<td>'+Question+' <input type="hidden" name="hidden_Question[]" id="Question'+row_id+'" class="Question" value="'+Question+'" /></td>';
				output += '<td>'+option_1+' <input type="hidden" name="hidden_option_1[]" id="option_1'+row_id+'" value="'+option_1+'" /></td>';
				output += '<td>'+option_2+' <input type="hidden" name="hidden_option_2[]" id="option_2'+row_id+'" value="'+option_2+'" /></td>';
				output += '<td>'+option_3+' <input type="hidden" name="hidden_option_3[]" id="option_3'+row_id+'" value="'+option_3+'" /></td>';
				output += '<td>'+option_4+' <input type="hidden" name="hidden_option_4[]" id="option_4'+row_id+'" value="'+option_4+'" /></td>';
				output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
				$('#row_'+row_id+'').html(output);
			}

			$('#user_dialog').dialog('close');
		}
	});

	$(document).on('click', '.view_details', function(){
		var row_id = $(this).attr("id");
		var Question = $('#Question'+row_id+'').val();
		var option_1 = $('#option_1'+row_id+'').val();
		var option_2 = $('#option_2'+row_id+'').val();
		var option_3 = $('#option_3'+row_id+'').val();
		var option_4 = $('#option_4'+row_id+'').val();
		$('#Question').val(Question);
		$('#option_1').val(option_1);
		$('#option_2').val(option_2);
		$('#option_3').val(option_3);
		$('#option_4').val(option_4);		
		$('#save').text('Edit');
		$('#hidden_row_id').val(row_id);
		$('#user_dialog').dialog('option', 'title', 'Edit Data');
		$('#user_dialog').dialog('open');
	});

	$(document).on('click', '.remove_details', function(){
		var row_id = $(this).attr("id");
		if(confirm("Are you sure you want to remove this row data?"))
		{
			$('#row_'+row_id+'').remove();
		}
		else
		{
			return false;
		}
	});

	$('#action_alert').dialog({
		autoOpen:false
	});

	$('#user_form').on('submit', function(event){
		event.preventDefault();
		var count_data = 0;
		$('.Question').each(function(){
			count_data = count_data + 1;
		});
		if(count_data > 0)
		{
			var form_data = $(this).serialize();
			$.ajax({
				url:"insert.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					$('#user_data').find("tr:gt(0)").remove();
					$('#action_alert').html('<p>Data Inserted Successfully</p>');
					$('#action_alert').dialog('open');
				}
			})
		}
		else
		{
			$('#action_alert').html('<p>Please Add atleast one data</p>');
			$('#action_alert').dialog('open');
		}
	});
	
});  
</script>