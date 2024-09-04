<?php
require('db.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $FacultyID = $_POST['FacultyID'];
    $fname =$_POST['fname']; 
    $mname =$_POST['mname'];
    $lname =$_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $bdate = $_POST['bdate'];
    $age = $_POST['age']

    $queryFaculty = "INSERT INTO `accounts` (facultyID, Fname, Lname, Midname, Ddate, age) VALUES
     ( '$FacultyID', '$fname', '$lname', '$mname', '$bdate', '$age')";
    
    $querylogin = "INSERT INTO `login` (regID, username, email, password) VALUES
     (?, '$username',  '$email', '$password') ";
    
    

    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #111827;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-image: linear-gradient(92.88deg, #455EB5 9.16%, #5643CC 43.89%, #673FD7 64.72%);
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        input[type="submit"]:hover {
        box-shadow: rgba(80, 63, 205, 0.5) 0 1px 30px;
        transition-duration: .1s;

        }

        
    </style>
</head>
<body>
    <?php 
         $length = 4; // Length of random bytes
         $randomBytes = random_bytes($length);
         $randomId = bin2hex($randomBytes);
         $upperCaseId = strtoupper($randomId);
        
    ?>
<form id="sign_up" action="" method="post">
    <h2>Sign up</h2>
   
        <label for="schoolID">Faculty ID</label>
        <input type="text" id="schoolID" name="schoolID" value="<?php echo htmlspecialchars($upperCaseId); ?>" required>
        <br>
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" required>
        <br>
        <label for="mname">Middle Name</label>
        <input type="text" id="mname" name="mname" required>
        <br>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" required>
        <br>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <br>
        <br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" name="submit" value="Submit">
        <div class="m-t-25 m-b--5 align-center">
        <a href="login.php">You already have a Account?</a>
        </div>
    </form>
</body>
</html>