<?php 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <section class="main-content row">
            <div class="col-12">
                <form action="server.php" method="get">
                    <label for="paragraph" id="paragraph" class="form-label mt-3">Paragraph:</label>
                    <input type="text" class="form-control mb-3" name="paragraph">
                    <label for="badword" id="badword" class="form-label">Badword:</label>
                    <input type="text" class="form-control mb-3" name="badword">
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-danger">Pulisci</button>
                </form>
            </div>
        </section>
    </div>
</body>

</html>