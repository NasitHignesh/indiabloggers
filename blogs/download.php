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

  <title><?php echo $row['title']; ?></title>
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
  function gtag(){dataLayer.push(arguments);}
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
  <div class="deta">
    <div class="demo">
      <p>
        <?php
        //echo "jahsnicdhjasndashDJnwaJZHjxnw hsazhdxm sahzmhdjxnsahzxjdhcjm dshxjc asxz,cn wsxzjj,";
        //echo $id;
        // echo $q;
        ?>
      </p>
    </div>
  </div>
  <!-- verifiy start -->
  <div class="main">
    <div class="human" id="human">
      <p>Please verify that you are human..</p>
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
                    <img src="../assets/images/blog-post-02.webp" alt="Lifestyle photos" height="auto" width="100">
                  </div>
                  <div class="down-content">
                    <span>Lifestyle</span>
                    <a href="post-details.php">
                      <h4>Lifestyle is the armor to survive the</h4>
                    </a>
                    <ul class="post-info">
                      <li><a href="#">Admin</a></li>
                      <li><a href="#">May 12, 2020</a></li>
                      <li><a href="#">10 Comments</a></li>
                    </ul>
                    <p>
                      A lifestyle typically reflects an individual's attitudes, way of life, values, or world view.
                      Therefore, a lifestyle is a means of forging a sense of self and to create cultural symbols that
                      resonate with personal identity. Not all aspects of a lifestyle are voluntary.
                    </p>
                    <p>
                      A healthy lifestyle has many benefits not only for the body but for the mind too. Also, if you
                      follow a healthy lifestyle then you can reduce the risk of having cancer, heart disease, diabetes,
                      obesity, and osteoporosis. To sum it up, we can say that there are various benefits of living a
                      healthy lifestyle.
                    </p>
                    <p>
                      The top secret of being physically fit is adopting a healthy lifestyle. A healthy lifestyle
                      includes regular exercise, a healthy diet, taking good care of self, healthy sleep habits, and
                      having a physically active daily routine. Lifestyle is the most prevailing factor that affects
                      one’s fitness level. A person leading a sedentary lifestyle has a low fitness level whereas living
                      a healthier life not only makes a person fit but also extends life. Good health has a direct
                      impact on our personality. A person with a good and healthy lifestyle is generally more confident,
                      self-assured, sociable, and energetic.
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
                          <img src="../assets/images/comment-author-01.webp" alt="commets user photos" height="auto"
                            width="100%">
                        </div>
                        <div class="right-content">
                          <h4>Charles Kate<span>May 16, 2020</span></h4>
                          <p>
                            I’ve been surfing on the web more than 3 hours today, yet I never found any stunning article
                            like yours. It’s alluringly worth for me. As I would see it, if all web proprietors and
                            bloggers made puzzling substance as you did, the net will be in a general sense more
                            beneficial than at whatever point in late memory.
                          </p>
                        </div>
                      </li>
                      <li class="replied">
                        <div class="author-thumb">
                          <img src="../assets/images/comment-author-02.webp" alt="commets user photos" height="auto"
                            width="100%">
                        </div>
                        <div class="right-content">
                          <h4>Thirteen Man<span>May 20, 2020</span></h4>
                          <p>Enjoyed reading the article above , really explains everything in detail, the article is
                            very interesting and effective. Thank you and good luck in the upcoming articles.</p>
                        </div>
                      </li>
                      <li>
                        <div class="author-thumb">
                          <img src="../assets/images/comment-author-03.webp" alt="commets user photos" height="auto"
                            width="100%">
                        </div>
                        <div class="right-content">
                          <h4>Belisimo Mama<span>May 16, 2020</span></h4>
                          <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget
                            ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac,
                            molestie nibh.</p>
                        </div>
                      </li>
                      <li class="replied">
                        <div class="author-thumb">
                          <img src="../assets/images/comment-author-04.webp" alt="commets user photos" height="auto"
                            width="100%">
                        </div>
                        <div class="right-content">
                          <h4>Thirteen Man<span>May 22, 2020</span></h4>
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
    <a href="finaldownload.php?id=<?php echo $id; ?>&&mid=<?php echo $mid; ?>"><button>Click to Continue »</button></a>
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