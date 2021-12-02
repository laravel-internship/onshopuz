@if (session()->has('message'))
<div class="alert alert-success">
    <span>{{session('message')}}</span>
</div>
@endif
@if (session()->has('error'))
<div class="alert alert-success">
    <span>{{session('error')}}</span>
</div>
@endif
