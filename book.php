

<?php
$servername="localhost";
$username="root";
$password="sjain@2411";
$database="testdb";
$conn = new mysqli("localhost","root","sjain@2411","testdb");
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}





// Get form values
    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $datetime = $_POST['datetime'] ;
    $people = $_POST['people'] ;
    $message = $_POST['message'] ;


    $sql="INSERT INTO customers(name,email,datetime,people,message)
        VALUES('$name','$email','$datetime','$people','$message')";
    if($conn->query($sql)===TRUE){
        echo"new record inserted successfully";
    
      

  
    }else{
        echo "Error: ". $sql . "<br>". $conn->error;
    }
    $conn->close();

    

?>


