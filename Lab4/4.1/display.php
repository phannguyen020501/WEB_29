<html><head><title>Search Results</title></head>
<body>
<?php
$server = 'localhost';
$user = 'root';
$pass = 'phannguyen01';
$mydb = 'mydatabase';
$table_name = 'Products';
$connect = mysqli_connect($server, $user, $pass, $mydb);
if(!$connect) {
    die ("Cannot connect to $server using $user");
} else {
    print '<div style="color:blue; font-size:24px">Display Data</div>';
    $SQLcmd = "SELECT * FROM $table_name";
    print "<div>The query is <i>$SQLcmd</i></div>";
    $result = mysqli_query($connect, $SQLcmd);
    print "<br>";
    print "<table border='1'>";
    print "<tr>
            <th>ProductID</th>
            <th>Product</th>
            <th>Cost</th>
            <th>Weight</th>
            <th>Count</th>
            </tr>";
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            print "<tr>
                    <td>".$row['ProductID']."</td>
                    <td>".$row['Product_desc']."</td>
                    <td>".$row['Cost']."</td>
                    <td>".$row['Weight']."</td>
                    <td>".$row['Numb']."</td>
                   </tr>";
        }
    }
    print "</table>";
}
?>
</body>
</html>