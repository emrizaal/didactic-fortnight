<?php include("/../header.php"); ?>
  <body class="bglogin">
	<div class="container" style="padding-top:10%">
		<div id="myModals" class="modal-fade">
			<div class="modal-dialog" style="width:33%">
				<div class="modal-content">
					<div class="modal-header">
						<h4>Login Admin</h4>
					</div>
					<div class="modal-body">
						<?php echo form_open('admin/login_admin'); 
						 if(isset($error) && $error) {
							echo "<p class='bg-danger text-danger' style='padding:10px; border-radius:4px'>Username dan Password yang Anda masukkan salah!</p><br>";
						  }
						?>
						
						<form class="form-inline">
						  <div class="form-group">
							<div class="input-group">
							  <div class="input-group-addon"><i class="fa fa-user-circle-o" aria-hidden="true" title="Username"></i></div>
							  <input type="text" name="username" placeholder="Username" required class="form-control">
							</div>
						  </div>
						  <div class="form-group">
							<div class="input-group">
							  <div class="input-group-addon"><i class="fa fa-key" aria-hidden="true" title="Password"></i></div>
							  <input type="password" name="password" placeholder="Password" required class="form-control">
							</div>
						  </div>
						<div style="text-align: right">
							<input type="submit" name="submit" value="Login" class="btn btn-primary">
							<?php echo form_close(); ?>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
  </body>
</html>
