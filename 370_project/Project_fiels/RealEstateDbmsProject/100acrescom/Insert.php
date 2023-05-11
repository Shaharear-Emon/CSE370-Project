<?php
      session_start();
      if($email=$_SESSION['aemail'])
      {
        echo "Welcome     ".$email;
      }
      else
      {
        header("location:Login.php");
      }
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="100hectors.com">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Insert</title>
    <link rel="stylesheet" href="nicepage1.css" media="screen">
<link rel="stylesheet" href="Insert.css" media="screen">
    <!-- <script class="u-script" type="text/javascript" src="jquery1.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage1.js" defer=""></script> -->
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <!-- <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Admin side"
}</script> -->
    <meta name="theme-color" content="#34421e">
    <meta property="og:title" content="Insert">
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
        <!-- <div class="u-nav-container">
          <ul class="u-nav u-spacing-25 u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Insert.php" style="padding: 8px 0px;">Insert</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Admin.php" style="padding: 8px 0px;">Admin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Buyingpage.php" style="padding: 8px 0px;">Buyingpage</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-1.php" style="padding: 8px 0px;">Page 1</a>
</li></ul>
        </div>
        <div class="u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Insert.php">Insert</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Admin.php">Admin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Buyingpage.php">Buyingpage</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-1.php">Page 1</a>
</li></ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div> -->
      </nav><h2 class="u-text u-text-palette-1-dark-1 u-text-1">
        <a href="Admin.php" data-page-id="2930001893" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-dark-1 u-btn-1">100hectors.com</a>
      </h2></header>
    <section class="u-clearfix u-section-1" id="sec-0dca">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1">
          <form action="upload.php" method="POST"enctype="multipart/form-data"class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
            <input type="hidden" id="siteId" name="siteId" value="61438175">
            <input type="hidden" id="pageId" name="pageId" value="112236244">
            <div class="u-form-group u-form-name">
              <input type="file"name="image1"accept="image/*"required="">
              <input type="file"name="image2"accept="image/*"required="">
              <label for="name-ff0f" class="u-form-control-hidden u-label"></label>
              <input type="text" placeholder="Enter Property Name" pattern="^[a-zA-Z\s]*$" id="name-ff0f" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <!-- <div class="u-form-email u-form-group">
              <label for="pi" class="u-form-control-hidden u-label"></label>
              <input type="text" placeholder="Enter Property ID" id="pid" name="pid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div> -->
            <div class="u-form-group u-form-group-3">
              <label for="pt" class="u-form-control-hidden u-label"></label>
              <input type="text"placeholder="Enter Property Type"pattern="[a-Z]*[A-Z]*"id="pt" name="pt" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"required="">
            </div>
            <div class="u-form-group u-form-group-4">
              <label for="number" class="u-form-control-hidden u-label"></label>
              <input type="number"placeholder="Enter Property Price"id="number"name="price"min="1"class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"required="">
            </div>
            <div class="u-form-group u-form-group-5">
              <label for="text-b220" class="u-form-control-hidden u-label"></label>
              <input type="text" placeholder="Enter Property Location" id="text-b220" name="loc" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"required="">
            </div>
            <div class="u-form-group u-form-message">
              <label for="message-ff0f" class="u-form-control-hidden u-label"></label>
              <textarea placeholder="Enter Description" rows="4" cols="50" id="message-ff0f" name="desc" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
            </div>
            <div class="u-align-right u-form-group u-form-submit">
              <input type="submit"value="SUBMIT"class="u-btn u-btn-submit u-button-style"name="insert">
              <!--input type="submit" value="submit" class="u-form-control-hidden"-->
            </div>
            <!-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div> -->
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
    
    
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
          <!-- <div class="u-nav-container">
            <ul class="u-nav u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Insert.php">Insert</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Admin.php">Admin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Buyingpage.php">Buyingpage</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-1.php">Page 1</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Insert.php">Insert</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Admin.php">Admin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Buyingpage.php">Buyingpage</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-1.php">Page 1</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div> -->
        </nav>
      </div></footer>
      <div class="u-nav-container">
            <ul class="u-nav u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Admin.php">Admin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Insert.php">Insert</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Buyingpage.php">Buyer Page</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="sellerprops.php">Seller Page</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="adminlogout.php">Logout</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Admin.php">Admin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Insert.php">Insert</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Buyingpage.php">Buyer Page</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="sellerprops.php">Seller Page</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="adminlogout.php">Logout</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
  </body>
</html>