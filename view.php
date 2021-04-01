<?php
    require_once "Demo.php";
    $demo = new Demo();
    $result = $demo->demo();
?>
<form action="" method="post">
    <table border="1">
        <tr>
            <th>First Number</th>
            <td><input type="text" name="first_number"></td>
        </tr>
        <tr>
            <th>Last Number</th>
            <td><input type="text" name="last_number"></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="radio" name="check" value="Odd">ODD
                <input type="radio" name="check" value="Even">EVEN
            </td>
        </tr>
        <tr>
            <th>Result</th>
            <td>
                <textarea name="" id="" cols="30" rows="10">
                    <?php echo $result; ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
