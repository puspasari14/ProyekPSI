<?php include_once ('template_atas.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Nyekrip Form Login</title>
	
	<!-- Skrip CSS -->
   <link rel="stylesheet" href="style.css"/>
  
  </head>	
  <body>
 
   <div class="container">
  <h2>Klik masuk untuk login</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Masuk</button>
 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center">LOGIN OWNER</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
 
        <div class="modal-body">
          <div class="row">
              <div class="col-sm-6 col-sm-offset-3 form-box">
                <div class="form-top">
                    <h3>Silahkan Login</h3>
                      <p>Masukan Userid dan password anda:</p>
                </div>
 
                <div class="form-bottom">
                <form role="form" action="" method="post" class="login-form">
                  <div class="form-group">
                    <label class="sr-only" for="form-userID">userid</label>
                      <input type="text" name="form-userID" placeholder="UserID..." class="form-userID form-control" id="form-userID">
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="form-password">Password</label>
                      <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                    </div>
                    <button type="submit" class="btn masuk">Masuk!</button>
                </form>
              </div>
              </div>
          </div>
        </div>
 
        <div class="modal-footer">
          <button type="button" class="btn btn-default tutup" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
	
   </div>
 
  </body>
</html>

<?php include_once ('template_bawah.php'); ?>