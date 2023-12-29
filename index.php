<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $css = glob("css/*");
    foreach ($css as $css_file){
        echo <<<LINE
    <link rel="stylesheet" href="$css_file">
LINE;
    }
    ?>
    <title>Backgammon</title>
</head>
<body>
<div class="container_container">
    <div class="board_container">
        <?php
        require_once "classes/Board.php";
        use classes\Board;
        $board = new Board();
        $board->MakeBoardHtml();
        ?>
    </div>
    <div class="checker_container">
        <div class="point" id="p13">
            <div class="checker red" style="grid-area: pp3"></div>
        </div>
    </div>
</div>

</body>
</html>


