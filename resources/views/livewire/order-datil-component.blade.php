<div>
    <table class="table">
        <tr>
            <th></th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th></th>
        </tr>
        {{-- @foreach ($ordet as $item) --}}

            <tr>
                <td> <img src="{{ asset($ordet->product->image) }}" alt="*jpg" width="80px" height="80px"> </td>
                <td>{{ $ordet->product->name }}</td>
                <td>{{ $ordet->product->price }}$</td>
                <td>{{ $ordet->product->quatity }}</td>
                <td><a href="{{ route('review', ['order_detail_id' => $ordet->id])}}">Izoh</a></td>



            </tr>
{{--
        @endforeach --}}
    </table>

</div>
