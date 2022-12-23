<?php

/**
 * Phương thức GET và POST trong PHP
 */

if (isset($_POST['form_login'])) {
    $fullname = !empty($_POST['fullname']) ? trim($_POST['fullname']) : '';
    $age = !empty($_POST['age']) ? trim($_POST['age']) : '';

    echo 'Welcome: ' . $fullname;
    echo '<br/>';
    echo 'Age: ' . $age;
    die();
}

?>
<form action="" method="post">
    <label for="fullname">Fullname</label><br />
    <input type="text" name="fullname" id="fullname"><br />
    <label for="age">Age</label><br />
    <input type="text" name="age" id="age"><br />

    <input type="submit" name="form_login" value="submit">
</form>