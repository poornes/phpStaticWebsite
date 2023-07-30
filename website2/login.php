<?php 
$host = 'sql210.epizy.com';
$user = 'epiz_33587601';
$pass = 'ba6FzpLUq4Qiq';
$database = 'epiz_33587601_dine2me';


    ($mycon = mysqli_connect($host, $user, $pass));
    (mysqli_select_db($mycon, $database));

    if(isset($_POST['email'])&& isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = md5($password);

        if (!empty($email) && !empty($password)) {
            $query = "SELECT `id` FROM `users` WHERE `email`='$email' AND `password`='$password_hash'";
            if ($query_run = mysqli_query($mycon, $query)) {
                $num_rows = mysqli_num_rows($query_run);
                if ($num_rows == 0) {
                    echo "<script>
                            window.alert('Incorrect email or password')
                        </script>";
                } else if ($num_rows >= 1) {
                    $row = mysqli_fetch_row($query_run);
                    $id = $row[0];
                    $_SESSION['user_id'] = $id;
                    header('Location: success.php');
                }
            }
        } else {
            echo 'Please enter username and password!';
        }
    }
?>