<div>
    <form class="search-form" role="search">
        <div class="input-group md-form my-0 waves-light" >
            <form action="" style="display: inline">
                <input type="text" class="form-control" wire:model="search" value="{{$search}}" placeholder="Search">
                <button class="form-control" style="border: none" type="button" wire:click="search()"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
    </form>
</div>
