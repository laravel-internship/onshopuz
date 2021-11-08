<div>
    <form action="" class="form-group">

    <div class="row">

        <!--Grid column-->
        <div class="col-md-4 mb-4">

            <div class="md-form">
                <input type="text" id="first_name" class="form-control" wire:model="first_name">
                <label for="first_name" class="">Firstname</label>
            </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

            <div class="md-form form-sm">
                <input type="text" id="last_name" class="form-control form-control-sm" wire:model="last_name">
                <label for="last_name" class="">Lastname</label>
            </div>

        </div>
        <!--Grid column-->

        <div class="col-md-4 mb-4">

            <div class="md-form form-sm">
                <input type="text" id="phone" class="form-control form-control-sm" wire:model="phone">
                <label for="phone" class="">Phone</label>
            </div>

        </div>

    </div>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-4 mb-4">

                <div class="md-form">
                    <input type="text" id="address" class="form-control" wire:model="address">
                    <label for="address" class="">Address</label>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-4">

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_type"  wire:model="payment_type" value="naqd" id="flexRadioDefault1"/>
                    <label class="form-check-label" for="flexRadioDefault1">Naqd </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_type"  wire:model="payment_type" value="payme" id="flexRadioDefault2"/>
                    <label class="form-check-label" for="flexRadioDefault2">Payme </label>
                </div>

            </div>
            <!--Grid column-->

            <input type="submit" class="btn btn-primary btn-rounded" value="Save" wire:click="update()">
        </div>
    </form>

</div>
