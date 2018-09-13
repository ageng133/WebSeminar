<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>asset/backend/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container" style="margin-top: 100px">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Login Admin</h3>
            </div>
            <div class="panel-body">
              <?php echo validation_errors('<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>'); ?>
              <form method="post" action="<?= base_url('login/aksi_login')?>">
                <div class="form-group">
                  <label for="email">Username:</label>
                  <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
                <input type="submit" class="btn btn-primary btn-block" value="Login">
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url()?>asset/backend/js/jquery.min.js"></script>
    <script src="<?=base_url()?>asset/backend/js/bootstrap.min.js"></script>
    <script>
    </script>
  </body>
</html>
