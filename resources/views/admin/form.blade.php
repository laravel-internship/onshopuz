@extends('layouts.base-admin')
@section('content')
    <form action="{{ isset($product )? route('product.update',['id'=>$product->id]) : route('product.store') }}" method="POST" enctype="multipart/form-data">
 @if ( isset($product ))
 @method('put')
@else
@method('post')
 @endif
        @csrf
        <section class="section card mb-5">

            <div class="card-body">

                <!--Section heading-->
                <h1 class="text-center my-5 h1">Product</h1>

                <h5 class="pb-5">{{ isset($product) ? 'Update' : 'Create' }}</h5>

                <div class="row text-left">


                    <!--Grid column-->
                    <div class="col-md-12 mb-3">

                        <!--Email validation-->
                        <div class="md-form">
                            <input type="text" id="form6" class="form-control" name="name"
                                value="{{ isset($product) ? $product->name : old('name') }}">
                            <label for="form6" data-success="right">Name</label>
                            <span data-error="wrong" style="color: red;">{{ $errors->first('name') }}</span><br>
                        </div>

                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
                <div class="row text-left">


                    <!--Grid column-->
                    <div class="col-md-6 mb-3">

                        <!--Email validation-->
                        <div class="md-form">
                            <input type="text" id="form6" class="form-control " name="price"
                                value="{{ isset($product) ? $product->price : old('price') }}">
                            <label for="form6" data-success="right">Price</label>
                            <span data-error="wrong" style="color: red;">{{ $errors->first('price') }}</span><br>
                        </div>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!--Password validation-->
                        <div class="md-form">
                            <input type="text" id="form7" class="form-control" name="quatity"
                                value="{{ isset($product) ? $product->quatity : old('quatity') }}">
                            <label for="form7" data-success="right">Quantity</label>
                            <span data-error="wrong" style="color: red;">{{ $errors->first('quatity') }}</span><br>
                        </div>

                    </div>
                    <!--Grid row-->

                </div>
                <!--Grid row-->


                <!--Grid row-->
                <div class="row text-left">


                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        @if (isset($product))
                        @if (isset($product->data))

                        @php $data=explode(',',$product->data);

                         @endphp
                        @endif
                        @endif
                        <!--Email validation-->
                        <div class="md-form">
                            <input type="text" id="form6" class="form-control" name="model"
                                value="{{ !empty($data[0]) ? $data[0]: old('model') }}">
                            <label for="form6" data-success="right">Model</label>
                            <span data-error="wrong" style="color: red;">{{ $errors->first('model') }}</span><br>
                        </div>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!--Password validation-->
                        <div class="md-form">
                            <input type="color" id="form7" class="form-control" name="color"
                                value="{{ !empty($data[1]) ? $data[1] : old('color') }}">
                            <label for="form7" data-success="right">Color</label>
                            <span data-error="wrong" style="color: red;">{{ $errors->first('color') }}</span><br>
                        </div>

                    </div>
                    <!--Grid column-->
                    <!--Grid row-->

                </div>
                <!--Grid row-->



                <h5 class="pb-5">Textarea</h5>

                <!--Grid row-->
                <div class="row text-left">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!--Basic textarea-->
                        <div class="md-form">
                            <textarea type="text" id="form10" class="md-textarea form-control" rows="1"
                                name="about">{{ isset($product) ? $product->about : old('about') }}</textarea>
                            <label for="form10">About</label>
                            <span data-error="wrong" style="color: red;">{{ $errors->first('about') }}</span><br>
                        </div>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!--Basic textarea-->
                        <div class="md-form">
                            <textarea type="text" id="form10" class="md-textarea form-control" rows="1"
                                name="description">{{ isset($product) ? $product->description : old('description') }}</textarea>
                            <label for="form10">Description</label>
                            <span data-error="wrong" style="color: red;">{{ $errors->first('description') }}</span><br>
                        </div>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->


                <h5 class="pb-5">File input</h5>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <div class="md-form">
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-left">
                                    <span>Choose file</span>
                                    <input type="file" name="image" placeholder="Upload your file">
                                    <span data-error="wrong" style="color: red;">{{ $errors->first('image') }}</span><br>
                                </div>
                                @if (isset($product->image))
                                    <img src="{{ asset($product->image) }}" alt="*jpg" width="100px">
                                @endif
                            </div>
                        </div>


                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <div class="md-form">
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-left">
                                    <span>Choose files</span>
                                    <input type="file" multiple name="images[]" placeholder="Upload one or more files">
                                    <span data-error="wrong"
                                        style="color: red;">{{ $errors->first('images') }}</span><br>
                                    </div>
                                    @if (isset($product->images))
                                        @if ($product->images)
                                            @php $images=explode(',',$product->images);  @endphp
                                            @foreach ($images as $image)

                                            <img src="{{ asset($image) }}" alt="*jpg" width="100px">
                                            @endforeach
                                        @endif
                                    @endif
                            </div>
                        </div>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->



                <h5 class="">Categories</h5>

                <!--Grid row-->
                <div class="row mb-5">

                    <!--Grid column-->
                    <div class="col-lg-12 col-md-6 mb-4">
                        <!--Name-->
                        <select class="mdb-select md-form" name="category_id">
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach

                        </select>
                        <span data-error="wrong" style="color: red;">{{ $errors->first('category_id') }}</span><br>
                    </div>

                </div>
                <!--Grid row-->


                <div class="row mb-5">
                    <input type="submit" class="btn btn-primary" value="Save">
                    <input type="reset" class="btn btn-primary" value="Reset">
                </div>
            </div>


        </section>
    </form>
@endsection
