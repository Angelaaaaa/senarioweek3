<?PHP
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
        exit("error");
    }//Testing if any submit actions have been taken

    include('connect.php');
    $name = $_POST['name'];
    $passowrd = $_POST['password'];

    if ($name && $passowrd){//Username and password non-empty
             $sql = "select * from user where loginname = '$name' and password='$passowrd'";//Testing relevant sql for username and password
             $result = mysql_query($sql);//execute sql
             $rows=mysql_num_rows($result);//return a value
             if($rows){//0 - false, 1 - true
                    session_start();
                    $fetchid = "select id from user where loginname = '$name'";
                   
                    $idresult=mysql_query($fetchid);
                    $_SESSION['views'] = mysql_fetch_array($idresult)["id"];//
    
                   header("refresh:0;url=welcome.html");//if manage to get into 'welcome' page
                   exit;
             }
             else
             {
                echo "wrong username or password";
                echo "
                    <script>
                            setTimeout(function(){window.location.href='login.html';},1000);
                    </script>

                ";//Jump to Login page after 1s
             }
             

    }else{//if username or password has NULL
                echo "not complete form";
                echo "
                      <script>
                            setTimeout(function(){window.location.href='login.html';},1000);
                      </script>";

                        //Jump to Login page after 1s
    }

    mysql_close();//close DB
?>