<?php
if (!defined('IN_SCRIPT')) {
    die('External access denied.');
}

// Need this little bit of PHP to show errors they encounter
if (isset($_SESSION['errors'])) {
    echo $_SESSION['errors'];

    unset($_SESSION['errors']);
}
?>
<form action="processes/register.process.php" method="post">
    <input type="hidden" name="process" value="true" />
    <table border="0">
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="username" maxlength="<?php Core::$config['max_username']; ?>" placeholder="Username" />
            </td>
        </tr>
        <tr>
            <td>Password:</td>
            <td>
                <input type="password" name="password" maxlength="<?php Core::$config['max_password']; ?>" placeholder="Password" />
            </td>
        </tr>
        <tr>
            <td>Confirm:</td>
            <td>
                <input type="password" name="passwordConfirm" maxlength="<?php Core::$config['max_password']; ?>" placeholder="Confirm Password" />
            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
                <input type="text" name="email" maxlength="255" placeholder="Email address" />
            </td>
        </tr>
        <tr>
            <td>Confirm:</td>
            <td>
                <input type="text" name="emailConfirm" maxlength="255" placeholder="Confirm Email" />
            </td>
        </tr>
        <tr>
           <td colspan="2">
               <input type="submit" value="Register" class="btn btn-primary" />
           </td>
        </tr>
    </table>
</form>
