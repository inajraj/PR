<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>My First PHP</title>

<link rel="stylesheet" href="/css/sidemenu.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="/js/Popper.js"></script>
<script src="/js/tether.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="../scripts/luggage-util.js"></script>

<script>
//window.alert = function() {
   // debugger;
//}
</script>

<style>
.table-fixed tbody {
    height: 250px;
    overflow-y: auto;
    width: 100%;
}
.table-fixed thead,
.table-fixed tbody,
.table-fixed tr,
.table-fixed td,
.table-fixed th {
    display: block;
}
.table-fixed tr:after {
    content: "";
    display: block;
    visibility: hidden;
    clear: both;
}
.table-fixed tbody td,
.table-fixed thead > tr > th {
    float: left;
}
.table > thead > tr > th,
.table > thead > tr > td {
    font-size: .9em;
    font-weight: 400;
    border-bottom: 0;
    letter-spacing: 1px;
    vertical-align: top;
    padding: 6px;
    background: #51596a;
    text-transform: uppercase;
    color: #ffffff;
}
.table > tbody > tr > td {
    font-size: 1.0em;
    font-weight: 400;
    border-bottom: 0;
    letter-spacing: 1px;
    vertical-align: top;
    padding: 5px;
   
}
</style>
</head>
<body>
<br>
<div class="container">
  <div class="row">
    <?php include '../Common/RightPanel.php';?>
    <div class="col-sm-9  ">
        <div class="page-header">
            <h2>Luggage Collection Details</h2> 
          </div>
        
        <form role="form" method="post" >
        <br>
        <?php include '../Common/TripHeader.php'; ?>
        
   <br>
   <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
	    <a class="nav-item nav-link active" id="directionUP" data-toggle="tab" href="#" role="tab">UP</a>
		<a class="nav-item nav-link" id="directionDown" data-toggle="tab" href="#" role="tab" ">Down</a>
	</div>

    <table class="table table-bordered table-hover table-fixed " id="luggageTable" >
        <thead>
        <tr>
            <th scope="col" style="width: 5%">Sel</th>
            <th scope="col" style="width: 28%">From-To</th>
            <th scope="col" style="width: 13%">Paid</th>
            <th scope="col" style="width: 13%">ToPay</th>
            <th scope="col" style="width: 13%">Cooly</th>
            <th scope="col" style="width: 13%">Un-load</th>
            <th scope="col" style="width: 14%">DoorDelivery</th>
           
         
        </tr>
        </thead>
        <tbody>
      
        </tbody>
    </table>


    <div class="form-group row">
        <div class="offset-sm-2 col-sm-2">
            <input type="button" value="Add" name="add" id="btnAdd" class="btn btn-primary"  data-toggle="modal" data-target="#myModal"/>
        </div>
        <div class="offset-sm-2 col-sm-2">
            <input type="button" value="Edit" id="btnEdit" class="btn btn-primary"  data-toggle="modal" data-target="#myModal" />
        </div>
        <div class="offset-sm-2 col-sm-2">
            <input type="button" value="Delete" name="delete" class="btn btn-primary" id="btnDelete"/>
        </div>
    </div>

    
    </form>
    </div>
    </div>
  </div></div>

  <!-- Trigger the modal with a button -->
<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
<?php 
   
    include 'LuggageEdit.php';
?>
</div>
</div>



</body>
</html>