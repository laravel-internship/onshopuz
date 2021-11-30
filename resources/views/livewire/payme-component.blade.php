<div>

    <div class="row" style="display: flex; justify-content: center;">

        <!--Card-->
        <div class="card">

            <!--Card content-->
            <div class="card-body">

                <!-- Register form -->
                <form>
                    <p class="h5 text-center mb-4">Payme</p>

                    <div class="md-form">
                        <label class="form-check-label" for="number">Card Number</label>
                        <input type="text" id="number" class="form-control"  wire:model="number"
                         placeholder="0000 0000 0000 0000" maxlength="25">

                        <span data-error="wrong" style="color: red;">{{ $errors->first('number') }}</span><br>
                    </div>
                    <div class="md-form">
                        <label class="form-check-label" for="date">Card date</label>
                        <input type="text" id="date" class="form-control"  wire:model="date"
                            placeholder="00/00" maxlength="10">

                        <span data-error="wrong" style="color: red;">{{ $errors->first('date') }}</span><br>
                    </div>


                    <div class="text-center mt-4">
                        <button class="btn btn-deep-orange" type="submit" wire:click="cardsCreate()">Send</button>
                        <button class="btn btn-deep-orange" type="reset">Reset</button>
                    </div>

                </form>
                <!-- Register form -->

            </div>

        </div>
        <!--/.Card-->

    </div><br><br>


</div>
