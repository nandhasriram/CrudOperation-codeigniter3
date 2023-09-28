<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <center><div>
        <?php
        if(isset($status)) {
            echo $status;
            echo '<br>' . $test;
        }
        if(isset($msg)) {
            echo '<h2>'.$msg.'<h2>';
        }
        ?>
    <form action="<?=base_url('register/savedata/')?>" method="post">
        <table cellspacing="20">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" name="city"></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="number" name="mobile"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="register">
                    <a href="<?= base_url('register/fetchdata')?>"> view data </a>
                </td>
            </tr>
        </table>
    </form>
    </div></center>
    </body>
</html>