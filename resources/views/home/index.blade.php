@extends('layouts.material')

@section('content')
        <div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h4 class="page-title">Dashboard</h4>
				</div>

			</div>
		</div>
<section class="content">
			<div class="row">
				<div class="col-xl-8 col-12">
					<div class="row">
						<div class="col-xl-4">
							<div class="info-box pull-up">
								<span class="info-box-icon bg-primary-light rounded-circle"><span class="icon-Fan"></span></span>

								<div class="info-box-content text-right">
								  <span class="info-box-number">90%</span>
								  <span class="info-box-text">Store Traffic</span>
								</div>
						    </div>
						</div>
						<div class="col-xl-4">
							<div class="info-box pull-up">
								<span class="info-box-icon bg-primary-light rounded-circle"><span class="icon-Dollar"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></span>

								<div class="info-box-content text-right">
								  <span class="info-box-number">$41,410k</span>
								  <span class="info-box-text">Income</span>
								</div>
						    </div>
						</div>
						<div class="col-xl-4">
							<div class="info-box pull-up">
								<span class="info-box-icon bg-primary-light rounded-circle"><span class="icon-User"><span class="path1"></span><span class="path2"></span></span></span>

								<div class="info-box-content text-right">
								  <span class="info-box-number">40k</span>
								  <span class="info-box-text">Average Visitor</span>
								</div>
						    </div>
						</div>
					</div>
					<div class="box">
						<div class="box-header no-border">
							<h4 class="box-title">Profit
							</h4>
							<div class="box-controls pull-right">
								<ul class="nav nav-pills nav-pills-sm" role="tablist">
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0" data-toggle="tab" href="#">
											<span class="nav-text base-font">Month</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0" data-toggle="tab" href="#">
											<span class="nav-text base-font">Week</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0 active" data-toggle="tab" href="#">
											<span class="nav-text base-font">Day</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="box-body">
							<div id="charts_widget_1_chart"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
                        <div class="box-body text-center">
                            <div class="mb-20 mt-20">
                                <img src="../images/avatar/avatar-12.png" width="150" class="rounded-circle bg-info-light" alt="user">
                                <h4 class="mt-20 mb-0">johen doe</h4>
                                <a href="mailto:dummy@gmail.com">dummy@gmail.com</a>
                            </div>
                            <div class="badge badge-pill badge-info-light font-size-16">Dashboard</div>
                            <div class="badge badge-pill badge-primary-light font-size-16">UI</div>
                            <div class="badge badge-pill badge-danger-light font-size-16">UX</div>
                            <div class="badge badge-pill badge-warning-light font-size-16" data-toggle="tooltip" data-placement="top" title="" data-original-title="3 more">+10</div>
                        </div>
                        <div class="p-20 mt-15 bt-1">
                            <div class="row text-center">
                                <div class="col-6 br-1">
                                    <a href="#" class="link d-flex align-items-center justify-content-center font-medium">
										<span class="icon-Mail font-size-20 mr-5"></span>Message</a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="link d-flex align-items-center justify-content-center font-medium">
										<span class="icon-Code1 font-size-20 mr-5"><span class="path1"></span><span class="path2"></span></span>Portfolio</a>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="box">
						<div class="box-header no-border">
							<h4 class="box-title">Revenue Overview</h4>
							<ul class="box-controls pull-right">
							  <li class="dropdown">
								<a data-toggle="dropdown" href="#" class="btn btn-success-light px-10 base-font">Export</a>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
								  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
								  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
								  <div class="dropdown-divider"></div>
								  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
								</div>
							  </li>
							</ul>
						</div>
						<div class="box-body py-0">
							<div class="row">
								<div class="col-6">
									<div class="py-10">
										<div class="text-fade font-weight-600">Average Profit</div>
										<div class="font-size-18 font-weight-600">$150K</div>
									</div>
								</div>
								<div class="col-6">
									<div class="py-10">
										<div class="text-fade font-weight-600">Revenue</div>
										<div class="font-size-18 font-weight-600">$15,250k</div>
									</div>
								</div>
								<div class="col-6">
									<div class="py-10">
										<div class="text-fade font-weight-600">Taxes</div>
										<div class="font-size-18 font-weight-600">$50k</div>
									</div>
								</div>
								<div class="col-6">
									<div class="py-10">
										<div class="text-fade font-weight-600">Yearly Income</div>
										<div class="font-size-18 font-weight-600">$44,850k</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-body p-0">
							<div id="revenue4" class="text-dark"></div>
						</div>

					</div>
			   </div>
			</div>

		</section>
@endsection
