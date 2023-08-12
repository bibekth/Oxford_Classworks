<?php
    if(isset($_POST['name']))
    echo $_POST['name'];
?>
<form action="display.php" method="POST">
    <input type="textbox" name="name"/>
    <input type="submit" value="submit">
</form>