  <?php
    session_unset();
    session_destroy();
    session_abort();
    header("Location: login.php?");
