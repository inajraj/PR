<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>My First PHP</title>
	<link rel="stylesheet" href="/css/sidemenu.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<script src="/js/Popper.js"></script>
	<script src="/js/tether.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
</head>

<div id='myModal' class='modal fade' role='dialog'>
<div class='modal-dialog'>
<!-- Modal content-->
<div class='modal-content'>
<div class='modal-header'>
<button type='button' class='close' data-dismiss='modal'>&times;</button>
<h4 class='modal-title' id='headerId' data-rowid='0'></h4>
 </div>
<div class='row mt-2'>
	<div class='col-sm-1'></div>
	<label for='selectMDType class='col-sm-3 col-form-label'>selectMDType</label>
	<div class='col-sm-5'>
		<select id='selectMDType' class='form-control'>
			<option disabled selected value=> -- select -- </option>
		</select>
	</div>
</div>
<div class='row mt-2'>
	<div class='col-sm-1'></div>
	<label for='inputValue' class='col-sm-3 col-form-label'>Value</label>
	<div class='col-sm-6'>
		<input type='text' class='form-control' id='inputValue' name='name'>
	</div>
</div>
<div class='row mt-2'>
	<div class='col-sm-1'></div>
	<label for='inputName' class='col-sm-3 col-form-label'>Driver1</label>
	<div class='col-sm-6'>
		<input type='text' class='form-control' id='inputName' name='name'>
	</div>
</div>
<div class='row mt-2'>
	<label for='inputDate' class='col-sm-2 col-form-label'>lblDate</label>
	<div class='col-sm-4'>
		<input type='text' class='form-control' id='inputDate' name='name'>
	</div>
	<label for='inputBN' class='col-sm-2 col-form-label'>lblBN</label>
	<div class='col-sm-4'>
		<input type='text' class='form-control' id='inputBN' name='name'>
	</div>
	
<div class='row mt-2'>

	<div class='col-sm-1'></div>

	<label for='txtDt' class='col-sm-3 col-form-label'>Name</label>

	<div class='col-sm-6'>

		<input type='date' class='form-control' id='txtDt' name='date'>

	</div>

</div>

</div>
</div>
</div>
