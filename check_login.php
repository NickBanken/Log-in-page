<?php session_start();
require_once'connect.php'; ?>


<?php 
//incase of an error, provides info about it.
ini_set('error_reporting', 'E_ALL');
error_reporting(E_ALL);

try {
if (isset($_POST["login"])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        $message = 'All are required';
    }   
    else
    {
        $username = $_POST["username"];
        $password = $hashedpass;

        $query = [
            'username' => $_POST["username"],
            'password' => sha1($_POST["password"])
        ];
        
        $sql = "SELECT * FROM user WHERE username = :username AND password=:password";
        $sqlExec = $handler->prepare($sql);
        $sqlExec->execute($query);

        $count = $sqlExec->fetch(PDO::FETCH_ASSOC);
        if($count > 0)
        {
            $_SESSION['username'] = $count['username'];
            $_SESSION['password'] = $count['password'];
            header('location:hiking/index.php');
        }
        else{
            $message = 'wrong Data';
        } 
    } 
}
}
catch(Exception $e){
    echo 'Exception -> ';
    var_dump($e->getMessage());
}
?>


