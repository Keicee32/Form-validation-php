<?php 

include 'form_action.php';

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
<body>
    <form action="" method="post">
    
    <section class="container grey-text">
        <h4 class="center">Contact Form</h4>
        <div class="red-text center"><?php echo $errors['checkForm']; ?></div>

            
            <input type="text" name="first_name" value="<?php echo htmlspecialchars($first_name);?>" placeholder="First Name">
            <div class="red-text"><?php echo $errors['first_name']; ?></div>

            <input type="text" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>" placeholder="Last Name">
            <div class="red-text"><?php echo $errors['last_name']; ?></div>

            <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="Email">
            <div class="red-text"><?php echo $errors['email']; ?></div>

            <label>Date of Birth: </label>
            <input type="date" name="dob" value="<?php echo htmlspecialchars($dob); ?>">
            <div class="red-text"><?php echo $errors['dob']; ?></div>
           
           <label> Favorite Color: </label> <br/>
           <input type="color" name="color" value="<?php echo htmlspecialchars($color)?>">
           <div class="red-text"><?php echo $errors['color']; ?></div>

           <label for="test">Gender: 
           <label for="test1">
           <input type="checkbox" name="gender[]" id="test1">
           <span>Female</span>
           </label>
           <label for="test2">
           <input type="checkbox" name="gender[]" id="test2">
           <span>Male</span>
           </label>
           <label for="test3">
           <input type="checkbox" name="gender[]" id="test3" >
           <span>Others</span>
           </label> 
           <div class="red-text"><?php echo $errors['gender']; ?></div>

           <label> Department: </label>
           <div class="input-field col s12">
           <select name="select" value="<?php echo htmlspecialchars($select)?>">
                <option value="" disabled selected>Choose your option</option>
                <option value="HR">HR</option>
                <option value="IT">IT</option>
                <option value="Design">Design</option>
                <option value="Management">Management</option>
           </select>
           </div>
           <div class="red-text"><?php echo $errors['select']; ?></div>

           <input type="text" name="password" value="<?php echo htmlspecialchars($password)?>" placeholder="Password">
           <div class="red-text"><?php echo $errors['password']; ?></div>

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>

    </section>
    
    </form>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="script.js"></script>

    <!-- This Function makes the select button in Materialize responsive -->
    <script>
        $(document).ready(function(){
            $('select').not('.disabled').formSelect();
        })
    </script>
    <script>
        $(document).ready(function(){
            $('checkbox').not('.disabled').formCheckBox();
        })
    </script>
    
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>