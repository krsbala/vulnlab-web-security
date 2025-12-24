<?php
if (isset($_POST['ip'])) {
    system("ping -c 1 " . $_POST['ip']);
}
?>
<form method="POST">
IP Address: <input type="text" name="ip">
<input type="submit">
</form>
