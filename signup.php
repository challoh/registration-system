<?php include "header.php";
include "config.php";
//declare variables thet will satore the form data

$username =$email=$password='';

//use $_POSTvariable to grab the data
if (isset($_POST['btnsubmit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];


    $sql = "INSERT INTO `users`(`id`, `username`, `email`, `password`) VALUES ( NULL ,'$username','$email','$password')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}

//save data into the data base






?>

<div class="container">
    <div class="row">
        <div class="col col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" METHOD="post">
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" name="username" placeholder="Enter name"class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder=" Enter email"class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">confirm password</label>
                    <input type="password" name="password1" placeholder="Enter password"class="form-control"required>
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" name="password2" placeholder="Enter password" class="form-control" required>
                </div>
                <input type="submit" name="btnsubmit" value="send " >
            </form>
        </div>
    </div>

</div>

    <div class="col col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>


<?php include "footer.php"?>