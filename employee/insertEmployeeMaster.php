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

    //insert
$sql = "Insert into EmployeeMaster (EmpID,FirstName,MiddleName,LastName,
Initials,FullName,FatherName,SpouseName,DOB,CompanyID,Department,BusinessTitle,
JoiningDate,JobBand,MobileNo,AlternateContactNo,PAN,AADHAAR,PF_UAN,PF_No,PassportNo,
Active,ResignationDate,LeavingDate)  Values ('" . $empid . "','" . 
$results['FirstName'] . "','" . $results['MiddleName'] . "','" . $results['LastName'] . "','" . 
$results['Initials'] . "','" . $results['FullName'] . "','" . $results['FatherName'] . "','" . 
$results['SpouseName'] . "','" . $results['DOB'] . "','" . $results['CompanyID'] . "','" . 
$results['Department'] . "','" . $results['BusinessTitle'] . "','" . $results['JoiningDate'] . 
"','" . $results['JobBand'] . "','" . $results['MobileNo'] . "','" . 
$results['AlternateContactNo'] . "','" . $results['PAN'] . "','" . $results['AADHAAR'] . "','" . 
$results['PF_UAN'] . "','" . $results['PF_No'] . "','" . $results['PassportNo'] . "','" . 
$results['Active'] . "','" . $results['ResignationDate'] . "','" . $results['LeavingDate'] . "')";

$result = $conn->query($sql);
    
echo $sql;

//result = $conn->query($sql);

$conn->close();


?>