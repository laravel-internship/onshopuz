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
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="orderBy"  wire:model="orderBy" value="default" id="flexRadioDefault1"/>
                                <label class="form-check-label" for="flexRadioDefaultOrder1">Default </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="orderBy"  wire:model="orderBy" value="asc" id="flexRadioDefaultOrder2"/>
                                <label class="form-check-label" for="flexRadioDefaultOrder2">Price: low to high </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="orderBy"  wire:model="orderBy" value="desc" id="flexRadioDefaultOrder3"/>
                                <label class="form-check-label" for="flexRadioDefaultOrder3">Price: high to low </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="orderBy"  wire:model="orderBy" value="newless" id="flexRadioDefaultOrder4"/>
                                <label class="form-check-label" for="flexRadioDefaultOrder4">Newless </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="orderBy"  wire:model="orderBy" value="popularity" id="flexRadioDefaultOrder5"/>
                                <label class="form-check-label" for="flexRadioDefaultOrder5"> Popularity </label>
                            </div>
                    </div>

                    <!-- Filter by category-->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <h5 class="font-weight-bold dark-grey-text"><strong>Category</strong></h3>
                            <div class="divider"></div>

                            <!--Radio group-->
                            @foreach ($categories as $key => $category)
                                <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="category_id"
                                      wire:model="category_id"
                                      value="{{$category->id}}"
                                      id="flexRadioDefault{{$key}}"
                                    />
                                    <label class="form-check-label" for="flexRadioDefault{{$key}}">{{$category->name}} </label>
                                  </div>
                            @endforeach


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
                                <input id="calculatorSlider" class="no-border" type="range" value="1" min="1" wire:model="price"
                                    max="1000" />
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
                                    <p class="dark-grey-text"><strong id="clientPrice">1000$</strong></p>
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
                    <select class="mdb-select grey-text md-form" wire:model="paginate">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="6">X6</option>
                        <option value="9">X9</option>
                        <option value="12">X12</option>
                    </select>

                    <!-- /.Sort by -->

                </div>

            </div>
            <!-- /.Filter Area -->

            <!-- Products Grid -->
            <section class="section pt-4">
                <div class="row">
                    @foreach ($products as $item)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="{{asset($item->image)}}" class="img-fluid" alt="{{$item->name}}">
                                    <a href="{{route('detail',['slug'=>$item->slug])}}">
                                        <div class="mask rgba-white-slight"></div> 
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="{{route('detail',$item->slug)}}" class="dark-grey-text">{{$item->name}}</a></strong></h5><span class="badge badge-info mb-2">new</span>
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
                                            <span class="float-left"><strong>{{$item->price}}$</strong></span>
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
                    @endforeach
                </div>


                <div class="row justify-content-center mb-4">

                    <!--Pagination -->
                    <nav class="mb-4">
                        <ul class="pagination pagination-circle pg-blue mb-0">

                            <!--First-->
                            <li class="page-item clearfix d-none d-md-block"><a
                                    class="page-link waves-effect waves-effect" wire:click="resetPage">First</a></li>

                            <!--Arrow left-->
                            <li class="page-item ">
                                <a class="page-link waves-effect waves-effect" aria-label="Previous">
                                    <span aria-hidden="true" wire:click="previousPage">«</span>
                                    <span class="sr-only" >Previous</span>
                                </a>
                            </li>

                            <!--Numbers-->
                            @for ($i = 1; $i<=$products->lastPage(); $i++)
                                @if ($products->currentPage() == $i)
                                    <li class="page-item active"><a class="page-link waves-effect waves-effect" wire:click="gotoPage({{$i}})">{{$i}}</a></li>
                                @else
                                    <li class="page-item"><a class="page-link waves-effect waves-effect" wire:click="gotoPage({{$i}})">{{$i}}</a></li>
                                @endif

                            @endfor

                            <!--Arrow right-->
                            <li class="page-item">
                                <a class="page-link waves-effect waves-effect" aria-label="Next">
                                    <span aria-hidden="true" wire:click="nextPage">»</span>
                                    <span class="sr-only" >Next</span>
                                </a>
                            </li>

                            <!--First-->
                            <li class="page-item clearfix d-none d-md-block"><a
                                    class="page-link waves-effect waves-effect" wire:click="gotoPage({{$products->lastPage()}})">Last</a></li>

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
