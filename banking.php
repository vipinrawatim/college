<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="banking">
        <center>
            <h1 class="b">Banking</h1>
            <div class="dis">
                <h2>
                    <?php
                    $naam = $_POST['name1'];
                    echo "Welcome $naam";
                    ?>
                </h2>

                <h3>1. Deposit Money</h3>
                <h3>2. Withdrawl Money</h3>
                <h3>3. Balance Enquiry</h3>
                <h3>4. Transfer Money</h3>
            </div>
            <div class="option">
                <form method='POST'>
                    <label> choose option : </label>
                    <input type="text" name="numra">
                    <input type="submit">
                </form>
            </div>
            <!-- <?php
                    // $value1 = (int)($_POST['numra']);
                    // switch ($value1) {
                    //     case 1:
                    //         header("Location:pin.php");
                    //         break;
                    //         default: echo"invalid number";
                    // }
                    ?> -->

        </center>
    </div>
</body>

</html>