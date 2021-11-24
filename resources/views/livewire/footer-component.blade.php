<div style="margin-left: -100px">
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" >
        <h6 class="text-uppercase font-weight-bold">
            <strong>{{__('main.products')}}</strong>
        </h6>
        <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        @foreach ($products as $item)

        <p style="width: 250px">
            <a href="{{ route('detail', ['slug' => $item->slug]) }}">{{$item->name}}</a>
        </p>
        @endforeach

    </div>
</div>
