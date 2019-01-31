<?php 


# Get JSON as a string
$json_str = file_get_contents('php://input');

//var_dump(json_decode($json));
$results = json_decode($json_str, true);



include '../Common/SqlConnection.php';

$rowid = (int)($results['rowid']);
$tripid = (int)($results['tripid']);
$action = $results['action'];
$direction = $results['direction'];
$FromTo = $results['FromTo'];
$paid = $results['paid'];
$ToPay = $results['Topay'];
$cooly = $results['coolie'];
$unload = $results['unload'] ;
$doordelivery = $results['doordelivery'] ;

//based on the expType

//if rowid  0 then we meed to insert a new rocord
if ($rowid > 0)
    if ($action == "D") //delete
        $sql = "DELETE FROM luggagedetails WHERE ID = " . $rowid ;
    else
        //update
        $sql = "UPDATE luggagedetails SET  FromTo = '" . $FromTo. "', Paid =  " . $paid . ", Topay = " . $ToPay . ", Coolie = " . $cooly .
            ", unload = " . $unload . ", doordelivery = " . $doordelivery . " WHERE ID = " . $rowid  ;
else 
    //insert
    $sql = "INSERT INTO luggagedetails(`TripID`, `Direction`, `FromTo`, `Paid`, `ToPay`, `Coolie`, `Unload`, `DoorDelivery`)
     VALUES ($tripid,'" .$direction . "','" . $FromTo . "'," . $paid . "," .$ToPay . "," . $cooly . "," .$unload . "," .$doordelivery . ")";


 echo $sql;

 $result = $conn->query($sql);

 
    
//echo $sql;

$conn->close();

include 'fetchLuggageDetails.php';

?>