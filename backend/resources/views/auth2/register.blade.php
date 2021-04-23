@extends('layouts.app2')
@section('content')

<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo">
              <img src="./assets/img/logo.jpg" alt="logo" style="width: 30%;">
            </div>
            <h4>تسجيل جديد</h4>
            <h6 class="font-weight-light">سجل حساب جديد</h6>
            <form class="pt-3" method="POST" action="{{ route('register') }}">
              @csrf
              <div class="form-group">
                <input type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" id="exampleInputUsername1" required placeholder="اسم المستخدم">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail1" required placeholder="الايميل">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" name="password" id="exampleInputPassword1"  required placeholder="كلمة السر">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" name="password_confirmation"  required placeholder="تأكيد كلمة المرور">
              </div>

              <div class="mb-4">
                <div class="form-check">

                </div>
              </div>
              <div class="mt-3">
                {{-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">تسجيل </a> --}}
                <input type="submit" value="تسجيل" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
              </div>
              <div class="text-center mt-4 font-weight-light">
                يوجد لديك حساب مسبق؟ <a href="{{ route('login') }}" class="text-primary">تسجيل دخول</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  @endsection