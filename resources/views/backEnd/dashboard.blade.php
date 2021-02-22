@extends('backEnd.master')
@section('mainContent')
<div class="row">
	<div class="col-xl-3 col-md-6">
		<div class="card">
			<div class="card-block" style="padding: 32px;">
				<a href="{{ url('patient') }}">
				<div class="row align-items-center m-l-0">
					<div class="col-auto">
						<i class="fa fa-user f-30 text-c-purple"></i>
					</div>
					<div class="col-auto">
						<h6 class="text-muted m-b-10">Total Patients</h6>
						<h2 class="m-b-0">{{count($Patient)}}</h2>
					</div>
				</div>
			</a>
			</div>
		</div>

		<div class="card">
			<div class="card-block"  style="padding: 32px;">
				{{-- <a href="{{ url('patient') }}"> --}}
				<div class="row align-items-center m-l-0">
					<div class="col-auto">
						<i class="fa fa-book f-30 text-c-purple"></i>
					</div>
					<div class="col-auto">
						<h6 class="text-muted m-b-10">Total Documents</h6>
						<h2 class="m-b-0">{{count($Document)}}</h2>
					</div>
				</div>
			{{-- </a> --}}
			</div>
			
		</div>
	</div>
	
	<div class="col-lg-9">
		<div class="card">
			<div class="card-block">
				<div class="row">
				<div class="col-lg-4">
					<h6 class="font-weight-bold pl-5 pt-4 mt-4" >{{ $dashboard->exp_info }}</h6>
				</div>
				<div class="col-lg-4">
					<div class="d-flex justify-content-center">
						<img src="{{ asset($dashboard->img) }}"  style="height: 150px; weight:150px">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="float-right pr-5 font-weight-bold pt-4 mt-4">
						<p class="m-0">Support Details:</p>
						<p class="m-0">Tel: {{$dashboard->tel}}</p>
						<p class="m-0">Email: {{$dashboard->email}}</p>
					</div>
				</div>
			</div>
					
					
					
			</div>
		</div>



<div class="row">
		<div class="col-md-12 col-lg-12" style="max-height: 35em; overflow: auto;">
			<div class="card table-card">
				<div class="card-header">
				<h5>Activity Log</h5>
				<div class="card-header-right">

					<ul class="list-unstyled card-option">
						<!-- <li><i class="fa fa fa-wrench open-card-option"></i></li>
						<li><i class="fa fa-window-maximize full-card"></i></li>
						<li><i class="fa fa-minus minimize-card"></i></li>
						<li><i class="fa fa-refresh reload-card"></i></li>
						<li><i class="fa fa-trash close-card"></i></li> -->
						<li><i class="fa fa-minus minimize-card"></i></li>
						<li><i class="fa fa-refresh reload-card"></i></li>
					</ul>
				</div>
			</div>
			<div class="card-block" style="display: none;">
				<div class="table-responsive">
					<table class="table table-hover">
						@foreach($logs as $log)
							<tr>
								<td>
									<div class="d-inline-block">
										<div class="row">
											<a href="#"><h6 class="pl-2" style="color: blue"> {{ $log->user_name}} </h6> </a> 
											<p class="pr-2 pl-2"> {{ $log->action}} </p> 
											<a href="#"><h6 style="color: blue"> {{ $log->document_name}} </h6></a> 
										</div>
										<p class="text-muted">{{date('H:i:s d-M-Y', strtotime($log->created_at))}}</p>
									</div>
								</td>
							</tr>
							<!-- <tr>
								<td>
									
									<div class="d-inline-block align-middle">
										<img src="{{asset('public/assets/images/avatar-5.jpg')}}" alt="user image" class="img-radius img-40 align-top m-r-15">
										<div class="d-inline-block">
											<h6>Fatima Alam</h6>
											<p class="text-muted m-b-0">Developer</p>
										</div>
									</div>
								</td>
							</tr> -->
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>
</div>
<div class="row" style="margin-top: -45px;">
	<div class="col-md-6 col-lg-3">
	
	</div>
	
	
</div>

@endsection