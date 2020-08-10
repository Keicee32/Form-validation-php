<?php session_start(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Welcome ::</title>
</head>
<body style="background: <?php echo $_SESSION['color'];?>">
<div class="container ">
    <div class="row">
        <div class="col s12 m4 white">
            <div class="card z-depth-0"> <!-- This is a materialize class for creating cards and the z-depth-0 removes box shadows -->
                <div class="card-content center"> <!-- This is a materialize class for creating cards -->
                    <i class="medium material-icons">account_circle</i><br/>
                    <p>First Name: <?php echo $_SESSION['first_name'];?>  </p> <br/>
                    <p>Last Name: <?php echo $_SESSION['last_name'];?> </p> <br/>
                    <p>Email: <?php echo $_SESSION['email'];?> </p> <br/>
                    <p>Gender: <?php echo $_SESSION['gender'];?> </p> <br/>
                    <p>Date of birth: <?php echo $_SESSION['dob'];?> </p> <br/>
                    <p>Favorite Color: <?php echo $_SESSION['color'];?> </p> <br/>
                    <p>Department: <?php echo $_SESSION['select'];?> </p> <br/>
                    <p><?php echo "Today is " . date("m-d-Y"); ?></p>                   
                </div>
                <div class="card-action right-align">
                    <a href="index.php">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>

<p><?php echo "Today is " . date("m-d-Y"); ?></p>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
</body>
</html>