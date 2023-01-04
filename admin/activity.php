<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$book_name = "";
	$author = "";
	$category = "";
	$book_no = "";
	$price = "";
	$sql = mysqli_query($connection,"SELECT * from activity ");
?>





<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<?php 



echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
      <th> <font face="Arial">bookname </font> </th> 
          <th> <font face="Arial">student id</font> </th> 
          <th> <font face="Arial">date and time</font> </th> 
           
      </tr>';


    while ($row = mysqli_fetch_array($sql)) {
        $lname= $row['student id'];
        $fname = $row['book name'];
        $gender = $row['date'];
        

        echo '<tr> 
                 <td>'.$fname.'</td> 
                 <td>'.$lname.'</td> 
                 <td>'.$gender.'</td> 
                   
              </tr>';
    }
    

?>
</body>
</html>
