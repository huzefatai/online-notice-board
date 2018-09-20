  <?php
    session_destroy();
    session_unset();
    session_abort();
    header("Location: login.php");
