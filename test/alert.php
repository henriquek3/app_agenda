<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 15/11/16
 * Time: 19:57
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<h1>Hello, world!</h1>

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="bs3/js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bs3/js/bootstrap.min.js"></script>

<script>
    $('#myAlert').on('close.bs.alert', function () {
        $().alert()
    })
</script>
</body>
</html>
