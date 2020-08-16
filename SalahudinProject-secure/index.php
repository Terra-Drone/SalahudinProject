<!DOCTYPE html>
<html class=" -webkit-"><head>
  <meta charset="UTF-8">

	<title>SIGN IN</title>
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:200" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="../js/bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
  @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

  <script src="js/prefixfree.min.js"></script>
  <script src="js/scriptRegex.js"></script>
  <link rel="stylesheet" href="css/indexStyle.css">

</head>

<body>
  <div class="body"></div>
	<div class="grad"></div>
	<div class="header">
    <main>
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

      <div class="marker"></div>
        <h1 class="s">S</h1>
        <h1 class="m">M</h1>
        <h1 class="a">A</h1>
        <h1 class="r1">R</h1>
        <h1 class="t1">T</h1>
        <h1 class="t2">t</h1>
        <h1 class="u">U</h1>
        <h1 class="t3">T</h1>
        <h1 class="o">O</h1>
        <h1 class="rr">R</h1>
      </main>
      <br><br>
	</div>

  <br><br>
  <div class="container">
    <hr>
    <div class="row">
      <div class="col-md-6">
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
          <div id="result"></div>
        </div>
      </div>

      <div class="col-md-6 sign-up">
      <div class="panel">
        <div class="panel-heading"><h3 class="panel-title text-center">SIGN UP</h3></div>
          <!--Sign Up-->
          <div class="panel-body">
            <form id="sign-up-frm" role="form" method="post" action="" class="form-horizontal">
            <!--Name-->
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon addon-diff-color">
                  <span class="glyphicon glyphicon-user"></span>
                </div>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="Full Name">
              </div>
            </div>
            <!--Phone Number-->
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon addon-diff-color">
                  <span class="glyphicon glyphicon-earphone"></span>
                </div>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number">
                        </div>
                      </div>

                      <!--Email-->
                      <div class="form-group">
                        <div class="input-group">
                                  <div class="input-group-addon addon-diff-color">
                                      <span class="glyphicon glyphicon-envelope"></span>
                                  </div>
                            <input type="email" class="form-control" id="uemail" name="uemail" placeholder="Email Address">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group">
                                  <div class="input-group-addon addon-diff-color">
                                      <span class="glyphicon glyphicon-lock"></span>
                                  </div>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="input-group">
                                  <div class="input-group-addon addon-diff-color">
                                      <span class="glyphicon glyphicon-lock"></span>
                                  </div>
                            <input type="password" class="form-control" id="cfm_pass" name="cfm_pass" placeholder="Confirm Password">
                          </div>
                      </div>

                      <!--Submit-->
                      <div class="form-group">
                          <input type="submit" value="REGISTER" class="btn btn-warning btn-block" id="register" name="register">
                      </div>
                      <div class="form-group">
                                <div class="col-md-12 control">
                                    <div class="subtext" >
                                        Already have an account?
                                        <a href="#" onClick="$('.sign-up').hide(); $('.sign-in').show()">
                                            Sign in Here.
                                        </a>
                                    </div>
                                </div>
                            </div>
                </form>
            </div>
        </div>
        </div>

        <!--Sign In-->
        <div class="col-md-6 sign-in">
        <div class="panel">
          <div class="panel-heading">
              <h3 class="panel-title text-center">SIGN IN</h3>
              <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#" onClick="$('.sign-in').hide(); $('.forgot-pass').show()">Forgot Password?</a></div>
          </div>

            <div class="panel-body">
            <form id="sign-in-frm" role="form" method="post" action="" class="form-horizontal">
                      <div class="form-group">
                        <div class="input-group">
                                  <div class="input-group-addon addon-diff-color">
                                      <span class="glyphicon glyphicon-envelope"></span>
                                  </div>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                                  <div class="input-group-addon addon-diff-color">
                                      <span class="glyphicon glyphicon-lock"></span>
                                  </div>
                            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                          </div>
                      </div>

                      <div class="form-group">
                          <input type="submit" value="Login" class="btn btn-warning btn-block" id="login" name="login">
                      </div>
                      <div class="form-group">
                                <div class="col-md-12 control">
                                    <div class="subtext" >
                                    <a href="#" onClick="$('.sign-in').hide(); $('.sign-up').show()">
                                        Sign Up Here
                                    </a>
                                    </div>
                                </div>
                            </div>
                </form>
            </div>
        </div>
        </div>

        <div class="col-md-6 col-md-offset-3 forgot-pass">
        <div class="panel">
          <div class="panel-heading">
              <h3 class="panel-title text-center">RECOVER YOUR PASSWORD</h3>
              <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#" onClick="$('.forgot-pass').hide(); $('.sign-in').show()">Sign In</a></div>
          </div>
            <div class="panel-body">
            <form id="forgot-pass-frm" role="form" method="post" action="" class="form-horizontal">
                      <div class="form-group">
                        <div class="input-group">
                                  <div class="input-group-addon addon-diff-color">
                                      <span class="glyphicon glyphicon-envelope"></span>
                                  </div>
                            <input type="email" class="form-control" id="remail" name="remail" placeholder="Email Address">
                        </div>
                      </div>
                      <div class="form-group">
                          <input type="submit" value="GENERATE NEW PASSWORD" class="btn btn-warning btn-block" id="reset" name="reset">
                      </div>
                </form>
            </div>
        </div>
        </div>
    </div>
  </div>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="Home.html">Start Learning</a>
    <a href="AboutUs.html">About Us</a>
    <a href="ContactUs.html">Contact</a>
    <a href="FAQ.html">FAQ</a>
    <a href="Forum.html">Forum</a>
    <br>

    <div class="bigicon">
      <a href="https://accounts.google.com/ServiceLogin"> <i class="fa fa-google-square fa-0.5x"></i></a>
      <a href="https://www.instagram.com/?hl=en"> <i class="fa fa-instagram-square fa-0.5x"></i></a>
      <a href="https://twitter.com/login?lang=en"> <i class="fa fa-twitter-square fa-0.5x"></i></a>
      <a href="https://facebook.com/"> <i class="fa fa-facebook-square fa-0.5x"></i></a>
    </div>
  </div>

  <script>
  let click = document.querySelector(".click");
  click.onclick = function() {

  };
    function openNav() {
   document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
   document.getElementById("mySidenav").style.width = "0";
  }
  </script>

  <script src="http://codepen.io/assets/libs/fullpage/jquery.js">
  // Get the modal
  var modal = document.getElementById('id01');

  window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
}
}
</script>
</body>
</html>
