<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <?php
      if(isset($error) && $error) {
        echo "Error";
      }
    ?>
    <?php echo form_open('admin/login_admin'); ?>
      <input type="text" name="username" placeholder="Masukkan Username" required>
      <input type="password" name="password" placeholder="Masukkan Password" required>
      <input type="submit" name="submit" value="Login">
    <?php echo form_close(); ?>
  </body>
</html>
