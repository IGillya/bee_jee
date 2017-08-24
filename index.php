<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




    <!--tablesroter -->
    <script src="js/jquery_tablesorter.js"> </script>
    <script src="js/jquery.tablesorter.widgets.js"></script>
    <script>
        $(function(){
            $("#myTable").tablesorter();
        });
    </script>

    <title>Document</title>
</head>
<body>
<?php include ("functions.php"); ?>
<div class="container">
    <div  class="col-md-8" >

        <div id="data" class="row" style="display: none;">
            <span id="hide" class="glyphicon glyphicon-remove btn-sm btn-danger pull-right"></span>
        <form action="/job/index.php" method="post" enctype="multipart/form-data">
            <label for="user_name">User name</label>
            <input type="text" class="form-control" name="user_name">

            <label for="mail">E-mail</label>
            <input type="text" class="form-control" name="mail">

            <label for="text">Text</label>
            <textarea name="text" cols="30" rows="10" class="form-control"></textarea>

            Select image to upload:
            <input type="file" name="file" >
            <input type="submit" name="submit" class="btn btn-success">

        </form>

        </div>
        <button class="glyphicon glyphicon-menu-down btn btn-info pull-right" id="show">Leave Message</button>
    </div>




</div>



<script>
    $(document).ready(function(){
        $("#show").click(function(){
            $("#data").show();
        });
        $("#hide").click(function(){
            $("#data").hide();
        });
    });
</script>





</body>
</html>