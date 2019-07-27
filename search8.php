<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `VIDEO` WHERE CONCAT(`v_id`, `video_name`, `uploader_name`,`file`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `video`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $conn = mysqli_connect("localhost", "root", "", "stuff");
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}

?>

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
                        <h1>SEARCH YOUR FAVORITE VIDEO</h1>
                        
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
                    <h3 align="center">Search</h3>
            <form method="post" enctype="multipart/form-data" action="search8.php">
            <input type="text" name="valueToSearch" placeholder="You can specifically search for the video you want here"><br><br>
            <input type="submit" name="search" value="search"><br><br>
            
            <table>
                <tr>
                    <h3>ALL AVAILABLE VIDEOS</h3>
                    <th>VIDEO Id</th>
                    <th>VIDEO NAME</th>
                    <th>UPLOADER NAME</th>
                    <th>YOUR VIDEO</th>
                    <th> click the FILE to download</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['v_id'];?></td>
                    <td><?php echo $row['video_name'];?></td>
                    <td><?php echo $row['uploader_name'];?></td>
                   <td><?php echo "<video width='400' height='400' controls>
            <source src='".$row['file']."' type='video/mp4' >
            </video>";?></td>
            <td><a href=<?php echo $row['file'] ;?> type='video/mp4'><?php echo $row['file'];?></a></td>
                 
                <?php endwhile;?>
            </table>
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