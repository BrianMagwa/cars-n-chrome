<!DOCTYPE HTML>
<html>
<head>
    <title>Cars & Chrome</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>

<!-- Header -->
<header id="header">
    <div class="logo"><a href="index.html"><img src="images/logo.png" alt="logo" width="80"></a></div>
    <a href="#menu"><span>Menu</span></a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="index.html">Home</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="member">Member Login</a></li>
    </ul>
</nav>

<div id='photos'>
<?php
$folder = 'images/gallery/';
$filetype = '*.*';
$files = glob($folder.$filetype);
$count = count($files);
for ($i = 0; $i < $count; $i++) {
   echo "<img src='".$files[$i]."'/>";
}
?>

<style media="screen">
#photos {
   /* Prevent vertical gaps */
   line-height: 0;

   -webkit-column-count: 5;
   -webkit-column-gap:   0px;
   -moz-column-count:    5;
   -moz-column-gap:      0px;
   column-count:         5;
   column-gap:           0px;
}

#photos img {
  /* Just in case there are inline attributes */
  width: 100% !important;
  height: auto !important;
}

@media (max-width: 1200px) {
  #photos {
  -moz-column-count:    4;
  -webkit-column-count: 4;
  column-count:         4;
  }
}
@media (max-width: 1000px) {
  #photos {
  -moz-column-count:    3;
  -webkit-column-count: 3;
  column-count:         3;
  }
}
@media (max-width: 800px) {
  #photos {
  -moz-column-count:    2;
  -webkit-column-count: 2;
  column-count:         2;
  }
}
@media (max-width: 400px) {
  #photos {
  -moz-column-count:    1;
  -webkit-column-count: 1;
  column-count:         1;
  }
}

body {
  margin: 0;
  padding: 0;
}
</style>
</div>

 <!--Footer -->
<!--<footer id="footer">-->
    <!--<div class="inner">-->

        <!--<h2>Contact Us</h2>-->

        <!--<form action="#" method="post">-->

            <!--<div class="field half first">-->
                <!--<label for="name">Name</label>-->
                <!--<input name="name" id="name" type="text" placeholder="Name">-->
            <!--</div>-->
            <!--<div class="field half">-->
                <!--<label for="email">Email</label>-->
                <!--<input name="email" id="email" type="email" placeholder="Email">-->
            <!--</div>-->
            <!--<div class="field">-->
                <!--<label for="message">Message</label>-->
                <!--<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>-->
            <!--</div>-->
            <!--<ul class="actions">-->
                <!--<li><input value="Send Message" class="button alt" type="submit"></li>-->
            <!--</ul>-->
        <!--</form>-->

        <!--<ul class="icons">-->
            <!--&lt;!&ndash;<li><a href="" class="icon round fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>&ndash;&gt;-->
            <!--<li><a href="https://www.facebook.com/groups/166066170720997/" class="icon round fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>-->
            <!--<li><a href="https://www.instagram.com/cars_and_chrome_club/" class="icon round fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>-->
        <!--</ul>-->

        <!--<div class="copyright">-->
            <!--&copy; Cars & Chrome. Design: <a href="https://wang0nya.github.io" target="_blank">wang0nya</a>.-->
        <!--</div>-->

    <!--</div>-->
<!--</footer>-->

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
