<!-- start show product detail -->
<div class="container">
  <div class="row" align="left">
  	<h3 align="center"> แสดงรายละเอียดสินค้า </h3>
    <div class="col-xs-12 col-sm-4 col-md-4">
      <!-- show product img -->
    <img src="img/<?php echo $row_showproduct['p_img']; ?>" width="100%" class="img-thumbnail"> 
    </div>
    
    <div class="col-xs-12 col-sm-8 col-md-8">
      <!-- show product detail -->
      <h3> <?php echo $row_showproduct['p_name']; ?> 
        
      <font color="blue">
      <?php echo number_format($row_showproduct['p_price'],2); ?>  
      </font>
      บาท 

      &nbsp; 
        <a href="#" class="btn btn-info"> 
        <span class="glyphicon glyphicon-shopping-cart"> </span>  
         หยิบใส่ตะกร้า  
         </a>
      
        
       </h3 
      <p style="font-size: 13pt">
      <b> รายละเอียดสินค้า :</b> <?php echo $row_showproduct['p_detail']; ?> 
      </p>
      <p align="left">      
      <span class="glyphicon glyphicon-eye-open"> </span>  
       &nbsp; <span class="badge"><?php echo $row_showproduct['p_view']; ?>  </span> &nbsp; ครั้ง
       </p>

  <!-- อันนี้ต้องสมัครเองนะครับ  -->     
  <p align="right">
    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5500ee80057fdb99"></script> 

    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
    <div class="addthis_inline_share_toolbox_r64r"></div>
      </p>
  
    </div>    
  </div>
</div>
<!-- end show product detail -->