@extends('layouts.master')
@section('css')
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="{{ URL::asset('plugins/chartist/css/chartist.min.css') }}">
@endsection

@section('breadcrumb')
<div class="col-sm-6 text-left" >
     <h4 class="page-title">Dashboard</h4>
     <ol class="breadcrumb">
         <li class="breadcrumb-item active">Welcome to OpalTime Card</li>
     </ol>
</div>
@endsection

@section('content')
                   <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <span class="ti-id-badge" style="font-size: 20px"></span>
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Total <br> Employees</h5>
                                            <h4 class="font-500">{{$data[0]}} </h4>
                                            <span class="ti-user" style="font-size: 71px"></span>

                                        </div>
                                        <div class="pt-2">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>
                                            <p class="text-white-50 mb-0">More info</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <i class="ti-alarm-clock" style="font-size: 20px"></i>
                                            </div>
                                            <h6  class="font-16 text-uppercase mt-0 text-white-50" >On Time <br> Percentage</h6>
                                            <h4 class="font-500">{{$data[3]}} %<i class="text-danger ml-2"></i></h4>
                                            <span class="peity-donut" data-peity='{ "fill": ["#626ed4", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">{{$data[3]}}/{{count($data)}}</span>

                                        </div>
                                        <div class="pt-2">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0">More info</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <i class=" ti-check-box " style="font-size: 20px"></i>
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">On Time <br> Today</h5>
                                            <h4 class="font-500">{{$data[1]}} <i class=" text-success ml-2"></i></h4>
                                            <span class="peity-donut" data-peity='{ "fill": ["#626ed4", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">{{$data[1]}}/{{count($data)}}</span>

                                        </div>
                                        <div class="pt-2">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0">More info</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <i class="ti-alert" style="font-size: 20px"></i>
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Late <br> Today</h5>
                                            <h4 class="font-500">{{$data[2]}}<i class=" text-success ml-2"></i></h4>
                                            <span class="peity-donut" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">{{$data[2]}}/{{count($data)}}</span>

                                        </div>
                                        <div class="pt-2">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0">More info</p>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                        <!-- end row -->

                      {{--  <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-5">Monthly Report</h4>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div>
                                                    <div id="chart-with-area" class="ct-chart earning ct-golden-section"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="text-center">
                                                            <p class="text-muted mb-4">This month</p>
                                                            <h4>124</h4>
                                                            <p class="text-muted mb-5">It will be as simple as in fact it will be occidental.</p>
                                                            <span class="peity-donut" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">{{$data[3]}}/{{count($data)}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-center">
                                                            <p class="text-muted mb-4">Last month</p>
                                                            <h4>200</h4>
                                                            <p class="text-muted mb-5">It will be as simple as in fact it will be occidental.</p>
                                                            <span class="peity-donut" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">3/5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>

                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <h4 class="mt-0 header-title mb-4">Sales Analytics</h4>
                                        </div>
                                        <div class="wid-peity mb-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <p class="text-muted">Online</p>
                                                        <h5 class="mb-4">1,542</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-4">
                                                        <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wid-peity mb-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <p class="text-muted">Offline</p>
                                                        <h5 class="mb-4">6,451</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-4">
                                                        <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}' data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <p class="text-muted">Marketing</p>
                                                        <h5>84,574</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-4">
                                                        <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        <!-- end row -->
                   <div class="row">
                       <div class="col-6">
                           <div class="card">
                               <div class="card-body">

                                   <table id="datatable-buttons" class="table table-striped table-hover dt-responsive display nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                       <thead>
                                       <tr>
                                           <th colspan="3">  Recent Activity</th>
                                       </tr>
                                       <tr>
                                           <th data-priority="1">Status</th>
                                           <th data-priority="2">Name</th>
                                           <th data-priority="3">Last Activity</th>


                                       </tr>
                                       </thead>
                                       <tbody>

                                       @foreach ($attendances as $attendance)

                                           <tr>
                                               <td>{{ $attendance->attendance_time }}
                                                   @if ($attendance->status == 1)
                                                       <span class="badge badge-success badge-pill float-right">IN</span>
                                                   @else
                                                       <span class="badge badge-danger badge-pill float-right">OUT</span>
                                                   @endif
                                               </td>
                                               <td>{{ $attendance->employee->name }}</td>
                                               <td>
                                                   @if ($attendance->status == 1)
                                                       IN
                                                   @else
                                                       OUT
                                                   @endif
                                                   at
                                                       {{ $attendance->attendance_time }}
                                                    On
                                                   {{ $attendance->attendance_date }}</td>
                                              {{-- <td>{{ $attendance->emp_id }}</td>--}}



                                              {{-- <td>{{ $attendance->employee->schedules->first()->time_in }} </td>
                                               <td>{{ $attendance->employee->schedules->first()->time_out }}</td>--}}
                                           </tr>

                                       @endforeach


                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>



                   <div class="col-6">
                       <div class="card">
                           <div class="card-body">

                               <table id="datatable-buttons" class="table table-striped table-hover dt-responsive display nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                   <thead>
                                   <tr>
                                       <th colspan="3">  Departments</th>
                                   </tr>
                                   <tr>
                                       <th data-priority="1">Department Name</th>
                                       <th data-priority="2">Employees</th>
                                       <th data-priority="3">In	</th>
                                       <th data-priority="3">Out</th>

                                   </tr>
                                   </thead>
                                   <tbody>
                                   @if ($empgnams->isEmpty())
                                       <tr>
                                           <td colspan="5"><center>No attendance records found</center></td>
                                       </tr>
                                   @else
                                    @foreach ($empgnams as $empgname)
                                        <tr>
                                            <td>{{ $empgname['position'] }}</td>
                                            <td>{{ $empgname['count'] }}</td>
                                            <td>{{ $empgname['ine'] }}</td>
                                            <td>{{ $empgname['oute'] }}</td>
                                        </tr>
                                    @endforeach
                                   @endif

                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
                   </div>
                   </div>
                   </div> <!-- end col -->
                   </div> <!-- end row -->

                        <!-- end row -->
@endsection

@section('script')
<!--Chartist Chart-->
<script src="{{ URL::asset('plugins/chartist/js/chartist.min.js') }}"></script>
<script src="{{ URL::asset('plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- peity JS -->
<script src="{{ URL::asset('plugins/peity-chart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/dashboard.js') }}"></script>
@endsection