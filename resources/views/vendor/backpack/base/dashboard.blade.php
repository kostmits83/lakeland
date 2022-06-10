@extends(backpack_view('blank'))


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css" integrity="sha512-SUJFImtiT87gVCOXl3aGC00zfDl6ggYAw5+oheJvRJ8KBXZrr/TMISSdVJ5bBarbQDRC2pR5Kto3xTR0kpZInA==" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" />

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" integrity="sha512-vBmx0N/uQOXznm/Nbkp7h0P1RfLSj0HQrFSzV8m7rOGyj30fYAOKHYvCNez+yM8IrfnW0TCodDEjRqf6fodf/Q==" crossorigin="anonymous"></script>

@section('content')

<div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-settings"></i></button>
                      <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                    </div>
                    <div class="text-value">251</div>
                    <div>Destinations</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart1" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-success">
                  <div class="card-body pb-0">
                    <button class="btn btn-transparent p-0 float-right" type="button"><i class="icon-location-pin"></i></button>
                    <div class="text-value">9.823</div>
                    <div>Ticket Agents</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart2" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-settings"></i></button>
                      <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                    </div>
                    <div class="text-value">287.354</div>
                    <div>Passengers</div>
                  </div>
                  <div class="chart-wrapper mt-3" style="height:70px;">
                    <canvas class="chart" id="card-chart3" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-dark">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-settings"></i></button>
                      <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                    </div>
                    <div class="text-value">287</div>
                    <div>Weekly Flights</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart4" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            
            <!-- /.row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">Traffic & Sales</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="callout callout-info"><small class="text-muted">New Passengers</small><br><strong class="h4">9,123</strong>
                              <div class="chart-wrapper">
                                <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                              </div>
                            </div>
                          </div>
                          <!-- /.col-->
                          <div class="col-sm-6">
                            <div class="callout callout-danger"><small class="text-muted">Recuring Passengers</small><br><strong class="h4">22,643</strong>
                              <div class="chart-wrapper">
                                <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                              </div>
                            </div>
                          </div>
                          <!-- /.col-->
                        </div>
                        <!-- /.row-->
                        <hr class="mt-0">
                        <div class="progress-group mb-4">
                          <div class="progress-group-prepend"><span class="progress-group-text">Monday</span></div>
                          <div class="progress-group-bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <div class="progress-group mb-4">
                          <div class="progress-group-prepend"><span class="progress-group-text">Tuesday</span></div>
                          <div class="progress-group-bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <div class="progress-group mb-4">
                          <div class="progress-group-prepend"><span class="progress-group-text">Wednesday</span></div>
                          <div class="progress-group-bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <div class="progress-group mb-4">
                          <div class="progress-group-prepend"><span class="progress-group-text">Thursday</span></div>
                          <div class="progress-group-bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <div class="progress-group mb-4">
                          <div class="progress-group-prepend"><span class="progress-group-text">Friday</span></div>
                          <div class="progress-group-bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <div class="progress-group mb-4">
                          <div class="progress-group-prepend"><span class="progress-group-text">Saturday</span></div>
                          <div class="progress-group-bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <div class="progress-group mb-4">
                          <div class="progress-group-prepend"><span class="progress-group-text">Sunday</span></div>
                          <div class="progress-group-bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="callout callout-warning"><small class="text-muted">Searches</small><br><strong class="h4">78,623</strong>
                              <div class="chart-wrapper">
                                <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                              </div>
                            </div>
                          </div>
                          <!-- /.col-->
                          <div class="col-sm-6">
                            <div class="callout callout-success"><small class="text-muted">Searchers by Ticket Agents</small><br><strong class="h4">49,123</strong>
                              <div class="chart-wrapper">
                                <canvas id="sparkline-chart-4" width="100" height="30"></canvas>
                              </div>
                            </div>
                          </div>
                          <!-- /.col-->
                        </div>
                        <!-- /.row-->
                        <hr class="mt-0">
                        <div class="progress-group">
                          <div class="progress-group-header"><i class="icon-user progress-group-icon"></i>
                            <div>Male</div>
                            <div class="ml-auto font-weight-bold">43%</div>
                          </div>
                          <div class="progress-group-bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <div class="progress-group mb-5">
                          <div class="progress-group-header"><i class="icon-user-female progress-group-icon"></i>
                            <div>Female</div>
                            <div class="ml-auto font-weight-bold">37%</div>
                          </div>
                          <div class="progress-group-bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <div class="progress-group">
                          <div class="progress-group-header align-items-end"><i class="icon-globe progress-group-icon"></i>
                            <div>United Kingdom</div>
                            <div class="ml-auto font-weight-bold mr-2">191.235</div>
                            <div class="text-muted small">(56%)</div>
                          </div>
                          <div class="progress-group-bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <div class="progress-group">
                          <div class="progress-group-header align-items-end"><i class="icon-social-facebook progress-group-icon"></i>
                            <div>Greece</div>
                            <div class="ml-auto font-weight-bold mr-2">51.223</div>
                            <div class="text-muted small">(15%)</div>
                          </div>
                          <div class="progress-group-bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <div class="progress-group">
                          <div class="progress-group-header align-items-end"><i class="icon-social-twitter progress-group-icon"></i>
                            <div>Spain</div>
                            <div class="ml-auto font-weight-bold mr-2">37.564</div>
                            <div class="text-muted small">(11%)</div>
                          </div>
                          <div class="progress-group-bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <div class="progress-group">
                          <div class="progress-group-header align-items-end"><i class="icon-social-linkedin progress-group-icon"></i>
                            <div>Germany</div>
                            <div class="ml-auto font-weight-bold mr-2">27.319</div>
                            <div class="text-muted small">(8%)</div>
                          </div>
                          <div class="progress-group-bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">Ticket Agents</div>
                  <div class="card-body p-0">
                    <table class="table table-responsive-sm table-striped mb-0">
                      <thead class="thead-light">
                        <tr>
                          <th><i class="icon-people"></i> User</th>
                          <th class="text-center">Country</th>
                          <th>Conversion Rate</th>
                          <th class="text-center">Payment Method</th>
                          <th>Activity</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div>Yiorgos Avraamu</div>
                            <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center"><i class="flag-icon flag-icon-us h4 mb-0" id="us" title="us"></i>GR</td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left"><strong>50%</strong></div>
                              <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center"><i class="fa fa-cc-mastercard" style="font-size:24px"></i>Cash</td>
                          <td>
                            <div class="small text-muted">Last login</div><strong>10 sec ago</strong>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>Avram Tarasios</div>
                            <div class="small text-muted"><span>Recurring</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center"><i class="flag-icon flag-icon-br h4 mb-0" id="br" title="br"></i>UK</td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left"><strong>10%</strong></div>
                              <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center"><i class="fa fa-cc-visa" style="font-size:24px"></i>Premier Points</td>
                          <td>
                            <div class="small text-muted">Last login</div><strong>5 minutes ago</strong>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>Quintin Ed</div>
                            <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center"><i class="flag-icon flag-icon-in h4 mb-0" id="in" title="in"></i>UK</td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left"><strong>74%</strong></div>
                              <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center"><i class="fa fa-cc-stripe" style="font-size:24px"></i>Cash</td>
                          <td>
                            <div class="small text-muted">Last login</div><strong>1 hour ago</strong>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>Enéas Kwadwo</div>
                            <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center"><i class="flag-icon flag-icon-fr h4 mb-0" id="fr" title="fr"></i>US</td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left"><strong>98%</strong></div>
                              <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center"><i class="fa fa-paypal" style="font-size:24px"></i>Voucher</td>
                          <td>
                            <div class="small text-muted">Last login</div><strong>Last month</strong>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>Agapetus Tadeáš</div>
                            <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center"><i class="flag-icon flag-icon-es h4 mb-0" id="es" title="es"></i>DE</td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left"><strong>22%</strong></div>
                              <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center"><i class="fa fa-google-wallet" style="font-size:24px"></i>Cash</td>
                          <td>
                            <div class="small text-muted">Last login</div><strong>Last week</strong>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>Friderik Dávid</div>
                            <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center"><i class="flag-icon flag-icon-pl h4 mb-0" id="pl" title="pl"></i>GR</td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left"><strong>43%</strong></div>
                              <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center"><i class="fa fa-cc-amex" style="font-size:24px"></i>Cash</td>
                          <td>
                            <div class="small text-muted">Last login</div><strong>Yesterday</strong>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




















	</div>
</div>

@endsection