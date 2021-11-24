@extends('layouts.base-admin')
@section('content')

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-xl-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card card-cascade cascading-admin-card">

            <!--Card Data-->
            <div class="admin-up">
              <i class="far fa-money-bill-alt primary-color"></i>
              <div class="data">
                <p>SALES</p>
                <h4 class="font-weight-bold dark-grey-text">2000$</h4>
              </div>
            </div>
            <!--/.Card Data-->

            <!--Card content-->
            <div class="card-body card-body-cascade">
              <div class="progress mb-3">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!--Text-->
              <p class="card-text">Better than last week (25%)</p>
            </div>
            <!--/.Card content-->

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-xl-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card card-cascade cascading-admin-card">

            <!--Card Data-->
            <div class="admin-up">
              <i class="fas fa-chart-line warning-color"></i>
              <div class="data">
                <p>SUBSCRIPTIONS</p>
                <h4 class="font-weight-bold dark-grey-text">200</h4>
              </div>
            </div>
            <!--/.Card Data-->

            <!--Card content-->
            <div class="card-body card-body-cascade">
              <div class="progress mb-3">
                <div class="progress-bar red accent-2" role="progressbar" style="width: 25%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!--Text-->
              <p class="card-text">Worse than last week (25%)</p>
            </div>
            <!--/.Card content-->

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-xl-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card card-cascade cascading-admin-card">

            <!--Card Data-->
            <div class="admin-up">
              <i class="fas fa-chart-pie light-blue lighten-1"></i>
              <div class="data">
                <p>TRAFFIC</p>
                <h4 class="font-weight-bold dark-grey-text">20000</h4>
              </div>
            </div>
            <!--/.Card Data-->

            <!--Card content-->
            <div class="card-body card-body-cascade">
              <div class="progress mb-3">
                <div class="progress-bar red accent-2" role="progressbar" style="width: 75%" aria-valuenow="75"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!--Text-->
              <p class="card-text">Worse than last week (75%)</p>
            </div>
            <!--/.Card content-->

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-xl-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card card-cascade cascading-admin-card">

            <!--Card Data-->
            <div class="admin-up">
              <i class="fas fa-chart-bar red accent-2"></i>
              <div class="data">
                <p>ORGANIC TRAFFIC</p>
                <h4 class="font-weight-bold dark-grey-text">2000</h4>
              </div>
            </div>
            <!--/.Card Data-->

            <!--Card content-->
            <div class="card-body card-body-cascade">
              <div class="progress mb-3">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!--Text-->
              <p class="card-text">Better than last week (25%)</p>
            </div>
            <!--/.Card content-->

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
    <!--Grid row-->


@endsection
