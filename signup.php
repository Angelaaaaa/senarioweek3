<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("error");
    }//if any submit actions
    $name=$_POST['name'];
    $password=$_POST['password'];

    include('connect.php');//connect to DB
  
    $q="insert into user(id,loginname,password,username,iconURL,pageURL,color,snippet) values (null,'$name','$password','','','','','')";//insert sql into DB 
    $result=mysql_query($q,$con);//execute sql
    
    if (!$result){
        die('Error: ' . mpysql_error());//if failed
    }else{
        // echo "registration successful";//
        header("refresh:0;url=login.html");
         echo "<script type=\"text/javascript\">".
        "alert('sign up successfully');".
        "</script>";
    }

    

    mysql_close($con);//close

?>