@if (session()->has('message'))
<div class="alert alert-success">
    <span>{{session('message')}}</span>
</div>
@endif
