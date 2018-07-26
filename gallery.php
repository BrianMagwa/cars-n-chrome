<!DOCTYPE HTML>
<html>
<head>
    <title>Cars & Chrome</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/gallery.css" />
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

<?php
$folder = 'images/gallery/';
$filetype = '*.*';
$files = glob($folder.$filetype);
$count = count($files);
for ($i = 0; $i < $count; $i++) {
   echo "<div class='itemS'>
<li><div class='itemType'><input type='image' src='".$files[$i]."'/> <gt_descA>".substr($files[$i],strlen($folder),strpos($files[$i], '.')-strlen($folder))."</gt_descA></div></li>
</div>";
}
?>


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
