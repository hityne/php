<!DOCTYPE html>
<html>
<body>


<?php
echo "Hello World!";
?>
<br>
<!-- <?php phpinfo() ?> -->

<?php
$t=date("H");
if ($t<"20")
{
    echo "Have a good day!";
}
?>
<br>
<?php
$servername = "localhost";
$username = "sql_tk_pyabc_net";
$password = "6cT5kSkd24WePTPz";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";
?>

<?php
$servername = "localhost";
$username = "sql_tk_pyabc_net";
$password = "6cT5kSkd24WePTPz";
$dbname = "sql_tk_pyabc_net";
 
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
 
if (mysqli_query($conn, $sql)) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
mysqli_close($conn);
?>

</body>
</html>