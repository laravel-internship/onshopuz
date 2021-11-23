<div>
    @if ($product)
        @include('layouts.message')
        <!-- Section: product details -->
        <section id="productDetails" class="pb-5">

            <!--News card-->
            <div class="card mt-5 hoverable">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="row mx-2">
                            <!--Carousel Wrapper-->
                            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4"
                                data-ride="carousel">

                                <!--Slides-->
                                <div class="carousel-inner text-center text-md-left" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="{{ asset($product->image) }}" alt="First slide"
                                            class="img-fluid">
                                    </div>
                                    @foreach ($images as $image)

                                        <div class="carousel-item">
                                            <img src="{{ asset($image) }}" alt="Second slide" class="img-fluid">
                                        </div>
                                    @endforeach

                                </div>
                                <!--/.Slides-->

                                <!--Thumbnails-->
                                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/.Thumbnails-->

                            </div>
                            <!--/.Carousel Wrapper-->
                        </div>

                        <!--Grid row-->
                        <div class="row mb-4">

                            <div class="col-md-12">

                                <div id="mdb-lightbox-ui"></div>

                                <div class="mdb-lightbox no-margin">

                                    <!--Grid column-->
                                    @foreach ($images as $image)

                                        <figure class="col-md-4">
                                            <!--Large image-->
                                            <a href="{{ asset($image) }}" data-size="1600x1067">
                                                <!-- Thumbnail-->
                                                <img src="{{ asset($image) }}" class="img-fluid">
                                            </a>
                                        </figure>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
                    </div>
                    <div class="col-lg-5 mr-3 text-center text-md-left">
                        <h2
                            class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                            <strong>{{ $product->name }} </strong>
                        </h2>
                        <span
                            class="badge badge-danger product mb-4 ml-xl-0 ml-4">{{ $product->status == 1 ? 'Active' : 'noActive' }}</span>
                        </strong>
                        </h2>
                        <span
                            class="badge badge-success product mb-4 ml-2">{{ $product->status == 1 ? 'Sale' : 'noSale' }}</span>
                        <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                            <span class="red-text font-weight-bold">
                                <strong>${{ $product->price }}</strong>
                            </span>
                            <span class="grey-text">
                                <small>
                                    <s>${{ $product->discount ?? '0' }}</s>
                                </small>
                            </span>
                        </h3>

                        <p class="ml-xl-0 ml-4">{{ $product->about }}
                        </p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Data: </strong>{{ $product->data }}
                        </p>
                        {{-- quantity start --}}
                                <div>
                                    <span class="qty" style="margin-left: 20px">{{$quantity}}</span>
                                    <div class="btn-group radio-group ml-2" data-toggle="buttons">
                                        <label class="btn btn-sm btn-primary btn-rounded"
                                            wire:click="decrease()">
                                            <input type="radio" name="options" id="option1">&mdash;
                                        </label>
                                        <label class="btn btn-sm btn-primary btn-rounded"
                                            wire:click="plus()">
                                            <input type="radio" name="options" id="option2" value="">+
                                        </label>
                                    </div>
                                    @if(auth()->check())
                                        @if($wishlist)
                                            <img src="{{asset('assets/img/toliqyurak.png')}}" alt=""width="25px" height="25px" style="margin-left: 10px;cursor: pointer;" wire:click.prevent="wishlist({{$product->id}})">
                                        @else
                                            <img src="{{asset('assets/img/yurak.png')}}" alt=""width="25px" height="25px" style="margin-left: 10px;cursor: pointer;" wire:click.prevent="wishlist({{$product->id}})">
                                        @endif

                                    @endif
                        </div>
                        <!-- Add to Cart -->
                        <section class="color">
                            <div class="mt-5">


                                <div class="row mt-3 mb-4">
                                    <div class="col-md-12 text-center text-md-left text-md-right">
                                        <a wire:click.prevent="addToCart()">
                                            <button class="btn btn-primary btn-rounded">
                                                <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Add to cart
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- /.Add to Cart -->
                    </div>
                </div>
            </div>
            <!--News card-->

        </section>
        <!-- Section: product details -->

        <h4 class="h4-responsive dark-grey-text font-weight-bold mb-5 text-center">
            <strong>Compare iPad models</strong>
        </h4>

        <!--Table-->
        <div class="card mb-5">
            <div class="card-body">

                <table class="table table-responsive-md">
                    <thead>
                        <tr>

                            <th>
                                <strong>category</strong>
                            </th>
                            <th>
                                <strong>price</strong>
                            </th>
                            <th>
                                <strong>quantity</strong>
                            </th>
                            <th>
                                <strong>description</strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->price }}$</td>
                            <td>{{ $product->quatity }}</td>
                            <td>{{ $product->description }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    @endif
    <!--Table-->

    <!-- Product Reviews -->
    <section id="reviews" class="pb-5 mt-4">

        <hr>
        <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
            <strong>Product Reviews</strong>
        </h4>
        <hr class="mb-5">

        <!--Main wrapper-->
        <div class="comments-list text-center text-md-left">

            @if (sizeof($order_detail) > 0)
                @foreach ($order_detail as $item)
                    <!--First row-->
                    @if ($item->review)
                        <div class="row mb-5">
                            <!--Image column-->
                            <div class="col-sm-2 col-12 mb-3">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img (8).jpg" alt="sample image"
                                    class="avatar rounded-circle z-depth-1-half">
                            </div>
                            <!--/.Image column-->

                            <!--Content column-->
                            <div class="col-sm-10 col-12">
                                <a>
                                    <h5 class="user-name font-weight-bold">
                                        {{ isset($item->review->user) ? $item->review->user->name : '' }}</h5>
                                </a>
                                <!-- Rating -->
                                <ul class="rating">
                                    @for ($i = 1; $i <= $item->review->rating; $i++)
                                        <li>
                                            <i class="fas fa-star blue-text"></i>
                                        </li>
                                    @endfor

                                </ul>
                                <div class="card-data">
                                    <ul class="list-unstyled mb-1">
                                        <li class="comment-date font-small grey-text">
                                            <i class="far fa-clock-o"></i> {{ $item->review->created_at }}
                                        </li>
                                    </ul>
                                </div>
                                <p class="dark-grey-text article">{{ $item->review->comment }}</p>
                            </div>
                            <!--/.Content column-->
                        </div>
                    @endif
                    <!--/.First row-->
                @endforeach
            @else
                <div>
                    <h4>No reviews</h4>
                </div>
            @endif
        </div>
        <!--/.Main wrapper-->
    </section>
    <!-- /.Product Reviews -->

    <!--Section: Products v.5-->
    <section id="products" class="pb-5 mt-4">

        <hr>
        <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
            <strong>Related Products</strong>
        </h4>
        <hr class="mb-5">

        <p class="text-center w-responsive mx-auto mb-5 dark-grey-text">{{ __('validation.boolean') }}</p>

        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
                <a class="btn-floating primary-color" href="#multi-item-example" data-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a class="btn-floating primary-color" href="#multi-item-example" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
            <!--Controls-->

            <!--Indicators-->
            <ol class="carousel-indicators">
                <li class="primary-color" data-target="#multi-item-example" data-slide-to="0" class="active">
                </li>
                <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
                <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
            </ol>
            <!--Indicators-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

                <!--First slide-->
                @for ($i = 1; $i <= $related->lastPage(); $i++)

                    <div class="carousel-item active">
                        @foreach ($related as $rel)
                            @if ($rel->slug != $product->slug)


                                <div class="col-md-4 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img src="{{ asset($rel->image) }}" class="img-fluid" alt="">
                                            <a href="{{ route('detail', ['slug' => $rel->slug]) }}">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Category & Title-->

                                            <h5 class="card-title mb-1">
                                                <strong>
                                                    <a href="" class="dark-grey-text">{{ $rel->name }}</a>
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
                                                        <strong>{{ $rel->price }}$</strong>
                                                    </span>
                                                    <span class="float-right">
                                                        @if(auth()->check())
                                                        @if($wishlist)
                                                            <img src="{{asset('assets/img/toliqyurak.png')}}" alt=""width="25px" height="25px" style="margin-left: 10px;cursor: pointer;" wire:click.prevent="wishlist({{$product->id}})">
                                                        @else
                                                            <img src="{{asset('assets/img/yurak.png')}}" alt=""width="25px" height="25px" style="margin-left: 10px;cursor: pointer;" wire:click.prevent="wishlist({{$product->id}})">
                                                        @endif

                                                    @endif
                                                        <a class="{{ route('cart') }}" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Cart" wire:click.prevent="addToCart({{ $rel->id }})">
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
                            @endif
                        @endforeach
                    </div>
                @endfor
                <!--First slide-->

            </div>
            <!--Slides-->

        </div>
        <!--Carousel Wrapper-->

    </section>
    <!--Section: Products v.5-->

</div>
