<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
        <title>PUNKCHOPS ART</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="src/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Titillium+Web&effect=anaglyph" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </head>
    <body>
    <img src="src/img/corner.png" class="corner"/>
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <img class="img-fluid mx-auto banner" src="src/img/banner.png" alt="Punkchops!">
            </div>

            <div class="row menu"> <!-- navbar 1 -->
                <div class="col-auto mr-auto font-effect-anaglyph ">
                    PORTFOLIO
                </div>
                <div class="col-auto font-effect-anaglyph">
                    INFO
                </div>
            </div>

            <div class="row submenu"> <!-- sub navbar -->
                <div class="col-sm-8">
                    <a href="#">ILLUSTRATION</a> -
                    <a href="#">CONCEPT ART</a> -
                    <a href="#">SKETCHBOOK</a>
                </div>


                <div class="col-sm-4" style="text-align: right;">
                    <a href="#">ABOUT</a> -
                    <a href="#">COMMISSIONS</a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-body"> <!-- main body, under navbar -->
        <?= $contenu ?>

    </div>


    </body>
</html>