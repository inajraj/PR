<?php 

# Get JSON as a string
$json_str = file_get_contents('php://input');

//var_dump(json_decode($json));
$results = json_decode($json_str, true);

include '../common/SqlConnection.php';

//get the new emp id max + 1

$sql = "select max(EmpID)+1 as EmpID from EmployeeMaster";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

$empid = $row['EmpID'];
 
$sql = " Update EmployeeMaster SET EmpID = '" . $results['EmpID'] . "',FirstName = '" 
. $results['FirstName'] . "',MiddleName = '" . $results['MiddleName'] . "',LastName = '" 
. $results['LastName'] . "',Initials = '" . $results['Initials'] . "',FullName = '" 
. $results['FullName'] . "',FatherName = '" . $results['FatherName'] 
. "',SpouseName = '" . $results['SpouseName'] . "',DOB = '" . $results['DOB'] 
. "',CompanyID = '" . $results['CompanyID'] . "',Department = '" 
. $results['Department'] . "',BusinessTitle = '" . $results['BusinessTitle'] 
. "',JoiningDate = '" . $results['JoiningDate'] . "',JobBand = '" 
. $results['JobBand'] . "',MobileNo = '" . $results['MobileNo'] 
. "',AlternateContactNo = '" 
. $results['AlternateContactNo'] . "',PAN = '" . $results['PAN'] . "',AADHAAR = '" 
. $results['AADHAAR'] . "',PF_UAN = '" . $results['PF_UAN'] . "',PF_No = '" 
. $results['PF_No'] . "',PassportNo = '" . $results['PassportNo'] 
. "',Active = '" . $results['Active'] . "',ResignationDate = '" 
. $results['ResignationDate'] . "',LeavingDate = '" . $results['LeavingDate'] 
. "' Where EmpID = '" . $results['EmpID'] . "'";

$result = $conn->query($sql);
    
echo $sql;

//result = $conn->query($sql);

$conn->close();


?>