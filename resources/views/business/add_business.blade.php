@extends('layouts.admin.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
						</div>

						<!-- Title -->
						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Listing Title <i class="tip" data-tip-content="Name of your business"></i></h5>
								<input class="search-field" type="text" value=""/>
							</div>
						</div>

						<!-- Row -->
						<div class="row with-forms">

							<!-- Status -->
							<div class="col-md-6">
								<h5>Category</h5>
								<select class="chosen-select-no-single" >
									<option label="blank">Select Category</option>
									<option>Eat & Drink</option>
									<option>Shops</option>
									<option>Hotels</option>
									<option>Restaurants</option>
									<option>Fitness</option>
									<option>Events</option>
								</select>
							</div>

							<!-- Type -->
							<div class="col-md-6">
								<h5>Keywords <i class="tip" data-tip-content="Maximum of 15 keywords related with your business"></i></h5>
								<input type="text" placeholder="Keywords should be separated by commas">
							</div>

						</div>
						<!-- Row / End -->

					</div>
					<!-- Section / End -->
    </div>
</div>
@endsection
