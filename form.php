
<html>
<body>
<?php
file_put_contents('newfile.txt', $_GET["name"] , FILE_APPEND | LOCK_EX);
file_put_contents('newfile.txt', "\n" , FILE_APPEND | LOCK_EX);
?>


</body>
</html>