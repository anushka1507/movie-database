<?php      
    include('connect.php');

    
    $username = $_POST["username"];  
    $password = $_POST["password"];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from login where username = '$username'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
       
    

         
        //echo $row = ['userRole'];
        if(!isset($row)){
            echo "<script>alert('Login failed. No user exists with this username.');</script>";
            echo "<script>window.location.href='login.php';</script>";
            exit();
        
        }  
        else{  
            if($password == $row['password']){  
                if($row['role'] == "Visitor")
                {
                    echo "<script>alert('Login Success. Welcome $username.');</script>";     
                    echo "<script>window.location.href='visitor.php';</script>";   
                    exit();
                }
                else if ($row['role'] == "Reviewer"){

                    echo "<script>alert('Login Success. Welcome $username.');</script>";     
                    echo "<script>window.location.href='Reviewer.php';</script>";   
                    exit();
                }
                else if ($row['role'] == 'Admin'){
                    echo "<script>alert('Login Success. Welcome $username.');</script>";     
                    echo "<script>window.location.href='movie.php';</script>";   
                    exit();
                }
                    

            }  
            else{
                echo "Invalid Password";
                include("login.php");
            }
              
        }
             
?>  