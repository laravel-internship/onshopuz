<div>
    <div class="row pt-4">

        <!-- Content -->
        <div class="col-lg-12">

            <!-- Categories & Adv -->
            <section class="section pt-2">

                <!-- Grid row -->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <!-- Section: Categories -->
                        <section class="section">

                            <ul class="list-group z-depth-1">

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a class="dark-grey-text font-small">
                                        <i class="fas fa-laptop dark-grey-text mr-2" aria-hidden="true"></i> Laptops</a>
                                    <a href=""></a>
                                    <span class="badge badge-danger badge-pill">43</span>
                                    </a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a class="dark-grey-text font-small">
                                        <i class="fas fa-mobile-alt dark-grey-text mr-3" aria-hidden="true"></i> Smartphone</a>
                                    <span class="badge badge-danger badge-pill">32</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a class="dark-grey-text font-small">
                                        <i class="fas fa-tablet-alt dark-grey-text mr-3" aria-hidden="true"></i> Tablet</a>
                                    <span class="badge badge-danger badge-pill">18</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a class="dark-grey-text font-small">
                                        <i class="fas fa-headphones-alt dark-grey-text mr-3" aria-hidden="true"></i>Heahphones</a>
                                    <span class="badge badge-danger badge-pill">37</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a class="dark-grey-text font-small">
                                        <i class="fas fa-camera-retro dark-grey-text mr-3" aria-hidden="true"></i>Camera</a>
                                    <span class="badge badge-danger badge-pill">15</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a class="dark-grey-text font-small">
                                        <i class="fas fa-suitcase dark-grey-text mr-3" aria-hidden="true"></i>Accesories</a>
                                    <span class="badge badge-danger badge-pill">64</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a class="dark-grey-text font-small">
                                        <i class="fas fa-tv dark-grey-text mr-3" aria-hidden="true"></i>TV</a>
                                    <span class="badge badge-danger badge-pill">2</span>
                                </li>
                            </ul>
                        </section>
                        <!-- Section: Categories -->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-8 col-md-12 pb-lg-5 mb-4">
                        <!--Image -->
                        <div class="view zoom z-depth-1">

                            <img src="https://mdbootstrap.com/img/Photos/Others/product1.jpg" class="img-fluid" alt="sample image">
                            <div class="mask rgba-white-light">
                                <div class="dark-grey-text  pt-4 ml-3 pl-3">
                                    <div>
                                        <a>
                                            <span class="badge badge-danger">bestseller</span>
                                        </a>
                                        <h2 class="card-title font-weight-bold pt-2">
                                            <strong>This is news title</strong>
                                        </h2>
                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                        <a class="btn btn-danger btn-sm btn-rounded clearfix d-none d-md-inline-block">Read more</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--Image -->
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!-- Categories & Adv -->

            <!--Section: Bestsellers & offers-->
            <section>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-12">

                        <!-- Nav tabs -->
                        <ul class="nav md-tabs nav-justified grey lighten-3 mx-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active dark-grey-text font-weight-bold" data-toggle="tab" href="#panel5" role="tab"> Best sellers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dark-grey-text font-weight-bold" data-toggle="tab" href="#panel6" role="tab">Top offers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dark-grey-text font-weight-bold" data-toggle="tab" href="#panel7" role="tab">
                                    </i>Best rated</a>
                            </li>
                        </ul>
                        <!-- Tab panels -->
                        <div class="tab-content px-0">
                            <!--Panel 1-->
                            <div class="tab-pane fade in show active " id="panel5" role="tabpanel">
                                <br>
                                <!-- Grid row -->
                                <div class="row">
                                    @foreach ($product1 as $item)
                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-12 mb-4">   

                                        <!--Card-->
                                        <div class="card card-ecommerce">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img src="{{$item->image}}" class="img-fluid" alt="sample image">
                                                <a  href="{{route('detail', ['slug' => $item->slug])}}" >
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--Card image-->

                                            <!--Card content-->
                                            <div class="card-body">
                                                <!--Category & Title-->

                                                <h5 class="card-title mb-1">
                                                    <strong>
                                                        <a class="dark-grey-text"  href="{{route('detail', ['slug' => $item->slug])}}">{{$item->name}}</a>
                                                    </strong>
                                                </h5>
                                                <span class="badge badge-danger mb-2">{{$item->status==1?'Activ':'noActive'}}</span>
                                                <!-- Rating -->
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                </ul>

                                                <!--Card footer-->
                                                <div class="card-footer pb-0">
                                                    <div class="row mb-0">
                                                        <span class="float-left">
                                                            <strong>{{$item->price}}</strong>
                                                        </span>
                                                        <span class="float-right">
                                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"  href="{{route('cart')}}">
                                                                <i class="fas fa-shopping-cart ml-3"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--Card content-->

                                        </div>
                                        <!--Card-->

                                    </div>
                                    @endforeach
                                    {{-- <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <!--Card-->
                                        <div class="card card-ecommerce">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" class="img-fluid" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--Card image-->

                                            <!--Card content-->
                                            <div class="card-body">
                                                <!--Category & Title-->

                                                <h5 class="card-title mb-1">
                                                    <strong>
                                                        <a href="" class="dark-grey-text">iPad PRO</a>
                                                    </strong>
                                                </h5>
                                                <span class="badge badge-danger mb-2">bestseller</span>
                                                <span class="badge badge-success mb-2 ml-2">SALE</span>
                                                <!-- Rating -->
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star grey-text"></i>
                                                    </li>
                                                </ul>

                                                <!--Card footer-->
                                                <div class="card-footer pb-0">
                                                    <div class="row mb-0">
                                                        <h5 class="mb-0 pb-0 mt-1 font-weight-bold">
                                                            <span class="red-text">
                                                                <strong>$699</strong>
                                                            </span>
                                                            <span class="grey-text">
                                                                <small>
                                                                    <s>$920</s>
                                                                </small>
                                                            </span>
                                                        </h5>

                                                        <span class="float-right">
                                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="fas fa-shopping-cart ml-3"></i>
                                                            </a>
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
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/4.jpg" class="img-fluid" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--Card image-->

                                            <!--Card content-->
                                            <div class="card-body">
                                                <!--Category & Title-->

                                                <h5 class="card-title mb-1">
                                                    <strong>
                                                        <a href="" class="dark-grey-text">Dell V-964i</a>
                                                    </strong>
                                                </h5>
                                                <span class="badge badge-danger mb-2">bestseller</span>
                                                <span class="badge badge-info mb-2 ml-2">new</span>
                                                <!-- Rating -->
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                </ul>

                                                <!--Card footer-->
                                                <div class="card-footer pb-0">
                                                    <div class="row mb-0">
                                                        <span class="float-left">
                                                            <strong>1439$</strong>
                                                        </span>
                                                        <span class="float-right">
                                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="fas fa-shopping-cart ml-3"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--Card content-->

                                        </div>
                                        <!--Card-->

                                    </div>
                                    <!--Grid column--> --}}

                                </div>
                                <!--Grid row-->
                            </div>
                            <!--/.Panel 1-->

                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel6" role="tabpanel">
                                <br>

                                <!-- Grid row -->
                                <div class="row mb-3">

                                    @foreach ($product2 as $item)
                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-12 mb-4">

                                        <!--Card-->
                                        <div class="card card-ecommerce">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img src="{{$item->image}}" class="img-fluid" alt="sample image">
                                                <a  href="{{route('detail', ['slug' => $item->slug])}}">
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--Card image-->

                                            <!--Card content-->
                                            <div class="card-body">
                                                <!--Category & Title-->

                                                <h5 class="card-title mb-1">
                                                    <strong>
                                                        <a class="dark-grey-text"  href="{{route('detail', ['slug' => $item->slug])}}">{{$item->name}}</a>
                                                    </strong>
                                                </h5>
                                                <span class="badge badge-danger mb-2">{{$item->status==1?'Activ':'noActive'}}</span>
                                                <!-- Rating -->
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                </ul>

                                                <!--Card footer-->
                                                <div class="card-footer pb-0">
                                                    <div class="row mb-0">
                                                        <span class="float-left">
                                                            <strong>{{$item->price}}</strong>
                                                        </span>
                                                        <span class="float-right">
                                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"  href="{{route('cart')}}">
                                                                <i class="fas fa-shopping-cart ml-3"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--Card content-->

                                        </div>
                                        <!--Card-->

                                    </div>
                                    @endforeach
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    {{-- <div class="col-lg-4 col-md-6 mb-4">
                                        <!--Card-->
                                        <div class="card card-ecommerce">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" class="img-fluid" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--Card image-->

                                            <!--Card content-->
                                            <div class="card-body">
                                                <!--Category & Title-->

                                                <h5 class="card-title mb-1">
                                                    <strong>
                                                        <a href="" class="dark-grey-text">Dell 786i</a>
                                                    </strong>
                                                </h5>
                                                <span class="badge badge-info mb-2">new</span>
                                                <!-- Rating -->
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star grey-text"></i>
                                                    </li>
                                                </ul>

                                                <!--Card footer-->
                                                <div class="card-footer pb-0">
                                                    <div class="row mb-0">
                                                        <span class="float-left">
                                                            <strong>1439$</strong>
                                                        </span>
                                                        <span class="float-right">
                                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="fas fa-shopping-cart ml-3"></i>
                                                            </a>
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
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--Card image-->

                                            <!--Card content-->
                                            <div class="card-body">
                                                <!--Category & Title-->

                                                <h5 class="card-title mb-1">
                                                    <strong>
                                                        <a href="" class="dark-grey-text">Canon 675-D</a>
                                                    </strong>
                                                </h5>
                                                <span class="badge badge-info mb-2">new</span>
                                                <span class="badge badge-success mb-2 ml-2">SALE</span>
                                                <!-- Rating -->
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                </ul>

                                                <!--Card footer-->
                                                <div class="card-footer pb-0">
                                                    <div class="row mb-0">
                                                        <h5 class="mb-0 pb-0 mt-1 font-weight-bold">
                                                            <span class="red-text">
                                                                <strong>$1199</strong>
                                                            </span>
                                                            <span class="grey-text">
                                                                <small>
                                                                    <s>$1520</s>
                                                                </small>
                                                            </span>
                                                        </h5>

                                                        <span class="float-right">
                                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="fas fa-shopping-cart ml-3"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--Card content-->

                                        </div>
                                        <!--Card-->

                                    </div>
                                    <!--Grid column--> --}}

                                </div>
                                <!--Grid row-->
                            </div>
                            <!--/.Panel 2-->

                            <!--Panel 3-->
                            <div class="tab-pane fade" id="panel7" role="tabpanel">
                                <br>
                                <!-- Grid row -->
                                <div class="row">
                                    @foreach ($product3 as $item)
                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-12 mb-4">

                                        <!--Card-->
                                        <div class="card card-ecommerce">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img src="{{$item->image}}" class="img-fluid" alt="sample image">
                                                <a  href="{{route('detail', ['slug' => $item->slug])}}">
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--Card image-->

                                            <!--Card content-->
                                            <div class="card-body">
                                                <!--Category & Title-->

                                                <h5 class="card-title mb-1">
                                                    <strong>
                                                        <a class="dark-grey-text" href="{{route('detail', ['slug' => $item->slug])}}">{{$item->name}}</a>
                                                    </strong>
                                                </h5>
                                                <span class="badge badge-danger mb-2">{{$item->status==1?'Activ':'noActive'}}</span>
                                                <!-- Rating -->
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                </ul>

                                                <!--Card footer-->
                                                <div class="card-footer pb-0">
                                                    <div class="row mb-0">
                                                        <span class="float-left">
                                                            <strong>{{$item->price}}</strong>
                                                        </span>
                                                        <span class="float-right">
                                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"  href="{{route('cart')}}">
                                                                <i class="fas fa-shopping-cart ml-3"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--Card content-->

                                        </div>
                                        <!--Card-->

                                    </div>
                                    @endforeach
                                    <!--Grid column-->

                                    {{-- <!--Grid column-->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <!--Card-->
                                        <div class="card card-ecommerce">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--Card image-->

                                            <!--Card content-->
                                            <div class="card-body">
                                                <!--Category & Title-->

                                                <h5 class="card-title mb-1">
                                                    <strong>
                                                        <a href="" class="dark-grey-text">iPhone</a>
                                                    </strong>
                                                </h5>
                                                <span class="badge badge-info mb-2">new</span>
                                                <!-- Rating -->
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                </ul>

                                                <!--Card footer-->
                                                <div class="card-footer pb-0">
                                                    <div class="row mb-0">
                                                        <span class="float-left">
                                                            <strong>1439$</strong>
                                                        </span>
                                                        <span class="float-right">
                                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="fas fa-shopping-cart ml-3"></i>
                                                            </a>
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
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" class="img-fluid" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--Card image-->

                                            <!--Card content-->
                                            <div class="card-body">
                                                <!--Category & Title-->

                                                <h5 class="card-title mb-1">
                                                    <strong>
                                                        <a href="" class="dark-grey-text">iMac</a>
                                                    </strong>
                                                </h5>
                                                <span class="badge badge-danger mb-2">bestseller</span>
                                                <!-- Rating -->
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star blue-text"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star grey-text"></i>
                                                    </li>
                                                </ul>

                                                <!--Card footer-->
                                                <div class="card-footer pb-0">
                                                    <div class="row mb-0">
                                                        <span class="float-left">
                                                            <strong>1439$</strong>
                                                        </span>
                                                        <span class="float-right">
                                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="fas fa-shopping-cart ml-3"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--Card content-->

                                        </div>
                                        <!--Card-->

                                    </div>
                                    <!--Grid column--> --}}

                                </div>
                                <!--Grid row-->

                            </div>
                            <!--/.Panel 3-->
                        </div>

                    </div>

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Bestsellers & offers-->

            <!--Section: Advertising-->
            <section>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-12">
                        <!--Image -->
                        <div class="view  z-depth-1">

                            <img src="https://mdbootstrap.com/img/Photos/Others/ecommerce5.jpg" class="img-fluid" alt="sample image">
                            <div class="mask rgba-stylish-slight">
                                <div class="dark-grey-text text-right pt-lg-5 pt-md-1 mr-5 pr-md-4 pr-0">
                                    <div>
                                        <a>
                                            <span class="badge badge-primary">SALE</span>
                                        </a>
                                        <h2 class="card-title font-weight-bold pt-md-3 pt-1">
                                            <strong>Sale from 20% to 50% on every tablet!
                                            </strong>
                                        </h2>
                                        <p class="pb-lg-3 pb-md-1 clearfix d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                        <a class="btn mr-0 btn-primary btn-rounded clearfix d-none d-md-inline-block">Read more</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--Image -->
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--/Section: Advertising-->

            <!--Section: product list-->
            <section class="mb-5">
                <div class="row">
                    <!-- New Products-->
                    <div class="col-lg-4 col-md-12 col-12 pt-5">
                        <hr>
                        <h5 class="text-center font-weight-bold dark-grey-text">
                            <strong>New Products</strong>
                        </h5>
                        <hr>

                        <!-- First row -->
                        <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                            <div class="col-6">
                                <a>
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-6">

                                <!-- Title -->
                                <a class="pt-5">
                                    <strong>iPad</strong>
                                </a>

                                <!-- Rating -->
                                <ul class="rating inline-ul">
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star grey-text"></i>
                                    </li>
                                </ul>

                                <!-- Price -->
                                <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                    <strong>$849</strong>
                                </h6>

                            </div>

                        </div>
                        <!-- /.First row -->

                        <!-- Second row -->
                        <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                            <div class="col-6">
                                <a>
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-6">

                                <!-- Title -->
                                <a>
                                    <strong>Headphones</strong>
                                </a>

                                <!-- Rating -->
                                <ul class="rating inline-ul">
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                </ul>

                                <!-- Price -->
                                <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                    <strong>$49</strong>
                                    <span class="grey-text">
                                        <small>
                                            <s>$89</s>
                                        </small>
                                    </span>
                                </h6>

                            </div>

                        </div>
                        <!-- /.Second row -->

                        <!-- Third row -->
                        <div class="row mt-2 py-2 pb-1 hoverable align-items-center">

                            <div class="col-6">
                                <a>
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-6">

                                <!-- Title -->
                                <a>
                                    <strong>iMac 27"</strong>
                                </a>

                                <!-- Rating -->
                                <ul class="rating inline-ul">
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                </ul>

                                <!-- Price -->
                                <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                    <strong>$1449</strong>
                                    <span class="grey-text">
                                        <small>
                                            <s>$2189</s>
                                        </small>
                                    </span>
                                </h6>

                            </div>

                        </div>
                        <!-- /.Third row -->

                    </div>
                    <!-- /.New Products-->

                    <!-- Top Sellers-->
                    <div class="col-lg-4  col-md-12 pt-5">

                        <hr>
                        <h5 class="text-center font-weight-bold dark-grey-text">
                            <strong>Top Sellers</strong>
                        </h5>
                        <hr>

                        <!-- First row -->
                        <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                            <div class="col-6">
                                <a>
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/4.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-6">

                                <!-- Title -->
                                <a>
                                    <strong>Dell V-964i</strong>
                                </a>

                                <!-- Rating -->
                                <ul class="rating inline-ul">
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                </ul>

                                <!-- Price -->
                                <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                    <strong>$649</strong>
                                    <span class="grey-text">
                                        <small>
                                            <s>$889</s>
                                        </small>
                                    </span>
                                </h6>

                            </div>

                        </div>
                        <!-- /.First row -->

                        <!-- Second row -->
                        <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                            <div class="col-6">
                                <a>
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-6">

                                <!-- Title -->
                                <a>
                                    <strong>Asus GT67i</strong>
                                </a>

                                <!-- Rating -->
                                <ul class="rating inline-ul">
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star grey-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star grey-text"></i>
                                    </li>
                                </ul>

                                <!-- Price -->
                                <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                    <strong>$1249</strong>
                                    <span class="grey-text">
                                        <small>
                                            <s>$1489</s>
                                        </small>
                                    </span>
                                </h6>

                            </div>

                        </div>
                        <!-- /.Second row -->

                        <!-- Third row -->
                        <div class="row mt-2 py-2 pb-1 hoverable align-items-center">

                            <div class="col-6">
                                <a>
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-6">

                                <!-- Title -->
                                <a>
                                    <strong>Headphones</strong>
                                </a>

                                <!-- Rating -->
                                <ul class="rating inline-ul">
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star grey-text"></i>
                                    </li>
                                </ul>

                                <!-- Price -->
                                <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                    <strong>$49</strong>
                                    <span class="grey-text">
                                        <small>
                                            <s>$89</s>
                                        </small>
                                    </span>
                                </h6>

                            </div>

                        </div>
                        <!-- /.Third row -->

                    </div>
                    <!-- /.Top Sellers -->

                    <!-- Random Products-->
                    <div class="col-lg-4 col-md-12 pt-5">

                        <hr>
                        <h5 class="text-center font-weight-bold dark-grey-text">
                            <strong>Random products</strong>
                        </h5>
                        <hr>

                        <!-- First row -->
                        <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                            <div class="col-6">
                                <a>
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-6">

                                <!-- Title -->
                                <a>
                                    <strong>Dell 786i</strong>
                                </a>

                                <!-- Rating -->
                                <ul class="rating inline-ul">
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star grey-text"></i>
                                    </li>
                                </ul>

                                <!-- Price -->
                                <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                    <strong>$749</strong>
                                    <span class="grey-text">
                                        <small>
                                            <s>$889</s>
                                        </small>
                                    </span>
                                </h6>

                            </div>

                        </div>
                        <!-- /.First row -->

                        <!-- Second row -->
                        <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                            <div class="col-6">
                                <a>
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-6">

                                <!-- Title -->
                                <a>
                                    <strong>Samsung V54</strong>
                                </a>

                                <!-- Rating -->
                                <ul class="rating inline-ul">
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                </ul>

                                <!-- Price -->
                                <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                    <strong>$249</strong>
                                    <span class="grey-text">
                                        <small>
                                            <s>$489</s>
                                        </small>
                                    </span>
                                </h6>

                            </div>

                        </div>
                        <!-- /.Second row -->

                        <!-- Third row -->
                        <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                            <div class="col-6">
                                <a>
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-6">

                                <!-- Title -->
                                <a>
                                    <strong>Canon 675-D</strong>
                                </a>

                                <!-- Rating -->
                                <ul class="rating inline-ul">
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star grey-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star grey-text"></i>
                                    </li>
                                </ul>

                                <!-- Price -->
                                <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                    <strong>$2149</strong>
                                    <span class="grey-text">
                                        <small>
                                            <s>$2489</s>
                                        </small>
                                    </span>
                                </h6>

                            </div>

                        </div>
                        <!-- /.Third row -->

                    </div>
                    <!-- /.Random Products -->
                </div>

            </section>
            <!--/Section: product list-->

            <!--Section: Last items-->
            <section>

                <h4 class="font-weight-bold mt-4 dark-grey-text">
                    <strong>LAST ITEMS</strong>
                </h4>
                <hr class="mb-5">

                <!-- Grid row -->
                <div class="row">


                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">Headphones</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-danger mb-2">bestseller</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                        <span class="float-left">
                                            <strong>1439$</strong>
                                        </span>
                                        <span class="float-right">

                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                <i class="fas fa-shopping-cart ml-3"></i>
                                            </a>
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
                    <div class="col-lg-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/16.jpg" class="img-fluid" alt="sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">Headphones</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-danger mb-2">bestseller</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                        <span class="float-left">
                                            <strong>1439$</strong>
                                        </span>
                                        <span class="float-right">

                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                <i class="fas fa-shopping-cart ml-3"></i>
                                            </a>
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
                    <div class="col-lg-3 col-md-6 mb-4">
                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">iPhone</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-info mb-2">new</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                        <span class="float-left">
                                            <strong>1439$</strong>
                                        </span>
                                        <span class="float-right">

                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                <i class="fas fa-shopping-cart ml-3"></i>
                                            </a>
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
                    <div class="col-lg-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" class="img-fluid" alt="sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">iMac</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-danger mb-2">bestseller</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star grey-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                        <span class="float-left">
                                            <strong>1439$</strong>
                                        </span>
                                        <span class="float-right">

                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                <i class="fas fa-shopping-cart ml-3"></i>
                                            </a>
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

                <!--Grid row-->
                <div class="row justify-content-center mb-4">

                    <!--Pagination -->
                    <nav class="mb-4">
                        <ul class="pagination pagination-circle pg-blue mb-0">

                            <!--First-->
                            <li class="page-item disabled clearfix d-none d-md-block">
                                <a class="page-link waves-effect waves-effect">First</a>
                            </li>

                            <!--Arrow left-->
                            <li class="page-item disabled">
                                <a class="page-link waves-effect waves-effect" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>

                            <!--Numbers-->
                            <li class="page-item active">
                                <a class="page-link waves-effect waves-effect">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link waves-effect waves-effect">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link waves-effect waves-effect">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link waves-effect waves-effect">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link waves-effect waves-effect">5</a>
                            </li>

                            <!--Arrow right-->
                            <li class="page-item">
                                <a class="page-link waves-effect waves-effect" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>

                            <!--First-->
                            <li class="page-item clearfix d-none d-md-block">
                                <a class="page-link waves-effect waves-effect">Last</a>
                            </li>

                        </ul>
                    </nav>
                    <!--/Pagination -->

                </div>
                <!--Grid row-->
            </section>
            <!-- /.Section: Last items -->

        </div>
        <!-- /.Content -->

    </div>

</div>
