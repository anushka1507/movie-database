<?php  error_reporting (E_ALL ^ E_NOTICE);    
    

    
    $username = $_POST["username"];  
    $password = $_POST["password"];  
    $role=$_POST["role"];
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $role = stripcslashes($role); 
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password); 
        $role = mysqli_real_escape_string($conn, $role); 
       
        
  	// Database connection
	$conn = new mysqli('localhost','root','','movman');
    include('connect.php');
	
		$stmt = $conn->prepare("insert into login(username, password,role) values(?, ?, ?)");
		$stmt->bind_param("sss", $username, $password, $role);
		$execval = $stmt->execute();
            $stmt->store_result();
		echo $execval;
		echo "Registration successfully...";
        echo "<script>alert('Registration Success. Welcome $username.');</script>";     
        echo "<script>window.location.href='movie.php';</script>"; 
       
		$stmt->close();
		$conn->close();
	
?>
        
        }  