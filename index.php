<center>
    <pre>
        host = <?php if (!empty($_SERVER['RDS_HOSTNAME'])) echo $_SERVER['RDS_HOSTNAME']; ?> / <a href="./phpmyadmin">phpmyadmin</a>
    </pre>
</center>
<br>
<?php phpinfo(); ?>
