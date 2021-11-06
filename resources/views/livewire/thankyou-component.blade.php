<div>
    <h1>{{auth()->user()->name}} Buyurtmangiz qabul qilindi</h1>
    <h3>Siznig buyurtma raqamingiz {{$number}}</h3>
    <div> <a href="{{route('home')}}" class="btn btn-primary btn-rounded"
                     style="font-size: 18px">Order</a></div>
    </div>
</div>
