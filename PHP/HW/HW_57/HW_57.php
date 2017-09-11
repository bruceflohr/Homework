    <?php
        $pres1 = [
                            "header" => [
                                "Name",
                                "Years in Office"
                            ],
                            "djt" => [
                                "Donald J Trump ",
                                "2016 - 2020"
                            ],
                            "bho" =>[
                                "Barack Obama ",
                                "2008 - 2016"
                            ],
                            "gwb" =>[
                                "George W Bush ",
                                "2000 - 2008"
                            ]
        ]; 
        $pres = [
                            "header" => [
                                "Name" => "Name",
                                "Years" => "Years in Office",
                                "Age" => "Age"
                            ],
                            "djt" => [
                                "Name" => "Donald J Trump ",
                                "Years" => "2016 - 2020",
                                71
                            ],
                            "bho" =>[
                                "Name" => "Barack Obama ",
                                "Years" => "2008 - 2016",
                                55
                            ],
                            "gwb" =>[
                                "Name" => "George W Bush ",
                                "Years" => "2000 - 2008",
                                70
                            ]
        ]; 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HW 56 PHP</title>
</head>
 <body>
        <div class="container">
                    <?php
                        echo '<table class="table table table-striped table table-bordered table table-hover">';
                        foreach( $pres1 as $pres1 )
                        {
                            echo '<tr>';
                            foreach( $pres1 as $key )
                            {
                                echo '<td>'.$key.'</td>';
                            }
                            echo '</tr>';
                        }
                        echo '</table>';

                        echo '<table class="table table table-striped table table-bordered table table-hover">';
                        #echo '<tr><th>Name</th><th>Years in Office</th><th>Age</th></tr>';
                        foreach( $pres as $pres )
                        {
                            echo '<tr>';
                            foreach( $pres as $key )
                            {
                                echo '<td>'.$key.'</td>';
                            }
                            echo '</tr>';
                        }
                        echo '</table>';
                    ?>
        </div>
        <footer>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        </footer>
</body>
</html>

