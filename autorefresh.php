<?php include 'inc/header.php'; ?>



<div><h2>Let jQuery AJAX AUTO REFRESH DIV CONTENT </h2></div>

<form action="" method="post">
    <table>
        <tr>
            <td>Content</td>
            <td>:</td>
            <td><textarea name="body" id="body" cols="30" rows="10" placeholder="Write here..."></textarea></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="autosubmit" id="autosubmit" value="POST" ></td>
            <td></td>
        </tr>
    </table>
    <div id="autorefreshstatus"></div>
</form>




<?php include 'inc/footer.php'; ?>