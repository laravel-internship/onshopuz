<div>
    @include('layouts.message')


    <!-- Section cart -->
    <section class="section my-5 pb-5">

        <div class="card card-ecommerce">


            <div class="card-body">

                <!-- Shopping Cart table -->
                <div class="table-responsive">
                    {{-- @foreach ($cart as $item) --}}

                    <table class="table cart-table" style="text-align: center">

                        <!-- Table head -->
                        <thead class="mdb-color lighten-5">
                            <tr>
                                <th></th>
                                <th class="font-weight-bold">
                                    <strong>Product</strong>
                                </th>
                                <th></th>
                                <th class="font-weight-bold">
                                    <strong>Price</strong>
                                </th>

                                <th class="font-weight-bold">
                                    <strong>Quentity</strong>
                                </th>
                                <th></th>
                                <th class="font-weight-bold">
                                    <strong>Amount</strong>
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <!-- /.Table head -->

                        <!-- Table body -->
                        <tbody>


                            <!-- First row -->
                            @foreach ($carts as $cart)
                                @if ($cart->product)
                                    <tr>

                                        <th scope="row">
                                            <img src="{{ asset($cart->product->image) }}" alt="" width="100px"
                                                class="img-fluid z-depth-0">
                                        </th>
                                        <td>
                                            <h5 class="mt-3">
                                                <strong>{{ $cart->product->name }}</strong>
                                            </h5>
                                            {{-- <p class="text-muted">Apple</p> --}}
                                        </td>
                                        {{-- <td>White</td> --}}
                                        <td></td>
                                        <td>{{ $cart->product->price }}$</td>
                                        <td class="text-center text-md-left">
                                            <span class="qty"
                                                style="margin-left: 20px">{{ $cart->quantity }}</span>

                                        </td>
                                        <td>
                                            <div class="btn-group radio-group ml-2" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary btn-rounded"
                                                    wire:click="decrease({{ $cart->id }})">
                                                    <input type="radio" name="options" id="option1">&mdash;
                                                </label>
                                                <label class="btn btn-sm btn-primary btn-rounded"
                                                    wire:click="plus({{ $cart->id }})">
                                                    <input type="radio" name="options" id="option2" value="">+
                                                </label>
                                            </div>
                                        </td>
                                        <td class="font-weight-bold">
                                            <strong>${{ $cart->price }}</strong>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip"
                                                data-placement="top" wire:click="prodel({{ $cart->id }})"
                                                title="Remove item">X
                                            </button>
                                        </td>
                                    </tr>


                                @endif


                            @endforeach

                            <!-- /.First row -->

                        </tbody>
                        <!-- /.Table body -->

                    </table>
                    <div
                        style="display: flex; justify-content: space-between; border-top:  rgb(62, 136, 239) solid 3px">
                        <div style="margin-top: 15px; margin-right: 20px; color: darkgreen;">
                            <h4>Total: {{ $carts->sum('price') }} $</h4>
                        </div>
                        <div> <a><button class="btn btn-primary btn-rounded" style="font-size: 18px"
                                    wire:click="storeOrder({{ $carts }})">Order</button></a></div>
                    </div>
                    {{-- @endforeach --}}
                </div>
                <!-- /.Shopping Cart table -->

            </div>
        </div>

    </section>
    <!-- /Section cart -->

    <!-- Section carts -->
    <section>
        <h4 class="font-weight-bold mt-4 title-1">
            <strong>YOU MAY BE INTERESTED IN</strong>
        </h4>
        <hr class="blue mb-5">

        <!-- Grid row -->
        <div class="row mb-3">

            <!--Grid column-->
            @foreach ($products as $item)

                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card card-ecommerce">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="{{ asset($item->image) }}" class="img-fluid" alt="">
                            <a href="{{ route('detail', ['slug' => $item->slug]) }}">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body">
                            <!--Category & Title-->

                            <h5 class="card-title mb-1">
                                <strong>
                                    <a href="" class="dark-grey-text">{{ $item->name }}</a>
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
                                        <strong>{{ $item->price }}$</strong>
                                    </span>
                                    <span class="float-right">
                                        <img src="{{asset('assets/img/yurak.png')}}" alt=""width="25px" height="25px" style="margin-left: 10px;cursor: pointer;" wire:click.prevent="wishlist({{$item->id}})">
                                        <a class="" data-toggle="tooltip" data-placement="top"
                                            title="Add to Cart" wire:click.prevent="addToCart({{ $item->id }})">
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
        </div>
        <!--Grid row-->


        <!--Grid row-->
        <div class="row flex-center mb-5">

            <p>
                <a class="btn btn-primary btn-rounded mb-5" data-toggle="collapse" href="#collapseExample1"
                    aria-expanded="false" aria-controls="collapseExample1">More carts</a>
            </p>
            <div class="collapse" id="collapseExample1">

                <!-- Grid row -->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/carts/3.jpg"
                                    class="img-fluid" alt="">
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
                                        <a href="" class="dark-grey-text">Asus GR-597</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-danger mb-2">bestseller</span>
                                <!-- Rating -->
                                <ul class="rating text-left">
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
                                            <a class="" data-toggle="tooltip" data-placement="top"
                                                title="Add to Cart">
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
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/carts/5.jpg"
                                    class="img-fluid" alt="">
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
                                        <a href="" class="dark-grey-text">Asus CT-567</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-danger mb-2">bestseller</span>
                                <!-- Rating -->
                                <ul class="rating text-left">
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
                                            <a class="" data-toggle="tooltip" data-placement="top"
                                                title="Add to Cart">
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
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/carts/2.jpg"
                                    class="img-fluid" alt="">
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
                                <ul class="rating text-left">
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

                                            <a class="" data-toggle="tooltip" data-placement="top"
                                                title="Add to Cart">
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
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/carts/4.jpg"
                                    class="img-fluid" alt="">
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
                                <!-- Rating -->
                                <ul class="rating text-left">
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

                                            <a class="" data-toggle="tooltip" data-placement="top"
                                                title="Add to Cart">
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

            </div>

        </div>
        <!--Grid row-->

    </section>
    <!-- Section carts -->
</div>
