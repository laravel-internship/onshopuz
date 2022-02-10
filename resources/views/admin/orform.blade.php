@extends('layouts.base-admin')
@section('content')
    <form action="{{  route('order.update',['id'=>$order->id]) }}" method="POST" enctype="multipart/form-data">

 @method('put')

        @csrf
        <section class="section card mb-5">

            <div class="card-body">

                <!--Section heading-->
                <h1 class="text-center my-5 h1">Order</h1>

                <h5 class="pb-5">Update</h5>



                 <!--Grid row-->
                 <div class="row mb-5">

                    <!--Grid column-->
                    <div class="col-lg-12 col-md-6 mb-4">
                        <!--Name-->
                        <select class="mdb-select md-form" name="status">

                                <option value="0" {{($order->status==0)? 'selected':''}} >Start</option>
                                <option value="1" {{($order->status==1)? 'selected':''}}>Process</option>
                                <option value="2"{{($order->status==2)? 'selected':''}}>Finish</option>
                                <option value="2"{{($order->status==3)? 'selected':''}}>Rejected</option>


                        </select>
                        <span data-error="wrong" style="color: red;">{{ $errors->first('status') }}</span><br>
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
