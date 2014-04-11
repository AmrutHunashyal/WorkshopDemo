<html>
    <body>
        <?php
        echo '<div style="position:absolute;margin-left:500px;margin-top:130px">
            <b><h2>Profile</h2>';
       echo '<form action="insert.php" method="post">
<div>
<br><input type="text" name="FirstName" placeholder="Enter your FirstName" size="28" /></div>
<div>
<br><input type="text" name="LastName" placeholder="Enter your LastName" size="28" /></div>
<div>
<br><input type="text" name="email" placeholder="Enter your Email-ID" size="28" /></div>
<div>
<br><input type="text" name="mob_no" placeholder="Enter your Mobile Number" size="28" /></div>
<div>
<div>
<br><input type="submit" name="submit" value="Submit" width="50" />&nbsp;&nbsp;&nbsp;

</form>
<a href="display_profile.php">Display Profiles</a>
</div>
</div>';
       ?>
    </body>
</html>
