<?php
$host = 'sql210.epizy.com';
$user = 'epiz_33587601';
$pass = 'ba6FzpLUq4Qiq';
$database = 'epiz_33587601_dine2me';


    ($mycon = mysqli_connect($host, $user, $pass));
    (mysqli_select_db($mycon, $database));
        

    if(isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['password'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $password_hash = md5($password);
        $ipaddress = $_SERVER["REMOTE_ADDR"];

        if(!empty($_POST['username'])&&!empty($_POST['email'])&&!empty($_POST['phone'])&&!empty($_POST['password'])){
            $query = "SELECT `Email` FROM `users` WHERE `Email` = '$email'";
            if($query_run = mysqli_query($mycon, $query)){
                $num_rows = mysqli_num_rows($query_run);
                if($num_rows == 1){
                    echo  '<script>
                            window.alert("Email already exit!");
                        </script>';
                } else if ($num_rows == 0){
                    $query = "INSERT INTO `users` (`id`, `Username`, `Email`, `Mobile`, `Password`, `Ip address`)  VALUES (NULL, '$username', '$email', '$phone', '$password_hash', '$ipaddress')";
                    if($query_run = mysqli_query($mycon, $query)) {
                        header('Location: success.php');
                        echo '<script>
                                window.alert("Your form is submited");
                            </script>';
                    }
                }
            }

        }
        
    }
?>