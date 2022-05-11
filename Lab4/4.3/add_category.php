<html><head><title>Category Administration</title></head>
<body style="width:100vh">
<div style="font-size:32px"><b>Category Administration</b></div>
<form action="admin.php" method="post">
<?php

$server = 'localhost';
$user = 'root';
$pass = 'phannguyen01';
$mydb = 'business_service';
$table_name = 'categories';
$connect = mysqli_connect($server, $user, $pass, $mydb);
if(!$connect) {
    die ("Cannot connect to $server using $user");
} else {
    print '<br>';
    $catid = $_POST['category_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $SQLcmd = "INSERT INTO $table_name (category_id, title, description) VALUES('$catid', '$title', '$description')";
    echo $SQLcmd;
    if(mysqli_query($connect, $SQLcmd)) {
        print "<div>Insert into $table_name was succesful!</div>";
    } else {
        print "<div>Insert into $table_name failed</div>";
    }
    mysqli_close($connect);
    print '<input type="submit" value="Back">';
}
?>
</form>
</body>
</html>