<?php 
    include "db.php";
    
    try{
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        echo "Connected </br>";

        $query  = "SELECT name, grade FROM Students GROUP BY name";
        $results = $db ->query($query); 
        $students = $results ->fetchAll(PDO::FETCH_ASSOC);
        $results ->closeCursor();

    } catch (PDOException $e){
        die("Something went wrong ". $e->getMessage());
    }
    include "top.php"
    
?>

        <form class="form-horizontal" action="add.php" method="post">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="grade" class="col-sm-2 control-label">Grade</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="grade" name="grade" placeholder="Enter Grade" required>
                </div>
            </div>
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <form class="form-horizontal" action="del.php" method="post">
            <div class="form-group">
                <label for="student" class="col-sm-2 control-label">Select A Student</label>
                <div class="col-sm-10">
                <select class="form-control" id="student" name="student">
                        <?php foreach($students as $student) :?>
                        <option Value="<?=$student['name']?>, <?= $student["grade"]?>"><?= $student['name'] ?> <?= $student["grade"] ?></option>
                        <?php endforeach ?>
                </select>
                </div>
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Delete Student</button>
                </div>
            </div>
<?php include "bottom.php" ?>