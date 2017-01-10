<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>profile</title>
    </head>
    <body>
        <h1>profile</h1>

    	<?PHP
        header("Content-Type: text/html; charset=utf8");
      	session_start();
    	$id =$_SESSION['views'];
        include('connect.php');
        $sql = "select * from user where id = $id";
        $result = mysql_query($sql);//执行sql
        $array = mysql_fetch_array($result);//
        $username = $array["username"];
        $iconURL = $array["iconURL"];
        $color = $array["color"];
        $pageURL = $array["pageURL"];
        $snippet = $array["snippet"];


	
    // $_SESSION['views'] = mysql_fetch_array($idresult)["id"];//session = 7
    
 	echo "<form action='profile.php' method='post'>";
 	echo "<p>username:<input type='text' name='username' value = '$username'></p>";
 	echo "<p>iconURL <input type='text' name='password' value = '$iconURL'></p>";   
 	echo "<p>color <input type='text' name='name' value = '$color'></p>";
 	echo "<p>pageURL:<input type='text' name='name' value = '$pageURL'></p>";
 	echo "<p>snippet:<input type='text' name='name' value = '$snippet'></p>";
 	echo "<p><input type='submit' name='submit' value='registration'></p>";
?>
    </body>
</html>