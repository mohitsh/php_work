<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
        //include 'header.inc.php';
        require 'conf.inc.php';
        
        //if(isset($_POST['submit'])){
        //    echo 'process1';
        //}
        //$redirect_page = "https://github.com/mohitsh";
        //$redirect = true;
        //if($redirect==true){
        //header('Location: '.$redirect_page);
        //}
        echo $ip_address;
        foreach($ip_blocked as $ip){
            echo $ip . "<br />";
            if($ip == $ip_address){
                die('this ip is blocked!');
            }
        }
        ?>
        <h1>welcome!</h1>
       
    </body>
</html>
