<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
</head>
<body>
        <h1>Peys App</h1>
        <br>
        <form method="post">
            <label for="resize">Select Image Size: </label>
            <input type="range" name="resize" id="resize" step=10 min=10 value=60>
            <br>

            <label for="bgColor">Select Image Size: </label>
            <input type="color" name="bgColor" id="bgColor">
            <br>

            <button type="submit" name="process">Process</button>
            <br>
            <br>
            <?php
                $photoSize = 60 .'%';
                $borderColor = 'black';

                if(isset($_POST['process'])){
                    $photoSize = $_POST['resize'] . '%';
                    $borderColor = $_POST['bgColor'];
                }
            ?>
            <div class="wrapper" style ="max-width:
             30%;">
                <img src="img/profile.jpg" style= "border: 3px solid <?php echo $borderColor; ?>;  width: <?php echo $photoSize;?>; ">
            </div>
        </form> 
</body>
</html>