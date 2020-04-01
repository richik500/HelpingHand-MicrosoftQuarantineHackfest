<?php
$firstname= filter_input(INPUT_POST,'firstname');
$lastname= filter_input(INPUT_POST,'lastname');
$username= filter_input(INPUT_POST,'username');
$city= filter_input(INPUT_POST,'city');
$state= filter_input(INPUT_POST,'state');
$zip= filter_input(INPUT_POST,'username');
$address= filter_input(INPUT_POST,'username');
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="Volunteers";
$conn= new mysqli($host , $dbusername ,$dbpassword ,$dbname);
if (mysqli_connect_error())
{
    die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());

}
else 
{
    $sql="INSERT INTO account(firstname,lastname,username,city ,state,zip,address)
    values('$firstname',$lastname,$username,$city,$state,$zip,$address')" ;
    if($conn->query($sql))
    {
        echo "New record is registered succesfully"; 
    }
    else{
        echo "Error: ".$sql."<br>".$conn->error ;
    }
conn->close();
}
}
?>