<?php

if(isset($_POST) && isset($_POST['submit']) && isset($_POST['widgetname']) && !empty($_POST['widgetname'])){
    
    include(__DIR__.'/define.php');
    include(__DIR__.'/remove-directories-and-files.php');
    include(__DIR__.'/create.php');

    

    
    
    
}

?>

<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Site Origin Widget Maker</title>
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center" style="height:100vh">
            <div style="width:300px">
                <form action="" method="post">
                <div class="form-group">
                    <label for="">Enter Widget Name</label>
                    <input type="text" name="widgetname" class="form-control" required value="">
                </div>
                <div class="form-group">
                    <label for="">Enter Widget Description</label>
                    <input type="text" name="description" class="form-control" value="">
                </div>
                <div class="clearfix"></div>
                <button type="submit" name="submit" class="btn btn-primary float-right">Create</button>
                </form>
                </div>
        </div>
    </body>

</html>