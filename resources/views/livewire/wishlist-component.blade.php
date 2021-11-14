<div>

    @if ($wishlist)

    <table class="table">
        <tr>
            <th></th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($wishlist as $item)
        {{-- @php
        dd($item->product->name);
    @endphp --}}
            <tr>
                <td> <img src="{{ asset($item->product->image) }}" alt="*jpg" width="80px" height="80px"> </td>
                <td>{{ $item->product->name}}</td>
                <td>{{ $item->product->category['name'] }}</td>
                <td>{{ $item->product->price }} $</td>
                <td>
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip"
                    data-placement="top" wire:click="wishdel({{ $item->id }})"
                    title="Remove item">X
                </button>
            </td>

            <td><a href="{{ route('detail', ['slug' => $item->product->slug]) }}">Batafsil</a></td>



            </tr>

        @endforeach
    </table>

    @endif
</div>
