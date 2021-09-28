<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  h2{
    font-size: 35px;
    text-align: center;
    font-weight: 600;
	text-align: center;
	background-color: #ffa500;
	color: #fff;
	padding: 13px 0px;
	margin-top:
   
  }
table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
  border:2px solid #fff;
  min-width: 150px;
}
th{
  background-color: 	#946000;
  color: #fff;
  font-size: 20px;

}
tr a{
        display: inline-block;
    background:  #FF0000;
    color: #fff;
    font-size: 15px;
    padding: 3px 15px;
    margin-top: 20;
    font-weight: 400;
    border-radius: 2px;
    border: none;
    transition: all 0.3s ease;
    text-decoration: none;
    }
    tr a:hover{
        background:  none;  
        border: 1px solid #FF0000; 
        color: #FF0000; 
    }
table{

}
tr:nth-child(even){background-color: #f2f2f2;}
</style>
</head>
<body>

<h2>Offspring Foundation</h2>


<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Amount</th>
      <th>Date</th>
      <th>Action</th>
     
    </tr>
    <?php

$servername="localhost";
$username="root";
$password="";
$database="local_db";
$conn=mysqli_connect($servername,$username, $password, $database);
error_reporting(0);

$query="select* from ngocontact";

$data = mysqli_query($conn, $query);
$total =  mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);

//echo $total;
if($total>0)
{

while($result= mysqli_fetch_assoc($data)){


    echo"
    <tr>
    <td>".$result["name"]."</td>
    <td>".$result["email"]."</td>
    <td>".$result["phone"]."</td>
    <td>".$result["message"]."</td>
    <td>".$result["date"]."</td>
    <td><a href='delete.php?id=$result[id]'>Delete</td>
    </tr>";
}
}
else{
    echo "table has no records";
}
?>
     </table>
</div>

</body>
</html>
