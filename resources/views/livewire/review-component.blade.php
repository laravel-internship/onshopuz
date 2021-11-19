<div>
    <div class="comments-list text-center text-md-left">
    <div class="row mb-5">
        <!--Image column-->
        <img src="{{asset($order_detail->product->image)}}" width="20%" alt="">
        <!--/.Image column-->

        <!--Content column-->
        <form action="" wire:submit.prevent="store()" method="post">


            <fieldset class="rating">
                <input type="radio" id="star5" wire:model="rating" name="rating" value="5" />
                <label for="star5">5 stars</label>
                <input type="radio" id="star4" wire:model="rating" name="rating" value="4" />
                <label for="star4">4 stars</label>
                <input type="radio" id="star3" wire:model="rating" name="rating" value="3" />
                <label for="star3">3 stars</label>
                <input type="radio" id="star2" wire:model="rating" name="rating" value="2" />
                <label for="star2">2 stars</label>
                <input type="radio" id="star1" wire:model="rating" name="rating" value="1" />
                <label for="star1">1 star</label>
            </fieldset>

                <textarea  rows="5" class="form-control" wire:model="comment"></textarea>
                <input type="submit" class="btn btn-primary btn-rounded" value="submit">

        </form>
        <!--/.Content column-->
    </div>
    </div>

</div>
<style>
    .rating {
        float:left;
        border:none;
    }
    .rating:not(:checked) > input {
        position:absolute;
        top:-9999px;
        clip:rect(0, 0, 0, 0);
    }
    .rating:not(:checked) > label {
        float:right;
        width:1em;
        padding:0 .1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:200%;
        line-height:1.2;
        color:#ddd;
    }
    .rating:not(:checked) > label:before {
        content:'★ ';
    }
    .rating > input:checked ~ label {
        color: #f70;
    }
    .rating:not(:checked) > label:hover, .rating:not(:checked) > label:hover ~ label {
        color: gold;
    }
    .rating > input:checked + label:hover, .rating > input:checked + label:hover ~ label, .rating > input:checked ~ label:hover, .rating > input:checked ~ label:hover ~ label, .rating > label:hover ~ input:checked ~ label {
        color: #ea0;
    }
    .rating > label:active {
        position:relative;
    }

</style>
