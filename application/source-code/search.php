<?php
if (isset($_GET['q'])) {
    echo "Search result for: " . $_GET['q'];
}
?>
<form method="GET">
Search: <input type="text" name="q">
<input type="submit">
</form>
