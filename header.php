

<nav class="navbar navbar-default" style="background-color: black">
  <div class="container ">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header ">

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

      <a class="navbar-brand" href="index.php" style="color:white">Academic Navigator Pro</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <?php 

      if(isset($_SESSION['username'], $_SESSION['password'])) {

    ?>

      <form class="navbar-form navbar-right" action="searchresults.php" method="GET">

        <div class="search-area">
          <div class="form-group">

            <div class="search-wrap">

              <label for="searchbox" class="sr-only">Search:</label>
              <input type="text" class="form-control" name="searchbox" id="searchbox" placeholder="Search student name here" required autocomplete="off">
              
              <div class="search-results hide"></div>

            </div>
            

          </div>
          <input type="submit" name="search" id="search-btn" value="Search" class="btn btn-success">

        </div>
        
        <div class="welcome" style="color: lightgray;">Welcome, <a href='profile.php' style="color: white;"><?php echo $_SESSION['username']; ?></a>!</div>

        <a href="logout.php" style="color: white;">Log Out <span class="glyphicon glyphicon-off"  aria-hidden="true" style="color: lightgray;"></span></a>

      </form>

      <?php   

        } else {
          echo "<span class='not-logged'>Not logged in.</span>";
        }

      ?>

      


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>
