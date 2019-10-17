<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="css/style.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
     <title>ยินดีต้อนรับ</title>
 </head>
 <body>
     <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12. col-md-12">

            <?php include('menu.php');?>
            </div> <!-- close col-->
        </div> <!-- close row-->
    </div> <!-- close container-->

    <!-- start show product -->
<div class="container">
<div class="row">
 <div class="col-xs-12. col-sm-6 col-md-3">
     <?php include('showproduct_index.php')?>
 </div>
</div>
</div>
<!-- end show product -->

     <!-- start footer -->
     <div class="container">
         <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <hr/>
                 <p align="center">ร้านค้าออนไลน์</p>
             </div>
         </div>
     </div>
      <!-- end footer -->

     <div class="form">
         <p>welcome <?php echo $_SESSION['username'];?></p>
         <p></p>
         

     </div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 </body>
 </html>