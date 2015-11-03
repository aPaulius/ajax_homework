<?php

    /* AJAX check  */
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $results = '
            <ul class="list-group">
                <li class="list-group-item">
                    <h4>Vardas:</h4>
                    <p>' . $_POST['firstName'] . '</p>
                </li>
                <li class="list-group-item">
                    <h4>Pavardė:</h4>
                    <p>' . $_POST['lastName'] . '</p>
                </li>
            </ul>';

        echo $results;

        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTML, CSS, JavaScript Homework</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <form action="/" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="firstName" class="col-sm-2 control-label">Vardas</label>
            <div class="col-sm-5">
                <input type="text" name="firstName" class="form-control" id="firstName">
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-2 control-label">Pavardė</label>
            <div class="col-sm-5">
                <input type="text"  name="lastName" class="form-control" id="lastName">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Tęsti</button>
            </div>
        </div>
    </form>

    <div id="result"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script src="foo.js"></script>
</body>
</html>