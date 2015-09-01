<?php
$to = 'dpqwerty100@gmail.com';
$subject = 'A request from your website';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['msg'];

$message = <<<EMAIL

Hi This is $name here
$message
From $name
My email is $email

EMAIL;

$header = 'hello';

if(_POST){
    mail($to,$subject,$message,$header);
}
?>

<!doctype html>
  <html>
    <head>
        <title>BjsCity.com </title>
        <link rel="stylesheet" type="text/css" href="dead.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="shortcut icon" type="image/x-icon" href="/BC.ico">
    </head>
    <body background="Error.jpg">


           <header class="navbar-inverse">
            <div class="container">
              <nav role="navigation">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://bjscity.netne.net">BjsCity</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="https://www.youtube.com/channel/UCY6MxIJmfSnAfXWw8M58klA">My Channel </a><span class="sr-only">(current)</span></a></li>
        <li><a href="#"></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Videos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="videos.html">Page 1</a></li>
            <li><a href="NextPage.html">Page 2</a></li>
            <li><a href="3page.html">Page3</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Blogs</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Games</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Enter</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">About Bjs City</a></li>
        <li><a href="#request" data-toggle="modal">Send Request</a></li>

          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
  </nav>
 </div>
</header>


       <div class="modal fade" id="request" role="dialog">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <h4 align="center">
                 Enter Your Request Here
               </h4>
               <div class="modal-body">

                 <form action="?" method="post" class="form-horizontal">
  <div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name" placeholder="Name">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
    </div>
  </div>

  <div class="form-group">
    <label for="msg" class="col-sm-2 control-label">Message:</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="msg" id="msg" rows="8"></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Pledge not to send mean comments.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Send</button>
    </div>
  </div>
</form>
               </div>
               <div class="modal-footer"><a class="btn btn-warning" data-dismiss="modal">Cancel</a></div>
             </div>
           </div>
         </div>
       </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </body>
  </html>
