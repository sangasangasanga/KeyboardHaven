<!DOCTYPE html>
<html lang="en">
<head>
  <title>Keyboard Haven</title>
  <meta charset="utf-8">

  <?php include("C:/xampp/htdocs/KeyboardHaven/cssJsIncludes.php"); ?>
  <?php include(ROOT_PATH.'session_handles.php'); ?>
  <?php require(ROOT_PATH.'lib/Aris/aris.php'); ?>
  <link rel="stylesheet" href="css/blog.css" />  
  
</head>
<body>
    <header>
      <?php include(ROOT_PATH."homepage/noticeMessage.php"); ?>
      <?php include(ROOT_PATH."homepage/navBar.php"); ?>
    </header>    
    <div class="container" style="margin-top:30px">
        <div class="box-shadow-full" style="margin-top:30px">
            <h1>Blogs</h1>
            <hr>
            <p>Grab a warm cup of coffee and settle in, because here is where we take a deep dive into Mechanical keyboards. Once you go mech, you can never go back.</p>
            
        </div>
    </div>

    <div class="container" style="margin-top:30px">
      <div id="Hello" class="row">

        <div class="col-sm-8">
          
          <div id = "box-shadow" class="card">
            <div class="card-body">
              <h3 class="card-title">The Beginner's Guide to Mechanical Keyboards</h3>
              <h5 class="card-subtitle mb-2 text-muted">Lamar Thompson, 2/10/2019</h5>
              <br>
              <img class="fakeimg" src="img/blogs/options.jpg" alt=""/>
              <p class="card-text">Not sure where to start? This guide is here to give you some pointers that you might find useful when deciding on a new mechanical keyboard.</p>
              <a href="blog_beginner_guide.php" class="card-link font-weight-bold">Read More</a>
            </div>
          </div>
          

                          
          <div id = "box-shadow" class="card">
            <div class="card-body">
              <h3 class="card-title">*JUST IN* Introducing: iKBC</h3>
              <h5 class="card-subtitle mb-2 text-muted">Lamar Thompson, 2/10/2019</h5>
              <br>
              <img class="fakeimg" src="img/blogs/ikbc.png" alt=""/>
              <p class="card-text pt-2">We are excited to announce that we finally have iKBC keyboards in our store! iKBC was founded in 2007 by a group of keyboard enthusiasts and focused on designing and manufacturing quality mechanical keyboard for keyboard enthusiasts. Today, they are well-known for providing one of the best bang for your buck keyboards.</p>
              <a href="blog_ikbc.php" class="card-link font-weight-bold">Read More</a>
            </div>
          </div>
          
            
          <div id = "box-shadow" class="card">
            <div class="card-body">
              <h3 class="card-title">*JUST IN* Introducing: Ducky</h3>
              <h5 class="card-subtitle mb-2 text-muted">Lamar Thompson, 2/10/2019</h5>
              <br>
              <img class="fakeimg" src="img/blogs/sakura.jpg" alt=""/>
              <p class="card-text pt-2">We are excited to announce that we finally have Ducky keyboards in our store! Based in Taiwan, Ducky founded its own brand in 2008 and became a manufacturing company that has strived to provide users with mechanical keyboards of the highest standard since day one. Beautify your desk with one of their artisan keyboards!</p>
              <a href="blog_ducky.php" class="card-link font-weight-bold">Read More</a>
            </div>
          </div>
            
        </div>
          
        <div class="col-sm-4">
            <h3>Popular Posts</h3>
            
            <hr>

                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="blog_beginner_guide.php">The Beginner's Guide to Mechanical Keyboards</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="blog_ikbc.php">*JUST IN* Introducing: iKBC</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="blog_ducky.php">*JUST IN* Introducing: Ducky</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#">How to Escape your S.O.'s Wrath when you just Spent $500 on a Keyboard</a>
                  </li> -->
                  
                </ul>
                <hr class="d-sm-none">
        </div>
      </div>
    </div>
    
    <br><br><br>

    <?php include(ROOT_PATH."footer.php"); ?>

</body>
</html>
