@extends('layouts.base-admin')
@section('content')
    <form action="{{ isset($category )? route('category-update',['id'=>$category->id]) : route('category-store') }}" method="POST" enctype="multipart/form-data">
 @if ( isset($category ))
 @method('put')
@else 
@method('post')
@endif
        @csrf
        <section class="section card mb-5">

            <div class="card-body">

                <!--Section heading-->
                <h1 class="text-center my-5 h1">Category</h1>

                <h5 class="pb-5">{{ isset($category) ? 'Update' : 'Create' }}</h5>

                <div class="row text-left">


                    <!--Grid column-->
                    <div class="col-md-12 mb-3">

                        <!--Email validation-->
                        <div class="md-form">
                            <input type="text" id="form6" class="form-control" name="name"
                                value="{{ isset($category) ? $category->name : old('name') }}">
                            <label for="form6" data-success="right">Name</label>
                            <span data-error="wrong" style="color: red;">{{ $errors->first('name') }}</span><br>
                        </div>

                    </div>
                    <!--Grid column-->
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
