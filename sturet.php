
<html>
    
    <style>
        img{
            width: 100%;
            height: 250px;
        }
         table, th, td {
    border: 0.5px solid white;
             text-align: center;
             color: azure;
             font-family: monospace;
             font-size: 18;
            
             }
        h3{
            color: azure;
            font-size: 40;
            font-family: monospace;
        }
        .right{
            background-color: white;
            opacity: 0.7;
            width: 20%;
            height: 60%;
            color: black;
            font-family: monospace;
           float: right;
            font-size: 30;
            margin-top: -400px;
            margin-right: 50px;
            border-radius: 10px;
        }
        
        body {
            background-image: url("menu1.jpg") !important;
            background-size: cover;

        }

        button {
    margin-right: 80px;
    color: #f7f1ee;
    font-family: Comic Sans MS;
    padding: 4px 18px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    cursor: pointer;
    background-color: #e8925b73;
}
    </style>
   
    <body> 
    <a href="menu.html"><button> MENU </button></a>
<center><button onclick="myFunction()">PRINT</a></button></center> 
<center>	
    
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "cafe";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    echo "<table border='1'>
<h3>ORDER LIST</h3>

  <tr>
    <th>ORDER ID</th>
    <th>NAME OF THE CUSTOMER</th> 
    <th>EMAIL</th>
	<th>PHONE</th>
	<th>NO. OF TABLES</th>
	<th>No. OF ADULTS</th>
    <th>SPECIAL REQUIREMENTS</th> 


 </tr>";
$sql = "call vieworder()";
  
  //$sql = "select student.name as n,student.stid,exam.etype,course.cid,course.dtype,teacher.name from student,course,exam , teacher where course.cid=student.courseid and exam.eid=student.examid and teacher.tid=course.ttid";
if($result1 = mysqli_query($conn,$sql))
{
    if(mysqli_num_rows($result1)>0)
    {
         
        while($row = mysqli_fetch_assoc($result1))
        {	
    
        
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo"<td>".$row['name']."</td>"; 
echo"<td>".$row['email']."</td>";
echo"<td>".$row['phone']."</td>";
echo"<td>".$row['n_table']."</td>";
echo"<td>".$row['adults']."</td>";
echo"<td>".$row['specialrequirements']."</td>";


echo"</tr>";

        }
    }
}
    echo"</table>";
                           
    ?>
	</center>
	
	

<script>
function myFunction(){
    window.print();
}
</script>

    </body>
</html>

   