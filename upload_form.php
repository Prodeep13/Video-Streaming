<!DOCTYPE HTML>
<!--
    Urban by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>video streaming</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>

    

        <!-- Nav -->
            <?php include ('menu.php')?>

        <!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <header>
                        <h1>UPLOAD YOUR VIDEO </h1>
                        
                    </header>
                    <a href="#main" class="button big scrolly">Click here</a>
                </div>
        </section>

        <!-- Main -->
            <div id="main">
<style type="text/css">
table,tr,th,td
            {
                border: 1px solid black;
            }
#registerBlock{
    width:65%;
    margin:0 auto;
    height:auto;
   }
</style>
                <!-- Section -->
                    <section class="wrapper style1">
                    <div id='registerBlock'>
                    <h3 align="center">Upload</h3>
            <form method="post" enctype="multipart/form-data" action="displaytest.php">

            video NAME<input type="text" name="video_name" value=""/><br><br>
            uploader NAME<input type="text" name="creator_name" value=""/><br><br>
            <input type="file" name="file" value=""/><br><br>
            <input type="submit" name="submit" value="Uploadfile"><br><br>
        </form> 
              </div>     
                    </section>

            <!-- Section --><!-- Section --></div>

        <!-- Footer -->
            <?php include ('footer.php')?>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>