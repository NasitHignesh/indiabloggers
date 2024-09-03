<?php

session_start();
$con = mysqli_connect("localhost", "freestar_movies", "Ros,MJwD!sug", "freestar_movies");

if (isset($_GET['id'])) {
  $ids = $_GET['id'];
}

if (isset($_GET['id']) && isset($_GET['mid'])) {
  $id = $_GET['id'];
  $mid = $_GET['mid'];
} else {
  header("location:https://starmovies.at/movies/movies.php?id=$ids");
}

$sql = "SELECT * FROM `movies` WHERE `id`=" . $id;

$res = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($res);

if ($mid == 1) {
  $link = $row['2160plink'];
} else if ($mid == 2) {
  $link = $row['1080plink'];
} else if ($mid == 3) {
  $link = $row['720plink'];
} else if ($mid == 4) {
  $link = $row['480plink'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
    rel="stylesheet">

  <title>
    <?php echo $row['title']; ?>
  </title>
  <link rel="Website icon" href="../assets/images/icon.webp" type="webp">

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional js Files -->
  <script src="../assets/js/jquery-3.6.4.min.js"></script>
  <script src="../assets/js/download.js"></script>

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" href="../assets/css/templatemo-stand-blog.css">
  <link rel="stylesheet" href="../assets/css/owl.css">
  <link rel="stylesheet" href="../assets/css/blog.css">

  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-8LR7NTK3BR');
  </script>


</head>

<body>
  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <h2>IndianBlogger<em>.</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../blog.php">Blog Entries</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../post-details.php">Post Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->

  <!-- verifiy start -->
  <div class="main">
    <div class="human" id="human">
      <p>Please verify To Download..</p>
    </div>
    <div class="outer">
      <button id="up">Click to verify</button>
      <p id="wait">Please wait<input id="sec" readonly value="10">second..</p>
    </div>

    <div class="hint">
      <p>Please Scroll down and click <span class="Continue">Continue</span> button..</p>
    </div>
  </div>
  <!-- verifiy End -->

  <section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="all-blog-posts">
            <div class="row">
              <div class="col-lg-12 margin">
                <div class="blog-post">
                  <div class="blog-thumb">
                    <img src="../assets/images/sharemarket.webp" alt="sharemarket" height="auto" width="100%">
                  </div>
                  <div class="down-content">
                    <span>Sharemarket</span>
                    <a href="post-details.php">
                      <h4>where buying and selling of share happens.</h4>
                    </a>
                    <ul class="post-info">
                      <li><a href="#">Admin</a></li>
                      <li><a href="#">May 12, 2020</a></li>
                      <li><a href="#">18 Comments</a></li>
                    </ul>
                    <p>
                      Stock markets are venues where buyers and sellers meet to exchange equity shares of public
                      corporations. Stock markets are components of a free-market economy because they enable
                      democratized access to investor trading and exchange of capital. Stock markets create efficient
                      price discovery and efficient dealing.
                    </p>
                    <p>
                      Share market is where buying and selling of share happens. Share represents a unit of ownership of
                      the company from where you bought it. For example, you bought 10 shares of Rs. 200 each of ABC
                      company, then you become a shareholder of ABC. This allows you to sell ABC share anytime you want.
                    </p>
                    <p>
                      By definition, it is a market place where trading of shares of public listed companies is carried
                      out daily. The primary market is where the companies float the shares to the public; the extending
                      of shares in the open market is known as Initial Public Offering- IPO, mainly for market
                      capitalisation.
                    </p>
                    <div class="post-options">
                      <div class="row">
                        <div class="col-6">
                          <ul class="post-tags">
                            <li><i class="fa fa-tags"></i></li>
                            <li><a href="#">Best Blog</a>,</li>
                            <li><a href="#">Indianbloggers</a></li>
                          </ul>
                        </div>
                        <div class="col-6">
                          <ul class="post-share">
                            <li><i class="fa fa-share-alt"></i></li>
                            <li><a href="#">Facebook</a>,</li>
                            <li><a href="#"> Twitter</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="sidebar-item comments">
                  <div class="sidebar-heading">
                    <h2>4 comments</h2>
                  </div>
                  <div class="content">
                    <ul>
                      <li>
                        <div class="author-thumb">
                          <img src="../assets/images/comment-author-02.webp" alt="commets user photos" height="auto"
                            width="100%">
                        </div>
                        <div class="right-content">
                          <h4>Anjali Singh<span>May 16, 2020</span></h4>
                          <p>
                            The stock market is essential to the economy as well as the investors. For the economy, it
                            allows companies to raise capital by offering stock shares and will enable investors to be a
                            part of the company's financial achievements. For the investors, it helps them build wealth
                            by earning returns over their investments.
                          </p>
                        </div>
                      </li>
                      <li class="replied">
                        <div class="author-thumb">
                          <img src="../assets/images/comment-author-01.webp" alt="commets user photos" height="auto"
                            width="100%">
                        </div>
                        <div class="right-content">
                          <h4>Rahul Sharma<span>May 20, 2020</span></h4>
                          <p>
                            The term stock market refers to several exchanges in which shares of publicly held companies
                            are bought and sold. Such financial activities are conducted through formal exchanges and
                            via over-the-counter (OTC) marketplaces that operate under a defined set of regulations.
                          </p>
                        </div>
                      </li>
                      <li>
                        <div class="author-thumb">
                          <img src="../assets/images/comment-author-03.webp" alt="commets user photos" height="auto"
                            width="100%">
                        </div>
                        <div class="right-content">
                          <h4>Ketrina Patel<span>May 16, 2020</span></h4>
                          <p>
                            What is a share? When you buy a share in a company, you're effectively becoming a part owner
                            of that company. As a shareholder, with an equity stake in that business, the investment
                            return you earn depends on the success or failure of the company itself.
                          </p>
                        </div>
                      </li>
                      <li class="replied">
                        <div class="author-thumb">
                          <img src="../assets/images/comment-author-04.webp" alt="commets user photos" height="auto"
                            width="100%">
                        </div>
                        <div class="right-content">
                          <h4>AkshyKumar<span>May 22, 2020</span></h4>
                          <p>
                            Thanks for sharing such a great information.. It really helpful to me..I always search to
                            read the quality content and finally i found this in you post. keep it up!
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 margin">
          <div class="sidebar">
            <div class="row">
              <div class="col-lg-12">
                <div class="sidebar-item recent-posts">
                  <div class="sidebar-heading">
                    <h2>Recent Posts</h2>
                  </div>
                  <div class="content">
                    <ul>
                      <li><a href="../post-details.php">
                          <h5>Lifestyle is the armor to survive the</h5>
                          <span>May 31, 2020</span>
                        </a></li>
                      <li><a href="../post-details.php">
                          <h5>Health is the state of being physically, mentally and emotionally well of a person.</h5>
                          <span>May 28, 2020</span>
                        </a></li>
                      <li><a href="../post-details.php">
                          <h5>You can have anything you want in life if you dress for it.</h5>
                          <span>May 14, 2020</span>
                        </a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="sidebar-item categories">
                  <div class="sidebar-heading">
                    <h2>Categories</h2>
                  </div>
                  <div class="content">
                    <ul>
                      <li><a href="#">- Nature Lifestyle</a></li>
                      <li><a href="#">- Nature Health</a></li>
                      <li><a href="#">- Creative Ideas</a></li>
                      <li><a href="#">- New Blogs</a></li>
                      <li><a href="#">- Unique Blogs</a></li>
                      <li><a href="#">- About technology</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="sidebar-item tags">
                  <div class="sidebar-heading">
                    <h2>Tag Clouds</h2>
                  </div>
                  <div class="content">
                    <ul>
                      <li><a href="#">Lifestyle</a></li>
                      <li><a href="#">Creative</a></li>
                      <li><a href="#">Health</a></li>
                      <li><a href="#">Inspiration</a></li>
                      <li><a href="#">Motivation</a></li>
                      <li><a href="#">Unique</a></li>
                      <li><a href="#">technology</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- link start -->
  <div class="outer1 Download" style="display: none;">
    <a href="<?php echo $link ?>" target="_blank"><button>Click to Download »</button></a>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Linkedin</a></li>
            <li><a href="#">Threds</a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright 2023 Stand Blog Co.| Design: <a rel="nofollow" href="../index.html">Indias Bloggers</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="../assets/js/custom.js"></script>
  <script src="../assets/js/owl.js"></script>
  <script src="../assets/js/slick.js"></script>
  <script src="../assets/js/isotope.js"></script>
  <script src="../assets/js/accordions.js"></script>


  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
      if (!cleared[t.id]) {                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value = '';         // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>


</body>

</html>