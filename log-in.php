<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

    <style>
	    body{font-family: 'PT Sans', sans-serif; background: #2c3e50;}
    </style>
    
  </head>
  <body>

  <?php session_start(); ?>

  <?php require_once 'connect.php'; ?>
  <?php require_once 'check_login.php'; ?>

  <?php if (isset($_SESSION['message'])): ?>

    <div class ="alert alert-<?=$_SESSION['msg_type']?>">

        <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message'])
        ?>

    </div>
    <?php endif ?>

    <br />
    <div class="containter">
        <div class="jumbotron d-flex justify-content-center  m-5">
            
            <form method="post">
            <div class="title">
                <h1>Hello,</h1>
                <h2>Please log in</h2>
            </div>
                
                    <div class = "row">
                        <div class="form-group m-3">
                            <label for="username">Username:</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group m-3">
                            <label for="password">Password: </label>
                            <input type="password" name="password" class="form-control">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div  class="ml-3">
                            <input type="submit" name="login" class="btn btn-primary">
                        </div>
                    </div>

                    <?php if(isset($message)){
                        echo '<label class="text-danger m-0 mt-1 p-0">'.$message.'</label>';
                    }?>
                
            </form>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>