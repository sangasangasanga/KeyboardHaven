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
            <h1>Blogs and Posts</h1>
            <hr>
            <p>Grab a warm cup of coffee and settle in, because here is where we take a deep dive into Mechanical keyboards. Once you go mech, you can never go back.</p>
            
        </div>
    </div>

    <div class="container" style="margin-top:30px">
      <div id="Hello" class="row">

        <div class="col-sm-8">

          <div id = "box-shadow" class="card">
            <div class="card-body">
              <h3 class="card-title">*JUST IN* Introducing: Ducky</h3>
              <h5 class="card-subtitle mb-2 text-muted">Lamar Thompson, 2/10/2019</h5>
              <br>
              <img class="fakeimg" src="img/blogs/sakura.jpg" alt=""/>
              <p class="card-text">We are excited to announce that we finally have Ducky keyboards in our store! Based in Taiwan, Ducky founded its own brand in 2008 and became a manufacturing company that has strived to provide users with mechanical keyboards of the highest standard since day one. Beautify your desk with one of their artisan keyboards!</p>
              <p>Ducky is more well known within the keyboard community for the design of the keyboards, with unique color schemes and keycap designs. Some of you have already seen some of their most popular keyboards, such as the Miya Pro Sakura-Pink, as well as the Ducky One 2 Horizon:</p>
            
              <div style="display: flex; justify-content: center;">
                  
                <div class="gallery">
                    <img src="img/blogs/ducky/horizon.jpg" alt="ducky horizon 2" width="1000" height="600">
                    <div class="desc">
                        <p>Ducky Horizon 2</p>
                    </div>
                </div>

                <div class="gallery">
                    <img src="img/blogs/ducky/sakura.jpg" alt="Ducky x Varmilo MIYA Pro Sakura Cherry" width="1000" height="600">
                  <div class="desc">
                      <p>Ducky x Varmilo MIYA Pro Sakura Cherry</p>
                  </div>
                </div>    
                  
              </div>
              
              <p>Ducky keyboards are on the more expensive side, but considering the cost of keycaps if you decide to replace the default design, Ducky keycaps can be cheaper.</p>
              <p>For example, IKBC CD87 Black + keycaps = S$170 + S$50 = $230 as compared to Ducky Horizon 2 = $190.</p>
            </div>
          </div>
            
            <h4>Leave a Comment:</h4>
            <form role="form">
              <div class="form-group">
                <textarea class="form-control" rows="3" required></textarea>
              </div>
              <button type="submit" class="btn btn-outline-primary">Submit</button>
            </form>
            
            <br><br>
            
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
                    <a class="nav-link" href="https://www8.hp.com/sg/en/campaigns/retail-solutions/receipt-printers.html">How to Escape your S.O.'s Wrath when you just Spent $500 on a Keyboard</a>
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
