<?php 
$host = 'sql210.epizy.com';
$user = 'epiz_33587601';
$pass = 'ba6FzpLUq4Qiq';
$database = 'epiz_33587601_dine2me';



    ($mycon = mysqli_connect($host, $user, $pass));
    (mysqli_select_db($mycon, $database));

    if(isset($_POST['restaurant']) && isset($_POST['userName']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['location'])){
        $restaurant = $_POST['restaurant'];
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $location = $_POST['location'];
    }
    if (!empty($restaurant) && !empty($userName) && !empty($email) && !empty($phone) && !empty($location)) {

            $query = "SELECT `Email` FROM `partner` WHERE `Email` = '$email' ";
            if ($query_run = mysqli_query($mycon, $query)) {
                $num_rows = mysqli_num_rows($query_run);
                if ($num_rows == 1) {
                    echo "<script>
                            window.alert('Your form is already submited')
                        </script>";
                } else if ($num_rows == 0) {
                    $query = "INSERT INTO `partner` (`ID`, `Restaurant name`, `userName`, `email`, `mobile`, `location`) VALUES(NULL,'$restaurant' ,'$userName', '$email', '$phone', '$location')";
                    if($query_run = mysqli_query($mycon, $query)){
                        header('Location: index.php');
                        echo "<script>
                            window.alert('We will reach you soon')
                        </script>";
                    }else{
                        echo 'Something went wrong check and fill again!';
                    }
                }             
            }
    }
?>