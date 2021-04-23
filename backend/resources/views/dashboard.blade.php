@extends('layouts.app2')
@section('content')
<style>
    .text-sm{
        margin-top:15px !important;
    }
</style>
  @include('inc.header')
    <div class="container-fluid page-body-wrapper">

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
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title  text-center">البيانات المضافة</p>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive text-right">
                                            <table id="myTable" class="display expandable-table" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>رمز المشروع</th>
                                                        <th>التكاليف الثابتة</th>
                                                        <th>التكاليف المتغيرة</th>
                                                        <th>تكاليف الأثاث</th>
                                                        <th>تكاليف المعدات</th>
                                                        <th>سعر الإيجار</th>
                                                        <th>رأس المال</th>
                                                        <th>تعديل</th>
                                                        <th>إزالة</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(count($costs) > 0)
                                                        @foreach($costs as $cost)

                                                            @php
                                                                $costData = $cost->data();
                                                                $id = $cost->id();
                                                            @endphp

                                                            <tr class="odd">
                                                                <td class=" select-checkbox">{{ $id }}</td>
                                                                <td class="sorting_1">@if(isset($costData['fixed_costs'])) {{ $costData['fixed_costs'] }} @endif</td>
                                                                <td>@if(isset( $costData['variable_costs'] )) {{ $costData['variable_costs'] }} @endif</td>
                                                                <td>@if(isset($costData['furniture_costs'])){{ $costData['furniture_costs'] }}@endif</td>
                                                                <td>@if(isset($costData['equipment_costs'])){{ $costData['equipment_costs'] }}@endif</td>
                                                                <td>@if(isset($costData['rental_payment'])){{ $costData['rental_payment'] }}@endif</td>
                                                                <td>@if(isset($costData['capital'])){{$costData['capital'] }}@endif</td>
                                                                <th><a href="{{ route('edit') }}/{{ $id }}" class="btn btn-primary btn-sm" style="background-color: #2E6891 !important">تعديل</a></th>
                                                                <th><a href="{{ route('remove', $id) }}" class="btn btn-danger btn-sm">إزالة</a></th>
                                                                <td class=" details-control"></td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        لم يتم إضافة بيانات
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @if(count($costs) > 0)
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-sm">
                      <li class="page-item"><a class="page-link" href="http://localhost/muneera/dashboard?page={{ $costs->currentPage()-1 }}" @if($costs->currentPage() == 1) style="pointer-events: none; cursor: default;" @endif>Previous</a></li>
                      @for($i = 1; $i<= $costs->lastPage(); $i++)
                        <li class="page-item @if($costs->currentPage() == $i) active @endif"><a class="page-link" href="http://localhost/muneera/dashboard?page={{ $i }}">{{ $i }}</a></li>
                    @endfor
                      <li class="page-item"><a class="page-link" href="http://localhost/muneera/dashboard?page={{ $costs->currentPage()+1 }}" @if($costs->lastPage() == $costs->currentPage()) style="pointer-events: none; cursor: default;" @endif>Next</a></li>
                    </ul>
                  </nav>
                @endif --}}
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('inc.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
@endsection