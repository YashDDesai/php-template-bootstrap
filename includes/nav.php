<!--	<ul>
		<li><a href="index.php" class="<?php echo ("index.php" === $page ? 'active' : '');?>">Home</a></li>
		<li><a href="about.php" class="<?php echo ("about.php" === $page ? 'active' : '');?>">About Us</a></li>
		<li><a href="contact.php" class="<?php echo ("contact.php"=== $page ? 'active' : '');?>">Contact Us</a></li>
	</ul>-->
	
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img height="32px" weight="32px" src="image.png"> <?=$project_name?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo ("index.php" === $page ? 'active' : '');?>">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item <?php echo ("about.php" === $page ? 'active' : '');?>">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
	  <li class="nav-item <?php echo ("contact.php" === $page ? 'active' : '');?>">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="http://yashclassesbharuch.ddns.net">My Blog</a>
      </li>
      <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>-->
      
	  <!--<li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>