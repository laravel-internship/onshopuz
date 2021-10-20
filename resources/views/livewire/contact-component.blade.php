<div><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>E-Commerce - MDBootstrap</title>

  <!-- Font Awesome -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('assets/css/bootstrap.min.css" rel="styl')}}esheet">

  <!-- Material Design Bootstrap -->
  <link href="{{asset('assets/css/mdb.min.css" rel="stylesheet')}}">
  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
</style>
</head>

<body class="hidden-sn white-skin animated">

  <!--Navigation-->
  
    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav custom-scrollbar">
      <!-- Logo -->
      <li>
        <!-- <div class="logo-wrapper waves-light">
          <a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center"></a>
        </div> -->
      </li>
      <!--/. Logo -->
      <!--Social-->
      <!-- <li>
        <ul class="social">
          <li><a class="fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
          <li><a class="pin-ic"><i class="fab fa-pinterest"> </i></a></li>
          <li><a class="gplus-ic"><i class="fab fa-google-plus-g"> </i></a></li>
          <li><a class="tw-ic"><i class="fab fa-twitter"> </i></a></li>
        </ul>
      </li> -->
      <!--/Social-->
      <!--Search Form-->
      <!-- <li>
        <form class="search-form" role="search">
          <div class="form-group md-form mt-0 pt-1 waves-light">
            <input type="text" class="form-control" placeholder="Search">
          </div>
        </form>
      </li> -->
      <!--/.Search Form-->
      <!-- Side navigation links -->
      
    
          <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
        </div>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
             
            </li>
          </ul>
        </div>
      </div>
    </nav>
  

  <section>
      <!--Google map-->
      <div id="map-container" class="z-depth-1-half map-container" style="height: 500px">
        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0"
          allowfullscreen></iframe>
      </div>
  </section>

  <!--Main Layout-->
  <main>

    <div class="container-fluid mb-5">

      <!--Grid row-->
      <div class="row" style="margin-top: -140px;">

        <!--Grid column-->
        <div class="col-md-12">
            <div class="card pb-5">
            <div class="card-body">

              <div class="container">

                <!-- Section: Contact v.3 -->
                <section class="contact-section my-5">

                  <!-- Form with header -->
                  <div class="card">

                    <!-- Grid row -->
                    <div class="row">

                      <!-- Grid column -->
                      <div class="col-lg-8">

                        <div class="card-body form">

                          <!-- Header -->
                          <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>

                          <!-- Grid row -->
                          <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6">
                              <div class="md-form mb-0">
                                <input type="text" id="form-contact-name" class="form-control">
                                <label for="form-contact-name" class="">Your name</label>
                              </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                              <div class="md-form mb-0">
                                <input type="text" id="form-contact-email" class="form-control">
                                <label for="form-contact-email" class="">Your email</label>
                              </div>
                            </div>
                            <!-- Grid column -->

                          </div>
                          <!-- Grid row -->

                          <!-- Grid row -->
                          <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6">
                              <div class="md-form mb-0">
                                <input type="text" id="form-contact-phone" class="form-control">
                                <label for="form-contact-phone" class="">Your phone</label>
                              </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                              <div class="md-form mb-0">
                                <input type="text" id="form-contact-company" class="form-control">
                                <label for="form-contact-company" class="">Your company</label>
                              </div>
                            </div>
                            <!-- Grid column -->

                          </div>
                          <!-- Grid row -->

                          <!-- Grid row -->
                          <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12">
                              <div class="md-form mb-0">
                                <textarea type="text" id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                                <label for="form-contact-message">Your message</label>
                                <a class="btn-floating btn-lg blue">
                                  <i class="far fa-paper-plane"></i>
                                </a>
                              </div>
                            </div>
                            <!-- Grid column -->

                          </div>
                          <!-- Grid row -->

                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-lg-4">

                        <div class="card-body contact text-center h-100 white-text">

                          <h3 class="my-4 pb-2">Contact information</h3>
                          <ul class="text-lg-left list-unstyled ml-4">
                            <li>
                              <p><i class="fas fa-map-marker-alt pr-2 mb-4"></i>New York, 94126, USA</p>
                            </li>
                            <li>
                              <p><i class="fas fa-phone pr-2 mb-4"></i>+ 01 234 567 89</p>
                            </li>
                            <li>
                              <p><i class="fas fa-envelope pr-2"></i>contact@example.com</p>
                            </li>
                          </ul>
                          <hr class="hr-light my-4">
                          <ul class="list-inline text-center list-unstyled">
                            <li class="list-inline-item">
                              <a class="p-2 fa-lg tw-ic">
                                <i class="fab fa-twitter"></i>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a class="p-2 fa-lg li-ic">
                                <i class="fab fa-linkedin-in"> </i>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a class="p-2 fa-lg ins-ic">
                                <i class="fab fa-instagram"> </i>
                                </a>
                            </li>
                          </ul>

                        </div>

                      </div>
                      <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                  </div>
                  <!-- Form with header -->

                </section>
                <!-- Section: Contact v.3 -->

              </div>

            </div>
          </div>
        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>

  </main>
  <!--Main Layout-->



          <button class="btn btn-primary btn-rounded btn-sm">Checkout</button>

        </div>
        <!--Footer-->
        <div class="modal-footer">
          <button type="button" class="btn btn-grey btn-rounded btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- /.Cart Modal -->



     
  <!-- SCRIPTS -->

  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>

  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script>

  <script src="https://maps.google.com/maps/api/js"></script>
  <script type="text/javascript">
    /* WOW.js init */
    new WOW().init();

    // MDB Lightbox Init
    $(function () {
      $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });

    // Tooltips Initialization
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

  </script>
  <script>
    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });

  </script>

  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

  </script>
</body>

</html>
</div>  

