@extends('layouts.base-admin')
@section('content')
    <!--Section: Table-->
    <section>


        <div class="card card-cascade narrower z-depth-0">

            <!--Card image-->
            <div
                class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">



                <a href="" class="white-text mx-3">Products</a>
                <a href="{{ route('product.create') }}"> <button type="button"
                        class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                            class="fas fa-pencil-alt mt-0"></i></button></a>
            </div>


        </div>
        <!--/Card image-->

        <div class="px-4">

            <div class="table-responsive">
                @if ($products)


                    <!--Table-->
                    <table class="table table-hover mb-0">

                        <!--Table head-->
                        <thead>
                            <tr>
                                <th class="th-lg"><a href="">Image<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Name<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Slug<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Category<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Price<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Quatity<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Discount<i class="fas fa-sort ml-1"></i></a></th>
                                <th></th>
                            </tr>
                        </thead>
                        <!--Table head-->

                        <!--Table body-->
                        <tbody>
                            @foreach ($products as $item)
                                <tr>
                                    <td><img src="{{ asset($item->image) }}" alt="" width="100px"></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ $item->price }}$</td>
                                    <td>{{ $item->quatity }}</td>
                                    <td>{{ $item->discount }}{{ $item->discount ? '$' : 'no discount available' }}</td>
                                    <td>
                                        <div>
                                            <form action="{{ route('product.edit', ['id' => $item->id]) }}" method="get">
                                                @method('get')
                                                @csrf
                                            <button type="submit" class="btn btn-outline-blue btn-rounded btn-sm px-2"><i
                                                    class="fas fa-eraser mt-0"></i></button>
                                                </form>
                                            <form action="{{ route('product.delete', ['id' => $item->id]) }}" method="POST">
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
                    <select name="perPage" class="mdb-select colorful-select dropdown-primary md-form hidden-md-down">
                        <option value="" disabled>Rows number</option>
                        <option value="5" selected><a href="/admin/products?perPage=5">5 rows</a></option>
                        <option value="10">10 rows</option>
                        <option value="20">20 rows</option>
                        <option value="100">100 rows</option>
                    </select>

                <!--Pagination -->
                <nav class="my-4">
                    <ul class="pagination pagination-circle pg-blue mb-0">

                        <!--First-->
                        <li class="page-item clearfix d-none d-md-block"><a href="/admin/products?page=1" class="page-link">First</a>
                        </li>

                        <!--Arrow left-->
                        <li class="page-item disabled">
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <!--Numbers-->
                        @for ($i = 1; $i<=$products->lastPage(); $i++)
                            @if ($products->currentPage() == $i)
                                <li class="page-item active"><a href="/admin/products?page={{$i}}" class="page-link">{{$i}}</a></li>
                            @else
                                <li class="page-item"><a href="/admin/products?page={{$i}}" class="page-link">{{$i}}</a></li>

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
                        <li class="page-item clearfix d-none d-md-block"><a href="/admin/products?page={{$products->lastPage()}}" class="page-link">Last</a></li>

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
