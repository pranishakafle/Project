<!DOCTYPE html>
<html lang="en">
<head>

<style>

    .boxcontainer {
       
        
        border-radius: 10px;
    
        border-radius: 54px;
background: #e0e0e0;
box-shadow:  18px -18px 33px #747474,
             /* -18px 18px 33px #ffffff; */
    }


.btn {
 padding: 1.1em 2em;
 background: none;
 border: 2px solid #fff;
 font-size: 15px;
 color: #131313;
 cursor: pointer;
 position: relative;
 overflow: hidden;
 transition: all 0.3s;
 border-radius: 12px;
 background-color: #ecd448;
 font-weight: bolder;
 box-shadow: 0 2px 0 2px #000;
}

.btn:before {
 content: "";
 position: absolute;
 width: 100px;
 height: 120%;
 background-color: #ff6700;
 top: 50%;
 transform: skewX(30deg) translate(-150%, -50%);
 transition: all 0.5s;
}

.btn:hover {
 background-color: #4cc9f0;
 color: #fff;
 box-shadow: 0 2px 0 2px #0d3b66;
}

.btn:hover::before {
 transform: skewX(30deg) translate(150%, -50%);
 transition-delay: 0.1s;
}

.btn:active {
 transform: scale(0.9);
}
   .text {
    /* position: absolute; */
    /* top: 50%; 
    right: 50%; */
    /* transform: translate(50%,-50%); */
    text-transform: uppercase;
    font-family: verdana;
    font-size: 35px;
    font-weight: 700;
    color: orange;
    text-shadow: 1px 1px 1px #919191,
}

.radiregister{
border-radius:10px;
background-color:teal;
}
h2{
    font-family: 'Courier New', Courier, monospace;
}

</style>


</head>
<body >
<body >
    <div class="text-center">
<h3 class='text-center text-info m-10 text-w-2 mt-5'><span class="text  text-center">Student Management</span></h3>
      <!-- <h3 class="text-center">student management</h3> -->
      <p class="text-center text-light small_text">For student management</p>
    <div class="container  ">
        <div class='row'>
            <div class='col-lg-7 col-md-8 col-11 m-auto boxcontainer'>
        <h2 class="text-center mb-5">User Registration</h2>
        <div class="row d-flex justify-content-center align-item-center">
           
            <div class="col-lg-6  col-xl-4 text-center">
                <form action="login.php" method="POST">
                    <div class="form-outline mb-4"><label for="username" class="form-label">
                            username </label>
                        <input type='text' id='username' name='name' placeholder='Enter  your username' require='required' class='form-control'>
                        </label>
                    </div>
                    <div class="form-outline mb-4"><label for="email" class="form-label">
                            Email </label>
                        <input type='text' id='email' name='email' placeholder='Enter  your email' require='required' class='form-control'>
                        </label>
                    </div>
                    <div class="form-outline mb-4"><label for="password" class="form-label">
                            Password </label>
                        <input type='password' id='password' name='password' placeholder='Enter  New password' require='required' class='form-control'>
                        </label>
                    </div>
                    <div class="form-outline mb-4"><label for="confirm_password" class="form-label">
                            Confirm password </label>
                        <input type='password' id='confirm_password' name='repassword' placeholder='Enter  confirm password' require='required' class='form-control'>
                        </label>
                    </div>
                    <div>
                        <input type="submit" class=" text-dark py-2 px-3 border-0 radiregister" name="register" value="Register"><on click></on>
                        <p class='small' > If you have already account ? <a href='login.php'>Login</a></p>
                        
                    </div>
                </form>

            </div>
        </div>
                                          
    </div>
</body>

</html>
<!-- php code for user register -->
<?php
    $errname=$erremail=$errpassword=$errrepassword='';
    $name=$email=$password=$repassword='';
    if(isset($_POST['register'])){
        $name=$_POST['name'];
       
        $email=$_POST['email'];
        $password=$_POST['password'];
       
        $repassword=$_POST['repassword'];
       
        if(empty($name)){
            $errname="Empty Field";

        } 
        else if(empty($email)){
            $erremail="Empty Field"."<br>";
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $erremail="email is not in proper format". "<br>";
            }
        
        else if(empty($password)){
          $errpassword="Empty Field"."<br>";
        }
        else  if(empty($repassword)){
             $errrepassword="Empty Field"."<br>";
        }
        elseif($password!=$repassword){
            $errrepassword="password doesn't match"."<br>";
        }
      
        else{
          $conn=mysqli_connect('localhost','root','','schoolproject');
          // check connection
          if(!$conn){
              die("Connection failed: ". mysqli_connect_errno() );
          }
          $sql="INSERT INTO user_table(user_name,user_email,user_password)
          VALUES('$name','$email','$password')";
          if(mysqli_query($conn,$sql)){
              header('include:login.php');

              echo "alert 'Student Registered.'";
          }
          else{
              echo "Error:". $sql. "<br>". mysqli_error($conn);
          }

          }
        }
        
    ?>
   