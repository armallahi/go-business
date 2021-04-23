@extends('layouts.app3')
@section('content')

@include('inc.header')
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->

    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    @include('inc.sidebar')
    <!-- partial -->
    <div class="main-panel">
      <form method="POST" action="{{ route('addFile') }}" enctype="multipart/form-data">
        @csrf
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-4 offset-md-4 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title d-flex">
                          <small class="ml-auto align-self-end">

                          </small>
                        </h4>
                        <input type="file" name="file" class="dropify" />
                      </div>
                    </div>
                  </div>
            </div>
            <input type="submit" class="btn btn-primary" style="background-color: #2E6891 !important; margin-left: 45%;" value="رفع ملف">
        </div>
      </form>        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('inc.footer')
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>

@endsection