<div>
    <div class="row pt-4">

        <!-- Sidebar -->
        <div class="col-lg-3">

            <div class="">
                <!-- Grid row -->
                <div class="row">
                    <div class="col-md-6 col-lg-12 mb-5">
                        <!-- Panel -->
                        <h5 class="font-weight-bold dark-grey-text"><strong>Order By</strong></h3>
                            <div class="divider"></div>

                            <p class="blue-text"><a>Default</a></p>
                            <p class="dark-grey-text"><a>Popularity</a></p>
                            <p class="dark-grey-text"><a>Average rating</a></p>
                            <p class="dark-grey-text"><a>Price: low to high</a></p>
                            <p class="dark-grey-text"><a>Price: high to low</a></p>
                    </div>

                    <!-- Filter by category-->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <h5 class="font-weight-bold dark-grey-text"><strong>Category</strong></h3>
                            <div class="divider"></div>

                            <!--Radio group-->
                            <div class="form-group ">
                                <input class="form-check-input" name="group100" type="radio" id="radio100">
                                <label for="radio100" class="form-check-label dark-grey-text">All</label>
                            </div>

                            <div class="form-group">
                                <input class="form-check-input" name="group100" type="radio" id="radio101" checked>
                                <label for="radio101" class="form-check-label dark-grey-text">Laptop</label>
                            </div>

                            <div class="form-group">
                                <input class="form-check-input" name="group100" type="radio" id="radio102">
                                <label for="radio102" class="form-check-label dark-grey-text">Smartphone</label>
                            </div>

                            <div class="form-group">
                                <input class="form-check-input" name="group100" type="radio" id="radio103">
                                <label for="radio103" class="form-check-label dark-grey-text">Tablet</label>
                            </div>

                            <div class="form-group">
                                <input class="form-check-input" name="group100" type="radio" id="radio104">
                                <label for="radio104" class="form-check-label dark-grey-text">Headphones</label>
                            </div>
                            <!--Radio group-->
                    </div>
                    <!-- /Filter by category-->
                </div>
                <!-- /Grid row -->

                <!-- Grid row -->
                <div class="row">

                    <!-- Filter by price  -->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <h5 class="font-weight-bold dark-grey-text"><strong>Price</strong></h3>
                            <div class="divider"></div>

                            <form class="range-field mt-3">
                                <input id="calculatorSlider" class="no-border" type="range" value="0" min="0"
                                    max="30" />
                            </form>

                            <!-- Grid row -->
                            <div class="row justify-content-center">

                                <!-- Grid column -->
                                <div class="col-md-6 text-left">
                                    <p class="dark-grey-text"><strong id="resellerEarnings">0$</strong></p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 text-right">
                                    <p class="dark-grey-text"><strong id="clientPrice">319$</strong></p>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->

                    </div>
                    <!-- /Filter by price -->

                    <!-- Filter by rating -->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <h5 class="font-weight-bold dark-grey-text"><strong>Rating</strong></h3>
                            <div class="divider"></div>
                            <div class="row ml-1">
                                <!-- Rating -->
                                <ul class="rating mb-0">
                                    <li><i class="fas fa-star blue-text"></i></li>
                                    <li><i class="fas fa-star blue-text"></i></li>
                                    <li><i class="fas fa-star blue-text"></i></li>
                                    <li><i class="fas fa-star blue-text"></i></li>
                                    <li><i class="fas fa-star blue-text"></i></li>
                                    <li>
                                        <p class="ml-3 dark-grey-text"><a>4 and more</a></p>
                                    </li>
                                </ul>

                            </div>

                            <div class="row ml-1">
                                <!-- Rating -->
                                <ul class="rating mb-0">
                                    <li><i class="fas fa-star blue-text"></i></li>
                                    <li><i class="fas fa-star blue-text"></i></li>
                                    <li><i class="fas fa-star blue-text"></i></li>
                                    <li><i class="fas fa-star blue-text"></i></li>
                                    <li><i class="fas fa-star grey-text"></i></li>
                                    <li>
                                        <p class="ml-3 dark-grey-text"><a>3 - 3,99</a></p>
                                    </li>
                                </ul>

                            </div>

                            <div class="row ml-1">
                                <!-- Rating -->
                                <ul class="rating">
                                    <li><i class="fas fa-star blue-text"></i></li>
                                    <li><i class="fas fa-star blue-text"></i></li>
                                    <li><i class="fas fa-star blue-text"></i></li>
                                    <li><i class="fas fa-star grey-text"></i></li>
                                    <li><i class="fas fa-star grey-text"></i></li>
                                    <li>
                                        <p class="ml-3 dark-grey-text"><a>3.00 and less</a></p>
                                    </li>
                                </ul>

                            </div>
                    </div>
                    <!-- Filter by rating -->
                </div>
                <!-- /Grid row -->
            </div>

        </div>
        <!-- /.Sidebar -->

        <!-- Content -->
        <div class="col-lg-9">

            <!-- Filter Area -->
            <div class="row">

                <div class="col-md-4 mt-3">

                    <!-- Sort by -->
                    <select class="mdb-select grey-text md-form" multiple>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label>Example label</label>
                    <button class="btn-save btn btn-primary btn-sm">Save</button>
                    <!-- /.Sort by -->

                </div>
                <div class="col-md-8 text-right">

                    <!-- View Switcher -->
                    <a class="btn btn-blue-grey btn-sm"><i class="fas fa-th mr-2" aria-hidden="true"></i><strong>
                            Grid</strong></a>
                    <a class="btn btn-blue-grey btn-sm"><i class="fas fa-th-list mr-2" aria-hidden="true"></i><strong>
                            List</strong></a>
                    <!-- /.View Switcher -->

                </div>

            </div>
            <!-- /.Filter Area -->

            <!-- Products Grid -->
            <section class="section pt-4">
                @if ($products)
                @foreach ($products as $item)
                <!-- Grid row -->
                <div class="row">

                    <!--Grid column-->

                            <div class="col-lg-4 col-md-12 mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img src="{{$item->image}}"
                                            class="img-fluid" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Category & Title-->

                                        <h5 class="card-title mb-1"><strong><a href=""
                                                    class="dark-grey-text">{{$item->name}}</a></strong></h5><span
                                            class="badge badge-danger mb-2">{{($item->status==1)? 'action': 'noaction'}}</span>
                                        <!-- Rating -->
                                        <ul class="rating">
                                            <li><i class="fas fa-star blue-text"></i></li>
                                            <li><i class="fas fa-star blue-text"></i></li>
                                            <li><i class="fas fa-star blue-text"></i></li>
                                            <li><i class="fas fa-star blue-text"></i></li>
                                            <li><i class="fas fa-star blue-text"></i></li>
                                        </ul>

                                        <!--Card footer-->
                                        <div class="card-footer pb-0">
                                            <div class="row mb-0">
                                                <span class="float-left"><strong>{{$item->price}} $</strong></span>
                                                <span class="float-right">

                                                    <a class="" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Cart"><i
                                                            class="fas fa-shopping-cart ml-3"></i></a>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            {{-- <div class="col-lg-4 col-md-6 mb-4">
                                        <!--Card-->
                                        <div class="card card-ecommerce">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/15.jpg" class="img-fluid" alt="">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--Card image-->

                                            <!--Card content-->
                                            <div class="card-body">
                                                <!--Category & Title-->

                                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Sony T56-v</a></strong></h5><span class="badge badge-info mb-2">new</span>
                                                <!-- Rating -->
                                                <ul class="rating">
                                                    <li><i class="fas fa-star blue-text"></i></li>
                                                    <li><i class="fas fa-star blue-text"></i></li>
                                                    <li><i class="fas fa-star blue-text"></i></li>
                                                    <li><i class="fas fa-star blue-text"></i></li>
                                                    <li><i class="fas fa-star blue-text"></i></li>
                                                </ul>

                                                <!--Card footer-->
                                                <div class="card-footer pb-0">
                                                    <div class="row mb-0">
                                                        <span class="float-left"><strong>1439$</strong></span>
                                                        <span class="float-right">

                                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart ml-3"></i></a>
                                                            </span>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--Card content-->

                                        </div>
                                        <!--Card-->

                                    </div> --}}
                            <!--Grid column-->

                            <!--Grid column-->
                            {{-- <div class="col-lg-4 col-md-6 mb-4">

                                        <!--Card-->
                                        <div class="card card-ecommerce">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" class="img-fluid" alt="">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--Card image-->

                                            <!--Card content-->
                                            <div class="card-body">
                                                <!--Category & Title-->

                                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Headphones</a></strong></h5><span class="badge badge-danger mb-2">bestseller</span>
                                                <!-- Rating -->
                                                <ul class="rating">
                                                    <li><i class="fas fa-star blue-text"></i></li>
                                                    <li><i class="fas fa-star blue-text"></i></li>
                                                    <li><i class="fas fa-star blue-text"></i></li>
                                                    <li><i class="fas fa-star blue-text"></i></li>
                                                    <li><i class="fas fa-star grey-text"></i></li>
                                                </ul>

                                                <!--Card footer-->
                                                <div class="card-footer pb-0">
                                                    <div class="row mb-0">
                                                        <span class="float-left"><strong>1439$</strong></span>
                                                        <span class="float-right">

                                                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart ml-3"></i></a>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--Card content-->

                                        </div>
                                        <!--Card-->

                                    </div> --}}
                            <!--Grid column-->

                </div>
                @endforeach
                @endif    
                <!--Grid row-->

                {{-- <!-- Grid row -->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Samsung CT-567</a></strong></h5><span class="badge grey mb-2">best rated</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left"><strong>1439$</strong></span>
                                            <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart ml-3"></i></a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Sony TV-675</a></strong></h5><span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star grey-text"></i></li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left"><strong>1439$</strong></span>
                                            <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart ml-3"></i></a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Dell V-964i</a></strong></h5><span class="badge badge-info mb-2">new</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left"><strong>1439$</strong></span>
                                            <span class="float-right">

                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart ml-3"></i></a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!-- Grid row -->
                    <div class="row mb-3">

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Samsung V54</a></strong></h5><span class="badge grey mb-2">best rated</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left"><strong>1439$</strong></span>
                                            <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart ml-3"></i></a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Dell 786i</a></strong></h5><span class="badge badge-info mb-2">new</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star grey-text"></i></li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left"><strong>1439$</strong></span>
                                            <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart ml-3"></i></a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Canon 675-D</a></strong></h5><span class="badge badge-info mb-2">new</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left"><strong>1439$</strong></span>
                                            <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart ml-3"></i></a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->

                    </div> --}}
                <!--Grid row-->

                <!--Grid row-->
                <div class="row justify-content-center mb-4">

                    <!--Pagination -->
                    <nav class="mb-4">
                        <ul class="pagination pagination-circle pg-blue mb-0">

                            <!--First-->
                            <li class="page-item disabled clearfix d-none d-md-block"><a
                                    class="page-link waves-effect waves-effect">First</a></li>

                            <!--Arrow left-->
                            <li class="page-item disabled">
                                <a class="page-link waves-effect waves-effect" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>

                            <!--Numbers-->
                            <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

                            <!--Arrow right-->
                            <li class="page-item">
                                <a class="page-link waves-effect waves-effect" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>

                            <!--First-->
                            <li class="page-item clearfix d-none d-md-block"><a
                                    class="page-link waves-effect waves-effect">Last</a></li>

                        </ul>
                    </nav>
                    <!--/Pagination -->

                </div>
                <!--Grid row-->
            </section>

            <!-- /.Products Grid -->

        </div>
        <!-- /.Content -->

    </div>
</div>
