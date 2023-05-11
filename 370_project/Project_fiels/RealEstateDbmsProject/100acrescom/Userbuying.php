<?php
require_once('connection.php');
$queryr="Select * from property where Status='Y'";
$result=mysqli_query($con,$queryr);
$check_property=mysqli_num_rows($result)>0;
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="100hectors.com">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Buy</title>
    <link rel="stylesheet" href="nicepage1.css" media="screen">
<link rel="stylesheet" href="Buyingpage.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery1.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage1.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <?php
      session_start();
      if($email=$_SESSION['email'])
      {
        echo "Welcome     ".$email;
      }
      else
      {
        header("location:Login.php");
      }
    ?>
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Admin side"
}</script>
    <meta name="theme-color" content="#34421e">
    <meta property="og:title" content="Buyingpage">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-f9f5"><nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XL">
        <div class="menu-collapse">
          <a class="u-button-style u-nav-link" href="#" style="font-size: calc(1em + 8px);">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style="undefined"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a760"></use></svg>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-a760" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
          </a>
        </div>
        <div class="u-nav-container">
          <ul class="u-nav u-spacing-25 u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="homelogin.php" style="padding: 8px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="logout.php" style="padding: 8px 0px;">Logout</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Projectlogin.php" style="padding: 8px 0px;">Project</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact-Uslogin.php" style="padding: 8px 0px;">Contact-Us</a>
</li></ul>
        </div>
        <div class="u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="homelogin.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="logout.php">Logout</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Projectlogin.php">Project</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact-Uslogin.php">Contact-Us</a>
</li></ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav><h2 class="u-text u-text-palette-1-dark-1 u-text-1">
        <a href="homelogin.php" data-page-id="2930001893" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-dark-1 u-btn-1">100acres.com</a>
      </h2></header>
      <?php
      if($check_property)
      {
        
        while($row = mysqli_fetch_array($result)) 
        {
        
      ?> 
    <section class="u-clearfix u-section-1" id="sec-f4d2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-size-30">
                <div class="u-layout-row">
                  <img class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" src="pics/<?php echo $row['Pimg1'];?>" data-image-width="1080" data-image-height="1080"/>
                    <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                      <h3 class="u-text u-text-1"><?php echo $row['Pname']; ?></h3>
                      <p class="u-text u-text-2">PropertyType:<?php echo $row['Pt'];?></p>
                      <h5 class="u-text u-text-2">Price:₹<?php echo $row['Price'];?></h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-3">
                    <div class="u-container-layout u-valign-middle u-container-layout-3">
                      <h4 class="u-text u-text-3">DESCRIPTION:</h4>
                      <p class="u-text u-text-4"><?php echo $row['Description'];?></p>
                      <p class="u-text u-text-4"><?php echo $row['Loc']; ?></p>
                      <!-- <a href="" class="u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-btn-2">Buy</a> -->
                      <a href="payments.php?pid=<?php echo $row['Pid']?>" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-1">Buy</a>
                    </div>
                  </div>
                  <img class="u-container-style u-image u-layout-cell u-right-cell u-size-30 u-image-2" src="pics/<?php echo $row['Pimg2'];?>" data-image-width="1080" data-image-height="1080"/>
                    <div class="u-container-layout u-valign-middle u-container-layout-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
        }
      }
      else
      {
        echo"No property Available";
      }
    ?>
    
    <footer class="u-clearfix u-footer u-palette-1-base" id="sec-1161"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse">
            <a class="u-button-style u-nav-link" href="#">
              <svg viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="homelogin.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Projectlogin.php">Project</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact-Uslogin.php">Contact-Us</a>
</li><!--li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-1.html">Page 1</a>
</li--></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="homelogin.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Projectlogin.php">Project</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact-Uslogin.php">Contact-Us</a>
</li><!--li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-1.html">Page 1</a>
</li--></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></footer>
  </body>
</html>