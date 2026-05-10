<h3>Contact Form</h3>
<form action="form.php" method="post">
    <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your name" required autocomplete="off">
    </div>

    <br>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" autocomplete="off" required>
    </div>
    <br>
<button type="submit">Submit Form</button>
</form>

<?php
// check server request method
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DATABASE = 'phpprojects';

    $con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);  
    if($con){
        echo "Connection successful <br>";

        $sql = "insert into `data` (username, email) values ('$username', '$email')";
        $queryexecute = mysqli_query($con, $sql);
        if($queryexecute){
            echo "Data inserted successfully";
        } else{
            die(mysqli_error($con));
        }
    }else{ 
        die(mysqli_error($con));
    }
    
}

?>