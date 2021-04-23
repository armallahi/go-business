@extends('layouts.app2')
@section('content')

<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-center py-5 px-4 px-sm-5">
            <div class="brand-logo">
              <img src="./assets/img/logo.jpg" alt="logo"style="width: 30%; align: left;">
            </div>
            <h4>تم إرسال رمز التحقق إلى بريدك الإلكتروني.</h4>
            <form class="pt-3" method="POST" action="{{ route('confirm-otp') }}">
              @csrf
              <div class="form-group">
                <input type="number" class="form-control form-control-lg" name="otp" id="exampleInputEmail1" placeholder="أدخل رمز التحقق">
              </div>
              <div class="mt-3">
                <input type="submit" value="إعادة تعيين" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
              </div>
              <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">

                </div>
              </div>
              <div class="mb-2">
                    @if(isset($error))
                      <div class="alert alert-danger" style="text-align:center">
                        {{ $error }}
                      </div>
                  @endif
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>

@endsection