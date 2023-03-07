<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="main1">
        <div class="main">

            <h1 class="cal">Calculator</h1>
            <div class="operator">
                <table cellspacing="10px">
                    <caption>
                        <h2>Operator</h2>
                    </caption>
                    <tr>
                        <td>1. </td>
                        <td>
                            <h3>Addition (+)</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>2. </td>
                        <td>
                            <h3>Subtraction (-)</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>3. </td>
                        <td>
                            <h3>Multiplication (*)</h3>
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <td>4. </td>
                        <td>

                            <h3>Division (/)</h3>
                        </td>
                    </tr>
                </table>
            </div>



            <div class="input">
                <form method='POST'>
                    <table>
                        <tr>
                            <td><label> Enter first number : </label></td>
                            <td><input type="text" name="num1"></td>
                        </tr>
                        <tr>
                            <td> <label> Enter secound number : </label></td>
                            <td> <input type="text" name="num2"></td>
                        </tr>
                        <tr>
                            <td> <label> Choose option : </label></td>
                            <td> <input type="text" name="opt"></td>


                        </tr>
                        <tr>
                            <td> <input class="ok" type="submit" value="ok" size="200"></td>
                        </tr>




                    </table>
                </form>
            </div>


        </div>
    </div>




    <div class="answer">

        <?php
        $n1 = (int)($_POST['num1']);
        $n2 = (int)($_POST['num2']);
        $option = (int)($_POST['opt']);
        if ($option > 0) {
            switch ($option) {
                case 1:
                    $sum = $n1 + $n2;
                    echo "Addition = $sum";
                    break;
                case 2:
                    $sub = $n1 - $n2;
                    echo "Subtraction =  $sub";
                    break;
                case 3:
                    $mul = $n1 * $n2;
                    echo "Multiplication = $mul";
                    break;
                case 4:
                    if ($n2 != 0) {
                        $div = $n1 / $n2;
                        echo "Division = $div";
                    } else {
                        echo " denominator should not be 0";
                    }
                    break;
                default:
                    echo "please choose correct operation";
            }
        }

        ?>
    </div>





</body>

</html>