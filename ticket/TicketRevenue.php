<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>My First PHP</title>

<link rel="stylesheet" href="/css/sidemenu.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="/js/Popper.js"></script>
<script src="/js/tether.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="../scripts/ticket-revenue-util.js"></script>

<script>
//window.alert = function() {
   // debugger;
//}
</script>
<br>
</head>
<body>

<div class="container">
  <div class="row">
    <?php include '../common/RightPanel.php';?>
    <div class="col-sm-9  ">
        <div class="page-header">
            <h2>Ticket Revenue Form</h2> 
        </div>
        <br>
        <?php include '../common/TripHeader.php' ?>
    <br>
    <br>



    <table class="table table-bordered table-hover table-sm " id="detailTable" >
        <thead>
        <tr>
            <th scope="col">Sel</th>
            <th scope="col">Boarding Point</th>
            <th scope="col">Ticket</th>
            <th scope="col">Rate</th>
            <th scope="col">Total</th>
            <th scope="col">Commission</th>
            <th scope="col">Grand Total</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>


    <div class="form-group row">
        <div class="offset-sm-2 col-sm-2">
            <input type="button" value="Add" name="add" id="btnAdd" class="btn btn-primary" data-toggle="modal" data-target="#myModal"/>
        </div>
        <div class="offset-sm-2 col-sm-2">
            <input type="button" value="Edit" id="btnEdit" class="btn btn-primary" data-toggle="modal" data-target="#myModal"/>
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
<?php include 'ticketEdit.php';?>
</div>
</div>



</body>
</html>