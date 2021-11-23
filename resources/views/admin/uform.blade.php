@extends('layouts.base-admin')
@section('content')
    <form action="{{ isset($user)? route('user.update',['id'=>$user->id]) : route('user.store') }}" method="POST" enctype="multipart/form-data" style="padding: 50px" >
 @if ( isset($user ))
 @method('put')
@else
@method('post')
 @endif
        @csrf
        <div class="row" style="display: flex; justify-content: center;" >

            <!--Card-->
            <div class="card" >

              <!--Card content-->
              <div class="card-body" >

                <!-- Register form -->
                <form>
                  <p class="h5 text-center mb-4">{{ isset($user) ? 'Update' : 'Create' }}</p>

                  <div class="md-form">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="orangeForm-name" class="form-control" name="name" value="{{ isset($user) ? $user->name : old('name') }}">
                    <label for="orangeForm-name">Name</label>
                    <span data-error="wrong" style="color: red;">{{ $errors->first('name') }}</span><br>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="text" id="orangeForm-email" class="form-control" name="email" value="{{ isset($user) ? $user->email : old('email') }}">
                    <label for="orangeForm-email">Email</label>
                    <span data-error="wrong" style="color: red;">{{ $errors->first('email') }}</span><br>
                  </div>

                  <div class="md-form">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="password" id="orangeForm-pass" class="form-control" name="password">
                    <label for="orangeForm-pass">Password</label>
                    <span data-error="wrong" style="color: red;">{{ $errors->first('password') }}</span><br>
                  </div>
         
                  <div class="text-center mt-4">
                    <button class="btn btn-deep-orange" type="submit">Save</button>
                    <button class="btn btn-deep-orange" type="reset">Reset</button>
                  </div>

                </form>
                <!-- Register form -->

              </div>

            </div>
            <!--/.Card-->

          </div>

    </form>
@endsection
