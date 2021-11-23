@extends('layouts.base-admin')
@section('content')
    <!--Section: Table-->
    <section>


        <div class="card card-cascade narrower z-depth-0">

            <!--Card image-->
            <div
                class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">



                <a href="" class="white-text mx-3">Users</a>
                <a href="{{ route('user.create') }}"> <button type="button"
                        class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                            class="fas fa-pencil-alt mt-0"></i></button></a>
            </div>


        </div>
        <!--/Card image-->

        <div class="px-4">

            <div class="table-responsive">
                @if ($user)


                    <!--Table-->
                    <table class="table table-hover mb-0">

                        <!--Table head-->
                        <thead>
                            <tr>
                                <th class="th-lg"><a href="">Name<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Email<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Password<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Role<i class="fas fa-sort ml-1"></i></a></th>



                                <th></th>
                            </tr>
                        </thead>
                        <!--Table head-->

                        <!--Table body-->
                        <tbody>
                            @foreach ($user as $item)

                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td style="width: 50px">{{ $item->password }}</td>
                                    <td>
                                        @php
                                        foreach ($item->getRoleNames()  as $value) {
                                           echo $value;
                                        }
                                    @endphp</td>
                                    <td>
                                        <div>
                                            <form action="{{ route('user.edit', ['id' => $item->id]) }}" method="get">
                                                @method('get')
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-outline-blue btn-rounded btn-sm px-2"><i
                                                        class="fas fa-eraser mt-0"></i></button>
                                            </form>
                                            <form action="{{ route('user.delete', ['id' => $item->id]) }}" method="POST">
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
                <select class="mdb-select colorful-select dropdown-primary md-form hidden-md-down">
                    <option value="" disabled>Rows number</option>
                    <option value="1" selected>5 rows</option>
                    <option value="2">25 rows</option>
                    <option value="3">50 rows</option>
                    <option value="4">100 rows</option>
                </select>

                <!--Pagination -->
                <nav class="my-4">
                    <ul class="pagination pagination-circle pg-blue mb-0">

                        <!--First-->
                        <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link">First</a>
                        </li>

                        <!--Arrow left-->
                        <li class="page-item disabled">
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <!--Numbers-->
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link">5</a></li>

                        <!--Arrow right-->
                        <li class="page-item">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>

                        <!--First-->
                        <li class="page-item clearfix d-none d-md-block"><a class="page-link">Last</a></li>

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
