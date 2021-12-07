


<?php




















header( 'Content-Type:text/html;charset=utf-8 '); 
$servername = "localhost";
$username = "root";
$password = "hmk123";
$dbname = "test";
 


$arr = array('a'=>1,'b'=>2);

exit(time());
 

return;




$con=mysqli_connect("localhost",$username,$password,$dbname);
// 检测连接
if (mysqli_connect_errno())
{
        echo "连接失败: " . mysqli_connect_error();
}

mysqli_query($con,"UPDATE myguests SET email='9178@qq.com',lastname='hmk'
WHERE LastName='Doe'");

mysqli_close($con);







// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 







//MySQL 读取数据
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();





return;

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
 
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();

return;


// 使用 sql 创建数据表
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";
     
    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "创建数据表错误: " . $conn->error;
    }
     
    $conn->close();
    ?>