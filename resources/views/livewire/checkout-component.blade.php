<div style="display: flex; justify-content: space-around">
    <div style="width: 68%; margin-right: 30px">
        <h2>Order</h2>
        <form action="" class="form-group" >

            <div class="row">

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <div class="md-form">
                        {{-- <label for="first_name" class="">Firstname</label> --}}
                        <input type="text" id="first_name" class="form-control" wire:model="first_name"
                            placeholder="Firstname">
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <div class="md-form form-sm">
                        {{-- <label for="last_name" class="">Lastname</label> --}}
                        <input type="text" id="last_name" class="form-control " wire:model="last_name"
                            placeholder="Lastname">
                    </div>

                </div>
                <!--Grid column-->

                <div class="col-md-4 mb-4">

                    <div class="md-form form-sm">
                        {{-- <label for="phone" class="">Phone</label> --}}
                        <input type="text" id="phone" class="form-control " wire:model="phone" placeholder="Phone">
                    </div>

                </div>

            </div>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <div class="md-form">
                        {{-- <label for="address" class="">Address</label> --}}
                        <input type="text" id="address" class="form-control" wire:model="address"
                            placeholder="Address">
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_type" wire:model="payment_type"
                            value="naqd" id="flexRadioDefault1" />
                        <label class="form-check-label" for="flexRadioDefault1">Naqd </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_type" wire:model="payment_type"
                            value="payme" id="flexRadioDefault2" />
                        <label class="form-check-label" for="flexRadioDefault2">Payme </label>
                    </div>

                </div>
                <!--Grid column-->

                <input type="submit" class="btn btn-primary btn-rounded" value="Save" wire:click="update()">
            </div>
        </form>

    </div>
    <div style="display: flex; flex-direction: column; justify-content: center; width: 30%; color: rgb(0, 188, 230); font-weight: 700; ">

            <p style="font-size: 28px">Total amount: {{ $order->all_price}} $</p>
            <p style="font-size: 25px">Supplier service fee: {{$order->delivery_price}} $</p>

    </div>

</div>
