<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <script>
        function test(){
            location.href='';
        }
    </script>
    <body>
    <?php
        session_start();

        $_SESSION['a'] ++;

        echo $_SESSION['a'];
    ?>
    <input type="button" onclick="test();" value= '测试'/>
    </body>
</html>