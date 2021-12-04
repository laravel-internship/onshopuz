<div>
    <table class="table">
        <tr>
            <th>FIO</th>
            <th>Adress</th>
            <th>Phone</th>
            <th>All Price</th>
            <th>Payment Type</th>
            <th>Status</th>
            <th></th>
        </tr>
        @foreach ($order as $item)

            <tr>
                <td>{{ $item->first_name . ' ' . $item->last_name ?? ' ' }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->all_price }}</td>
                <td>{{ $item->payment_type }}</td>
                <td style="font-weight: 700;font-size: 25px;color:{{ ($item->status == 0)? 'red' :(($item->status == 1 )?  'yellow' : (($item->status == 2 )?  'green' :(($item->status == 3 )?  'black' :'' ) )) }};">{{ $status[$item->status][0] }}</td>
                @if (!auth()->user()->hasRole('admin'))

                <td><a href="{{ route('orderdatil', ['order_id' => $item->id]) }}">Batafsil</a></td>
                @endif



            </tr>

        @endforeach
    </table>
</div>
