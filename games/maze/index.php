<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/util/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/util/css/maze.css">
    <title>Tys+Wbh</title>
</head>
<body>
    <?php
        include $_SERVER['DOCUMENT_ROOT']."/util/module/header.html";
    ?>

    <div class="game_board" id="maze_board">
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_1"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_2"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_3"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_4"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_5"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_6"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_7"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_8"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_9"></canvas> <br>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_10"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_11"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_12"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_13"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_14"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_15"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_16"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_17"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_18"></canvas> <br>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_19"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_20"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_21"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_22"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_23"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_24"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_25"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_26"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_27"></canvas> <br>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_28"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_29"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_30"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_31"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_32"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_33"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_34"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_35"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_36"></canvas> <br>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_37"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_38"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_39"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_40"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_41"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_42"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_43"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_44"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_45"></canvas> <br>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_46"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_47"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_48"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_49"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_50"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_51"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_52"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_53"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_54"></canvas> <br>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_55"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_56"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_57"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_58"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_59"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_60"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_61"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_62"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_63"></canvas> <br>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_64"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_65"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_66"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_67"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_68"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_69"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_70"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_71"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_72"></canvas> <br>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_73"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_74"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_75"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_76"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_77"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_78"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_79"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_80"></canvas>
        <canvas width="8px" height="8px"  class="maze_block"id="maze_block_81"></canvas> <br>
    </div>

    <script src="/util/js/maze.js"></script>

    <?php
        include $_SERVER['DOCUMENT_ROOT']."/util/module/footer.html";
    ?>
</body>
</html>