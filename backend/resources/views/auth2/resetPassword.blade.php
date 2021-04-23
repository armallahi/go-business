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
            <h4>سجل الدخول للبدء</h4>
            <h6 class="font-weight-light">تسجيل الدخول</h6>
            <form class="pt-3" method="POST" action="{{ route('resetPassword') }}">
              @csrf
              <div class="form-group">
                <input type="password" class="form-control form-control-lg" name="new_password" id="exampleInputEmail1" placeholder="كلمة السر الجديدة">

              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg" name="confirm_password" placeholder="تأكيد كلمة المرور">
              </div>
              <div class="mt-3">
                <input type="submit" value="تسجيل دخول" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
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