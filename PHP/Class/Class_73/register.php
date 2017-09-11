<?php 
require_once 'autoload.php';
require_once "httpsonly.php";

$username = '';
$password = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!empty($_POST['username'])) {
        $username = $_POST['username'];
    }

    if(!empty($_POST['password'])) {
        $password = $_POST['password'];
        // should check for 8 chars here
    }

    if(!empty($username) && !empty($password)) {
        $db = Db::getDb();
        $query = "INSERT INTO users(user_name, password) VALUES(:username,:password)";
        $statement = $db->prepare($query);
        $statement->bindValue("username", $username);
        $statement->bindValue("password", password_hash($password, PASSWORD_DEFAULT));
        try {
            $statement->execute();
            http_response_code(302);
            header("Location: home.php");
            exit;
        } catch(PDOException $e){
            if($e->errorInfo[1] === 1062) {
                $errors[] = "Username already in user. Please choose another";
            } else {
                $errors[] = $e->getMessage();
            }
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
    <input class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Enter username" value="<?= $username ?>">
    <small id="usernameHelp" class="form-text text-muted">Choose a user name. This will be the name other users see you as</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?= $password ?>" minLength="8">
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button>
</form>

<?php include "bottom.php" ?>
    
