<?php

/** @var \models\FormRegister $this */

?>

<form method="post">
    <input name="login" value="<?= $this->login ?>" placeholder="Login">
    <input name="email" value="<?= $this->email ?>" placeholder="Email">
    <input name="password" value="<?= $this->pass ?>" placeholder="Password">
    <input name="confirm_password" value="<?= $this->confirmPassword?>" placeholder="Confirm Password">
    <button type="submit">Send</button>
</form>