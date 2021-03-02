<?php
require_once("./includes/header.php")
?>

<div class="settingsContainer column">
    <div class="formSection">
        <form method="POST">

            <h2>User details</h2>

            <input type="text" name="firstName" placeholder="First name" value="<?php ?>">
            <input type="text" name="lastName" placeholder="Last name" value="<?php ?>">
            <input type="email" name="email" placeholder="Email" value="<?php ?>">

            <input type="submit" name="saveDetailsButton" value="Save">
        </form>
    </div>

    <div class="formSection">
        <form method="POST">
            
            <h2>Update password</h2>

            <input type="password" name="oldPassword" placeholder="Old password" value="<?php ?>">
            <input type="password" name="newPassword" placeholder="New password" value="<?php ?>">
            <input type="password" name="confirmNewPassword" placeholder="Confirm new password" value="<?php ?>">

            <input type="submit" name="saveNewPassword" value="Save">
        </form>
    </div>
</div>