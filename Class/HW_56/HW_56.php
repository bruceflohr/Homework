<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HW 56 PHP</title>
</head>
<body>
    <?php
    // 2nd Method
        $name = "Name ";
        $year = "Year";
        $p1 = "Donald Trump ";
        $y1 = "2016";

        $p2 = "Barack Obama ";
        $y2 = "2012";

        $p3 = "George Bush ";
        $y3 = "2008 ";
    ?>
         <Table class="table table table-striped table table-bordered table table-hover ">
                <thead>
                    <tr>
                        <th><?php echo $name; ?></th>
                        <th><?php echo $year; ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $p1; ?></td>
                        <td><?php echo $y1; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $p2; ?></td>
                        <td><?php echo $y2; ?></td>
                    </tr>
                     <tr>
                        <td><?php echo $p3; ?></td>
                        <td><?php echo $y3; ?></td>
                    </tr>
                </tbody>
            </Table>
<footer>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</footer>
</body>
</html>

