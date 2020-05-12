<?php include 'inc/header.php'; ?>



<div><h2>Let jQuery AJAX SHOW PASSWORD </h2></div>

<form action="" method="post">
    <table>
        <tr>
            <td> Username </td>
            <td>:</td>
            <td><input type="text" name="username" id="username" placeholder="Enter username" > </td>
            <td><div id="div1" ></div></td>
        </tr>

        <tr>
            <td> Password </td>
            <td>:</td>
            <td><input type="password" name="password" id="password" placeholder="********" > </td>
            <td><div id="div1" ></div></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><button type="button" name="showpassword" id="showpassword">Show Password</button></td>
            <td></td>
        </tr>
    </table>

</form>




<?php include 'inc/footer.php'; ?>