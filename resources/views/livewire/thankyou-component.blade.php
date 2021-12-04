<div style="display: flex; justify-content: space-around;">
    <div >
        <h1>{{auth()->user()->name}} {{__'main.bqq'}}</h1>
        <h3>{{__'main.sbr'}} {{$number}}</h3>
    </div>

    <div> <a href="{{route('home')}}" class="btn btn-primary btn-rounded"
                     style="font-size: 18px">{{__('main.home')}}</a></div>
    </div>
</div>
