<?php ?>
<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Library</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="fonts/DesertQueen.ttf">
        <link rel="stylesheet" href="fonts/glyphicons-halflings-regular.woff">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/JavaScript" src="js/app.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row main">
                <form class="form-inline addingForm" action="api/books.php" method="POST">
                    <h3>Add book:</h3>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="author">Author:</label>
                        <input type="text" class="form-control" name="author">
                    </div>
                    <div class="form-group">
                        <label for="desc">Description:</label>
                        <input type="text" class="form-control" name="desc">
                    </div>
                    <button type="submit" class="btn btn-success" id="addBook">Add <span class="glyphicon glyphicon-ok"></span></button>
                </form>
            </div>
            <hr>
            <div class="row">
                <div id="bookList" class="panel-group main"></div>
            </div>
        </div>
    </body>
</html>