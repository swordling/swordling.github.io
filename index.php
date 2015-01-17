<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="wrapper">
            <section id="home" data-anchor="home">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" data-scroll="home">Home <span class="sr-only">(current)</span></a></li>
                                <li><a href="#get" data-scroll="get">Get</a></li>
                                <li><a href="#about" data-scroll="about">About</a></li>
                                <li><a href="#support" data-scroll="support">Support</a></li>
                                <li><a href="#contact" data-scroll="contact">Contact Us</a></li>
                                <li><a href="#login" role="button" data-toggle="modal"><i class="fa fa-sign-in"></i>&nbsp; Log in</a></li>
                                <li><a href="#signup" role="button" data-toggle="modal"><i class="fa fa-pencil"></i>&nbsp; Sign up</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <div class="container">
                    <h1>Twitch Moderation Console</h1>
                    <p>Twitch moderation simplified.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <form action="#get">
                                <button type="submit" class="home-rdir"><i class="fa fa-angle-down"></i>&nbsp; Learn more</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form action="#">
                                <button type="button" data-toggle="modal" data-target="#signup" class="home-rdir"><i class="fa fa-pencil"></i>&nbsp; Sign up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section id="get" data-anchor="get">
                <div class="container">
                    <h2 class="text-center fancy"><span>Get</span></h2>
                    <p class="text-center">Twitch.tv Moderation Console is only avaliable on Windows at the moment. Other platforms are planned for development in future versions.</p>
                    <div class="get row">
                        <div class="col-md-6">
                            <div class="get-windows">
                                <h3 class="text-center"><i class="fa fa-windows fa-5x"></i></h3>
                            </div>
                            <div class="get-get">
                                <h4 class="text-center"><a href="_/" download="">Windows XP and Later</a></h4>
                                <p class="text-center">X64</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="get-windows">
                                <h3 class="text-center"><i class="fa fa-windows fa-5x"></i></h3>
                            </div>
                            <div class="get-get">
                                <h4 class="text-center"><a href="_/" download="">Windows XP and Later</a></h4>
                                <p class="text-center">X86</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="about" data-anchor="about">
                <div class="container">
                    <h2 class="text-center fancy"><span>About</span></h2>
                    <p class="text-center">It’s designed by a Twitch streamer for Twitch streamers to simplify the hassle of moderating the chat.</p>
                    <div class="about row">
                        <div class="col-md-6">
                            <div class="about-p">
                                <p class="void">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius dolor nisi, sit amet luctus dolor luctus vitae. Integer venenatis nulla id sapien pharetra facilisis. Aliquam sodales congue ex vitae viverra. Sed porttitor ultrices eros, at mattis elit ultrices vitae. Maecenas accumsan purus nec risus porttitor, eget ultrices ipsum ultrices. Quisque laoreet tortor imperdiet tellus ullamcorper ultricies. Sed volutpat eros hendrerit consequat lobortis. Etiam risus justo, eleifend dapibus ante ut, efficitur bibendum felis. Nulla mollis porttitor pretium. Nam nec risus ut nunc varius vulputate nec eget ante.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-img">
                                <img src="http://placehold.it/364x240" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="support" data-anchor="support">
                <div class="container">
                    <h2 class="text-center fancy"><span>Support</span></h2>
                    <p class="text-center">It’s super super easy to use! But if you do get stuck feel free to view our dedicated support Wiki.</p>
                    <div class="support row">
                        <form action="https://support.example.com">
                                <button type="submit" class="wiki"><i class="fa fa-support"></i>&nbsp; Go to Wiki</button>
                        </form>
                        <p class="text-center">Visit our Wiki to get help with the software or interact with other users. Clicking the button will redirct you to support.example.com</p>
                    </div>
                </div>
            </section>
            
            <section id="contact" data-anchor="contact">
                <div class="container">
                    <h2 class="text-center fancy"><span>Contact us</span></h2>
                    <p class="text-center">Whether you’re interested in developing for us, partnering with us, or just need some help, we’re always listening. Please allow up to a few days for a response to your request.</p>
                    <div class="row">
                        <p>Contact form</p>
                    </div>
                </div>
            </section>
            
            <section id="footer">
                <div class="footer-left">
                    <p>&copy; First Last</p>
                </div>
                <div class="footer-right">
                    <p>Terms · Twitter · Github</p>
                </div>
            </section>
            
            <!-- Modal -->
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Log in</h4>
                      </div>
                      <div class="modal-body">
                        <form>
                              <div class="form-group">
                                <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Username">
                              </div>
                              <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Remember me
                                </label>
                              </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Sign in</button>
                      </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Sign up</h4>
                      </div>
                      <div class="modal-body">
                        <form>
                              <div class="form-group">
                                <input type="name" class="form-control" id="exampleInputUsername" placeholder="Username">
                              </div>
                              <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                              </div>
                              <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> I agree to the <a href="#">Terms of Service.</a>
                                </label>
                              </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Sign in</button>
                      </div>
                    </div>
                </div>
            </div>
        
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/contact_me.js"></script>
    </body>
</html>