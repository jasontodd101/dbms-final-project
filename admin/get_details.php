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
    $eid= $_POST['eid'];
	$sql = mysqli_query($connection,"SELECT * from issued_books where issued_books.student_id=$eid  ;");
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
      <th> <font face="Arial"> </font>Book Number</th> 
          <th> <font face="Arial">Book Name</font> </th>
          <th> <font face="Arial">Bookauthor</font> </th>

          <th> <font face="Arial">Date and Time</font> </th> 
           
      </tr>';


    while ($row = mysqli_fetch_array($sql)) {
        
$fname = $row['book_no'];
        $lname= $row['book_name'];
        $gender = $row['book_author'];
        $date=$row['issue_date'];
        

        echo '<tr> 
                 <td>'.$fname.'</td> 
                 <td>'.$lname.'</td> 
                 <td>'.$gender.'</td> 
                 <td>'.$date.'</td> 
                   
              </tr>';
    }
    

?>
</body>
</html>
