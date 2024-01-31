<?php
    include "koneksi.php";
    session_start();

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql=mysqli_query($conn,"SELECT * from user where username='$username' and password='$password'");

    $cek=mysqli_num_rows($sql);


    if($cek=1){
        while($data=mysqli_fetch_array($sql)){
            $_SESSION['userid']=$data['userid'];
            $_SESSION['namalengkap']=$data['namalengkap'];
        }
       ?>
            <script>
                window.location.href="home.php";
            </script>
       <?php
    }else{
        header("location:login.php");
    }


    
?>