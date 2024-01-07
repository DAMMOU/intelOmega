@extends('layouts.app')



@section('content')	

	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Admin Dashboard') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-chart-tree-map mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#"> {{ __('Dashboard') }}</a></li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold">{{ __('Total New Users') }} <span class="text-muted">({{ __('Current Month') }})</span></p>
							<h2 class="mb-0"><span class="number-font fs-20">jjj</span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="users_change"></span> {{ __('this month') }}</span></h2>

						</div>
						<span class="fs-40 mt-m1"><i class="fa-solid fa-user-plus"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-11 mr-1">{{ __('Last Month') }}</span>
							<span class="number-font fs-11"><i class="fa fa-chain mr-1 text-success"></i></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-11 mr-1">{{ __('Total') }} ({{ __('Current Year') }})</span>
							<span class="number-font fs-11"><i class="fa fa-bookmark mr-1 text-success"></i></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold">{{ __('Total New Subscribers') }} <span class="text-muted">({{ __('Current Month') }})</span></p>
							<h2 class="mb-0"><span class="number-font fs-20"></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="subscribers_change"></span> {{ __('this month') }}</span></h2>
						</div>
						<span class="text-info fs-40 mt-m1"><i class="fa-solid fa-user-visor"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-11 mr-1">{{ __('Last Month') }}</span>
							<span class="number-font fs-11"><i class="fa fa-chain mr-1 text-success"></i></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-11 mr-1">{{ __('Total') }} ({{ __('Current Year') }})</span>
							<span class="number-font fs-11"><i class="fa fa-bookmark mr-1 text-success"></i></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold">{{ __('Total Income') }} <span class="text-muted">({{ __('Current Month') }})</span></p>
							<h2 class="mb-0"><span class="number-font fs-20">gg</span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="income_change"></span> {{ __('this month') }}</span></h2>
						</div>
						<span class="text-success fs-40 mt-m1"><i class="fa-solid fa-badge-dollar"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-11 mr-1">{{ __('Last Month') }}</span>
							<span class="number-font fs-11"><i class="fa fa-chain mr-1 text-success"></i></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-11 mr-1">{{ __('Total') }} ({{ __('Current Year') }})</span>
							<span class="number-font fs-11"><i class="fa fa-bookmark mr-1 text-success"></i></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold">{{ __('Total Estimated Spending') }} <span class="text-muted">({{ __('Current Month') }})</span></p>
							<h2 class="mb-0"><span class="number-font fs-20">$</span><span class="ml-2 text-muted fs-11 data-percentage-change"><span class="fs-12" id="spending_change"></span> {{ __('this month') }}</span></h2>
						</div>
						<span class="text-danger fs-40 mt-m1"><i class="fa-solid fa-circle-dollar-to-slot"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-12 mr-1">{{ __('Last Month') }}:</span>
							<span class="number-font fs-12"><i class="fa fa-chain mr-1 text-danger"></i>$</span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-12 mr-1">{{ __('Current Year') }}:</span>
							<span class="number-font fs-12"><i class="fa fa-bookmark mr-1 text-danger"></i></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

	

	

	<div class="row">
		<div class="col-lg-12 col-md-12 mt-3">
			<div class="card overflow-hidden border-0">
				<div class="card-header d-inline border-0">
					<div>
						<h3 class="card-title fs-16 mt-3 mb-4"><i class="fa-solid fa-users mr-4 text-info"></i>{{ __('New Registered Users') }}</h3>
					</div>
					<div class="mb-3">
						<span class="fs-12 text-muted">{{ __('Registered Users Current Month') }}</span>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="">
								<canvas id="chart-total-users-month" class="h-330"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
	<!-- Chart JS -->
	<script src="{{URL::asset('plugins/chart/chart.min.js')}}"></script>

@endsection