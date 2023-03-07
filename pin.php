<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Checking</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="pin">
        <h1>Log In</h1>
        <form method='POST' action="banking.php" id="banking">
            <table >
                <tr>
                    <td> <label>User Name : </label></td>
                    <td><input type="text" name="name1"></td>
                </tr>
                <tr>
                    <td><label>Enter Pin : </label></td>
                    <td> <input type="text" name="pin" placeholder="4 digit number" maxlength="4"></td>
                    <td><input type="submit" form="banking"></td>
                </tr>




            </table>
        </form>
        <!-- <?php
        // $p = 8954;
        // $pin1 = (int)$_POST['pin'];
        // if ($p == $pin1) {
        //     header("Location:banking.php");
        // }
        ?> -->
    </div>
</body>

</html>