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
              <h3 class="card-title">*JUST IN* Introducing: iKBC</h3>
              <h5 class="card-subtitle mb-2 text-muted">Lamar Thompson, 2/10/2019</h5>
              <br>
              <img class="fakeimg" src="img/blogs/ikbc.png" alt=""/>
              <p class="card-text pt-2">We are excited to announce that we finally have iKBC keyboards in our store! iKBC was founded in 2007 by a group of keyboard enthusiasts and focused on designing and manufacturing quality mechanical keyboard for keyboard enthusiasts.</p>
              <p>Today, they are well-known for providing one of the best bang for your buck keyboards. If you're looking to buy a mechanical keyboard for the very first time, we would highly recommend looking into keyboards from this brand. The build quality is superb for its price, and its basic, no frills design gives you the flexibility to customize your keyboard.</p>
              <p>Some of the basic models are the iKBC F series, that are backlit, as well as the iKBC CD series, that are not backlit. Both of these series come with the option to choose between the 4 most popular switches: blue, red, brown and black Cherry MX Switches.</p>
              
              <div style="display: flex; justify-content: center;">
                  
                <div class="gallery">
                    <img src="img/blogs/ikbc/cd108.jpg" alt="CD108" width="1000" height="600">
                    <div class="desc">
                        <p>F108</p>
                      <p>(not backlit, but it is cheaper)</p>
                    </div>
                </div>

                <div class="gallery">
                    <img src="img/blogs/ikbc/f108.jpg" alt="F108" width="1000" height="600">
                  <div class="desc">
                      <p>F108</p>
                      <p>(Backlit with customizable RGB lighting)</p>
                  </div>
                </div>    
                  
              </div>

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
