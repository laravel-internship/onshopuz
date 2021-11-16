<div>
       <!--Section: Table-->
   <section>


    <div class="card card-cascade narrower z-depth-0">

        <!--Card image-->
        <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

            <div>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-th-large mt-0"></i></button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-columns mt-0"></i></button>
            </div>

            <a href="" class="white-text mx-3">Table name</a>

            <div>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-pencil-alt mt-0"></i></button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-eraser mt-0"></i></button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-info-circle mt-0"></i></button>
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
        <th>
            <input class="form-check-input" type="checkbox" id="checkbox">
            <label for="checkbox" class="form-check-label mr-2 label-table"></label>
        </th>
        <th class="th-lg"><a>Id<i class="fas fa-sort ml-1"></i></a></th>
        <th class="th-lg"><a href="">Name<i class="fas fa-sort ml-1"></i></a></th>
        <th class="th-lg"><a href="">Category<i class="fas fa-sort ml-1"></i></a></th>
        <th class="th-lg"><a href="">Price<i class="fas fa-sort ml-1"></i></a></th>
        <th class="th-lg"><a href="">Quatity<i class="fas fa-sort ml-1"></i></a></th>
        <th class="th-lg"><a href="">Discount<i class="fas fa-sort ml-1"></i></a></th>
        <th class="th-lg"><a href="">Data<i class="fas fa-sort ml-1"></i></a></th>
        <th class="th-lg"><a href="">Slug<i class="fas fa-sort ml-1"></i></a></th>
        <th class="th-lg"><a href="">Status<i class="fas fa-sort ml-1"></i></a></th>
        <th class="th-lg"><a href="">Image<i class="fas fa-sort ml-1"></i></a></th>
    </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach ($products as $item)
    <tr>
        <th scope="row">
            <input class="form-check-input" type="checkbox" id="checkbox1">
            <label for="checkbox1" class="label-table"></label>
        </th>
      <td>{{$item->id}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->category->name}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->quatity}}</td>
      <td>{{$item->discount}}</td>
      <td>{{$item->data}}</td>
      <td>{{$item->slug}}</td>
      <td>{{$item->status}}</td>
      <td><img src="{{asset($item->image)}}" alt="" width="100px"></td>
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
                        <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link">First</a></li>

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
</div>
