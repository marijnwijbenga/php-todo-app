<?php
require 'partials/head.php';
require 'partials/nav.php';
?>
<div>
<h1>submit your name</h1>
    <form method="POST" action="/names">
        <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
</div>
<?php require 'partials/footer.php'; ?>