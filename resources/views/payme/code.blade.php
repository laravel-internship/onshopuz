@extends('layouts.basepay')
@section('content')
<div>
    @include('layouts.message')

    <div class="row" style="display: flex; justify-content: center;">

        <!--Card-->
        <div class="card">

            <!--Card content-->
            <div class="card-body">

                <!-- Register form -->
                <form action="{{route('cardsVerify')}}" method="post">
                    @method('post')
                    @csrf
                    <p class="h5 text-center mb-4">Payme</p>

                    <div class="md-form">
                        <label class="form-check-label" for="code">{{$phone}} ga kelgan kodni kiriting</label><br>
                        <input type="text" id="code" class="form-control"  name="code"
                         placeholder="code" maxlength="25">

                        <span data-error="wrong" style="color: red;">{{ $errors->first('code') }}</span><br>
                    </div>


                    <div class="text-center mt-4">
                        <button class="btn btn-deep-orange" type="submit">Send</button>
                        <button class="btn btn-deep-orange" type="reset">Reset</button>
                    </div>

                </form>
                <!-- Register form -->

            </div>

        </div>
        <!--/.Card-->

    </div><br><br>


</div>
@endsection
