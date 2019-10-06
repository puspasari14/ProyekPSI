<?php include_once ('template_atas.php'); ?>
<?php include_once ('controler/connect.php'); ?>
<!DOCTYPE html>

    <link rel="stylesheet" href="vendor/bootstrap/css/datap.css" type="text/css" media="screen" />
    <script src="vendor/bootstrap/js/functions.js" type="text/javascript"></script> 
<script src="vendor/jquery/jquery.min.js"></script>
 <script>
    
     // When the document loads do everything inside here ...
     $(document).ready(function(){
        
       // When a link is clicked
       $("a.tab").click(function () {
            
           // switch all tabs off
           $(".active").removeClass("active");
            
           // switch this tab on
           $(this).addClass("active");
            
           // slide all elements with the class 'content' up
           $(".content").slideUp();
            
           // Now figure out what the 'title' attribute value is and find the element with that id.  Then slide that down.
           var content_show = $(this).attr("title");
           $("#"+content_show).slideDown();
          
       });
    
     });
 </script>
<div id="tabbed_box_1" class="tabbed_box">
	<div>
    <h2>TRANSAKSI PEMBELIAN </h2>
    </div>
    <div class="tabbed_area">
     
        <ul class="tabs">
    <li><a href="#" title="content_1" class="tab active">Data Pelanggan</a></li>
    <li><a href="#" title="content_2" class="tab">Transaksi</a></li>
    
</ul>
         
        <div id="content_1" class="content">
       <form action="simpancustomer.php" method="post" enctype="multipart/form-data">
           <div class="form-group">
    <label for="exampleFormControlInput1">Nama Anda</label>
    <input type="nama" name="nama"class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
           <div class="form-group">
    <label for="exampleFormControlInput1">Alamat Email </label>
    <input type="email" name="email"class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
           <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea class="form-control" name="alamat"id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
 <button type="submit" class="btn btn-primary btn-lg btn-block" value="simpan" name="simpan">SIMPAN DATA</button>
  <button type="reset" class="btn btn-danger btn-lg btn-block" value="reset" name="batal">BATAL</button>
       </form>
        </div>
        <div id="content_2" class="content">
           
        </div>
        
     
    </div>
 
</div>

    <?php include_once ('template_bawah.php'); ?>
