<?php 
require_once 'autoload.php';
require_once "httpsonly.php";
session_start();

$username = '';
$password = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!empty($_POST['username'])) {
        $username = $_POST['username'];
    }

    if(!empty($_POST['password'])) {
        $password = $_POST['password'];
    }

    if(!empty($username) && !empty($password)) {
        $db = Db::getDb();
        $query = "SELECT password FROM users WHERE user_name = :username";
        $statement = $db->prepare($query);
        $statement->bindValue("username", $username);
    
        try {
            $statement->execute();
            $hash = $statement->fetch(PDO::FETCH_COLUMN);

            if(password_verify($password, $hash)) {
                $_SESSION['username'] = $username;
               
                if(!empty($_SESSION['returnTo'])) {
                    $url = $_SESSION['returnTo'];
                    unset($_SESSION['returnTo']);
                } else {
                    $url = "home.php";
                }
                http_response_code(302);
                header("Location: $url");
                exit;
            }
            $errors[] = "Username and password did not match our records. Please try again";
        } catch(PDOException $e){
            $errors[] = $e->getMessage();
        }
    } else {
        $errors[] = "Username and password are required";
    }
}

include "top.php";

if(!empty($errors)) : ?>
    <div class="alert alert-danger">
        <ul>
        <?php foreach($errors as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
        </ul>
    </div>
<?php endif
?>

<form method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input class="form-control" id="username" name="username" placeholder="Enter username" value="<?= $username ?>">
</div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?= $password ?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>
<span>Not already a user? <a href="register.php" class="btn btn-secondary">Register</a></span>

<?php include "bottom.php" ?>
    
