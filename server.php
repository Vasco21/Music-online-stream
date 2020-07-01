<?php 


    $username = "";
    $email = "";
    $errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

//if the register button is clicked
if (isset($_POST['register']))
{
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

    //ensure that form field are properly
    if (empty($username))
    {
        array_push($errors, "Username is required"); 
    }
    if (empty($email))
    {
        array_push($errors, "Email is required"); 
    }
    if (empty($password_1))
    {
        array_push($errors, "Password is required"); 
    }
    if ($password_1 != $password_2){
        array_push($errors, "The two password do not match");
    }
    // if there is no errors, save to user to database
    if (count($errors) == 0)
    {
        $password = md5($password_1);//encrypt password before storing in database(security)
        $sql = "INSERT INTO users (username, email, password) 
                VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: indexx.php');// redirect home page
    }
}

//log user in from page
if (isset($_POST['login']))
{
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    //ensure that from fields are filled properly
    if (empty($username))
    {
        array_push($errors, "Username is required");
    }
    if (empty($password))
    {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0)
    {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username ='$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 0)
        {
            // log user in 
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: indexx.php');// redirect home page
        }
        else
        {
            array_push($errors, "wrong username/password combination");
        }
    }
}



//logout
if (isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

?>
