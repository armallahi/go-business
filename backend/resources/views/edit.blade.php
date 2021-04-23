@extends('layouts.app2')
@section('content')

@include('inc.header')
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->


    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
  @include('inc.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
        @if (\Session::has('success'))
            <div class="alert alert-success" style="text-align:center">
                {!! \Session::get('success') !!}
            </div>
         @elseif(\Session::has('error'))
            <div class="alert alert-danger" style="text-align:center">
                {!! \Session::get('error') !!}
            </div>
        @endif
            <div class="row">
                <div class="col-md-6 offset-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center"> إضافة بيانات</h4>
                            <p class="card-description text-center">
                                قم بتعبئة الحقول أدناه
                            </p>
                            <form class="forms-sample" method="POST" action="{{ route('edit') }}">
                                @csrf
                                <div class="form-group text-right">
                                    <label for="exampleInputUsername1">التكاليف الثابتة</label>
                                    <input type="number" name="fixed_costs" value="{{ $data['fixed_costs'] }}" class="form-control text-right" id="exampleInputUsername1"
                                        placeholder="التكاليف الثابتة" required>
                                </div>
                                <div class="form-group text-right">
                                    <label for="exampleInputEmail1">التكاليف المتغيرة</label>
                                    <input type="number" name="variable_costs" class="form-control text-right" value="{{ $data['variable_costs'] }}" id="exampleInputEmail1"
                                        placeholder="التكاليف المتغيرة" required>
                                </div>
                                <div class="form-group text-right">
                                    <label for="exampleInputPassword1">تكاليف الأثاث</label>
                                    <input type="number" name="furniture_costs" value="{{ $data['furniture_costs'] }}" class="form-control text-right" id="exampleInputPassword1"
                                        placeholder="تكاليف الأثاث" required>
                                </div>
                                <div class="form-group text-right">
                                    <label for="exampleInputConfirmPassword1">تكاليف المعدات</label>
                                    <input type="number" name="equipment_costs" value="{{ $data['equipment_costs'] }}" class="form-control text-right"
                                        id="exampleInputConfirmPassword1" placeholder="تكاليف المعدات" required>
                                </div>

                                <div class="form-group text-right">
                                    <label for="exampleInputConfirmPassword1">سعر الإيجار</label>
                                    <input type="number" name="rental_payment" value="{{ $data['rental_payment'] }}" class="form-control text-right"
                                        id="exampleInputConfirmPassword1" placeholder="سعر الإيجار" required>
                                </div>

                                <div class="form-group text-right">
                                    <label for="exampleInputConfirmPassword1">رأس المال</label>
                                    <input type="number" name="capital" value="{{ $data['capital'] }}" class="form-control text-right"
                                        id="exampleInputConfirmPassword1" placeholder="رأس المال" required>
                                </div>

                              <div class="form-check form-check-flat form-check-primary">
                                    <label class="form-check-label">
                                      <!--  <input type="checkbox" class="form-check-input">
                                        Remember me -->
                                    </label>
                                </div>
                                <input type="hidden" name="id" value="{{ $id }}">
                                <span style="margin-left: 35%;">
                                  <button class="btn btn-light">الغاء</button>
                                <button type="submit" onclick="return confirm('هل أنت متأكد؟')" class="btn btn-primary mr-2" style="background-color: #2E6891 !important;" >تعديل</button>
                                </span>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('inc.footer')
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>

@endsection