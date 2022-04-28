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

</body>
</html>