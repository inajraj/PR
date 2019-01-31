<?php

# Get JSON as a string
$json_str = file_get_contents('php://input');

//var_dump(json_decode($json));
$results = json_decode($json_str, true);


$rowid = (int)($results['rowid']);
$tripid = (int)($results['tripid']);
$direction = $results['direction'];


echo $tripid;

//echo $results['BP'] . " ". $results['ticket'] . " ". $results['rate'];

include '../Common/SqlConnection.php';
//select the row which has this date and busnumber if it is there...
$sql = "SELECT ID, direction, FromTo , Paid, ToPay, Coolie, unload, doordelivery  from luggagedetails where TripID = " . $tripid . " 
and Direction = '" .$direction . "' union select TripID, Direction , 'Total' as fromt , sum(Paid) as Paid, sum(Topay) as ToPay, 
sum(Coolie) as Coolie, sum(unload) as unload, sum(doordelivery) as doordelivery from luggagedetails 
where TripID = " . $tripid . " and Direction = '" .$direction . "' group by TripID, Direction";

//echo $sql;

$result = $conn->query($sql);

$count = 0;
$ExpenseType = "";
$total = 0;
$str = "";

if ($result->num_rows > 0) {
    // need to populate the entire page using the date and busnumber
    while($row = $result->fetch_assoc()) {

        $count += 1;
        if ($count == 1)
            $checked = "checked";
        else
            $checked = "";

        if ($row["FromTo"] != "Total")
            $str = $str . "<tr><td scope='row' style='text-align:center;width:5%'><input type='radio' name='radioGroup' id='r" . $count . "' data-rowid='" .$row["ID"] ."' /></td>";
        else {
            $str = $str . "<tr><td scope='row' style='text-align:center;width:5%'></td>";
            //also we need a grandtotal row which will appended in the end
            $gt = $row["Paid"] + $row["ToPay"] + $row["Coolie"] + $row["unload"] +  $row["doordelivery"] ;
            $gtstr = "<tr><td style='width: 28%'></td><td style='width: 13%'></td><td style='width: 33%' colspan=4>Grand Total</td>
            <td style='width: 24%'>" . $gt . "</td></tr>";
                
        }

        $str = $str . "<td style='width: 28%'>" . $row["FromTo"] . "</td><td style='width: 13%'>" . $row["Paid"] . "</td>
                <td style='width: 13%'>" . $row["ToPay"] . "</td><td style='width: 13%'>" . $row["Coolie"] . "</td>
                <td style='width: 13%'>" . $row["unload"] . "</td><td style='width: 14%'>" . $row["doordelivery"] . "</td></tr>";
    
    }
    
    //need to add the last total row
    echo $str . $gtstr;
}
else
        echo 'nothing';

$conn->close();

function formSubTitleRow($ExpenseType)
{
    return "<tr><th scope='row' colspan='3'>" .$ExpenseType . "</th> </tr>";
}



?>