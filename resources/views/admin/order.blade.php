@extends('layouts.base-admin')
@section('content')
    <!--Section: Table-->
    <section>


        <div class="card card-cascade narrower z-depth-0">

            <!--Card image-->
            <div
                class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">



                <a href="" class="white-text mx-3">Order</a>
            </div>


        </div>
        <!--/Card image-->

        <div class="px-4">

            <div class="table-responsive">
                @if ($order)


                    <!--Table-->
                    <table class="table table-hover mb-0">

                        <!--Table head-->
                        <thead>
                            <tr>
                                <th class="th-lg"><a href="">Full name<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Address<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Phone<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">All Price<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Create Data<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Finish Date<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Delivery Price<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Payment Type<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Status<i class="fas fa-sort ml-1"></i></a></th>



                                <th></th>
                            </tr>
                        </thead>
                        <!--Table head-->

                        <!--Table body-->
                        <tbody>
                            @foreach ($order as $item)
                                <tr>
                                    <td>{{ $item->last_name.$item->first_name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->all_price }} $</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->delivery_price }}</td>
                                    <td>{{ $item->payment_type }}</td>
                                    <td style="font-weight: 700;font-size: 25px;color:{{ ($item->status == 0)? 'red' :(($item->status == 1 )?  'yellow' : (($item->status == 2 )?  'green' :'' )) }};">{{ $status[$item->status][0] }}</td>

                                    <td>
                                        <div>
                                            <form action="{{ route('order.edit', ['id' => $item->id]) }}" method="get">
                                                @method('get')
                                                @csrf
                                            <button type="submit" class="btn btn-outline-blue btn-rounded btn-sm px-2"><i
                                                    class="fas fa-eraser mt-0"></i></button>
                                                </form>
                                            <form action="{{ route('order.delete', ['id' => $item->id]) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-outline-blue      btn-rounded btn-sm px-2"><i
                                                        class="fas fa-info-circle mt-0"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <!--Table body-->
                    </table>
                    <!--Table-->

                @endif
            </div>

            <hr class="my-0">

            <!--Bottom Table UI-->
            <div class="d-flex justify-content-between">

                <!--Name-->
                <form action="{{ route('order') }}" method="get" style="display: flex">
                    <select name="perPage" class="mdb-select colorful-select dropdown-primary md-form hidden-md-down">
                        <option value="5">5 rows </option>
                        <option value="10">10 rows </option>
                        <option value="20">20 rows </option>
                        <option value="50">50 rows </option>

                    </select>
                    <input type="submit" class="btn " style="color: black; margin-top: 20px;margin-left: 10px;" value="OK">
                </form>

                <!--Pagination -->
                <nav class="my-4">
                    <ul class="pagination pagination-circle pg-blue mb-0">

                        <!--First-->
                        <li class="page-item clearfix d-none d-md-block"><a href="/admin/order?page=1 && perPage="{{$order->perPage()}}
                            class="page-link">First</a>
                    </li>

                        <!--Arrow left-->
                        <li class="page-item disabled">
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <!--Numbers-->
                        @for ($i = 1; $i <= $order->lastPage(); $i++)
                        @if ($order->currentPage() == $i)
                            <li class="page-item active"><a href="/admin/order?page={{ $i."&& perPage=".$order->perPage() }}"
                                    class="page-link">{{ $i }}</a></li>
                        @else
                            <li class="page-item"><a href="/admin/order?page={{ $i."&& perPage=".$order->perPage() }}"
                                    class="page-link">{{ $i }}</a></li>

                        @endif

                    @endfor

                        <!--Arrow right-->
                        <li class="page-item">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>

                        <!--First-->
                        <li class="page-item clearfix d-none d-md-block"><a
                            href="/admin/order?page={{ $order->lastPage()."&& perPage=".$order->perPage()}}" class="page-link">Last</a>
                    </li>

                    </ul>
                </nav>
                <!--/Pagination -->

            </div>
            <!--Bottom Table UI-->

        </div>
        </div>

    </section>
    <!--Section: Table-->

@endsection
