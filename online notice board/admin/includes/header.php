  <link rel="stylesheet" href="css/style.css">
       <div class="container">
          <div class="header">
          <a href='index.php'><h3>Welcome 
          <?php echo " <span style='text-transform: capitalize;'>" .$_SESSION['username']. "</span>"; ?>
          </h3></a>
          <nav>
            <ul>
              <li>
              <a href="logout.php">logout</a>
            </li>
          </ul>
          </nav>
        </div>
