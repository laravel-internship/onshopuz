<div>
    <div class="comments-list text-center text-md-left">
    <div class="row mb-5">
        <!--Image column-->
        <img src="{{asset($order_detail->product->image)}}" width="20%" alt="">
        <!--/.Image column-->

        <!--Content column-->
        <form action="" wire:submit.prevent="store()" method="post">
            <div class="col-sm-10 col-12">


                <div>
                        <p class="fas fa-star blue-text">
                        <label for="rated-1"></label>
                        <input type="radio" id="rated-1" name="rating" wire:model="rating" value="1">
                    </p>
                    <p class="fas fa-star blue-text">
                        <label for="rated-2"></label>
                        <input type="radio" id="rated-2" name="rating" wire:model="rating" value="2" checked="checked">
                    </p>
                    <p class="fas fa-star blue-text">
                        <label for="rated-3"></label>
                        <input type="radio" id="rated-3" name="rating" wire:model="rating" value="3">
                    </p>
                    <p class="fas fa-star blue-text">
                        <label for="rated-4"></label>
                        <input type="radio" id="rated-4" name="rating" wire:model="rating" value="4">
                    </p>
                    <p class="fas fa-star blue-text">
                        <label for="rated-5"></label>
                        <input type="radio" id="rated-5" name="rating" wire:model="rating" value="5">
                    </p>

                </div>

                <textarea  rows="5" class="form-control" wire:model="comment"></textarea>
                <input type="submit" class="btn btn-primary btn-rounded" value="submit">
            </div>
        </form>
        <!--/.Content column-->
    </div>
    </div>

</div>
