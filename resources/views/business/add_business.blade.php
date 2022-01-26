@extends('layouts.admin.app')
@section('content')
@include('layouts.admin.body.sidebar')
<div id="dashboard">
    <!-- Navigation
    ================================================== -->
    @include('layouts.admin.body.sidebar')

    <!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Add Listing</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Add Business</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
                <form action="{{route('business.store')}}" method="POST">
                    @csrf
                    <div id="add-listing">

                        <!-- Section -->
                        <div class="add-listing-section">
    
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-doc"></i> Business Informations</h3>
                            </div>
    
                            <!-- Title -->
                            <div class="row with-forms">
                                <div class="col-md-12">
                                    <h5>Business Name </h5>
                                    <input class="search-field" name="name" type="text" value="" placeholder="Enter business name"/>
                                </div>
                            </div>
    
                            <!-- Row -->
                            <div class="row with-forms">
    
                                <!-- Status -->
                                <div class="col-md-6">
                                    <h5>Category</h5>
                                    <select name="category_id"  class="chosen-select-no-single" >
                                        <option selected disabled>Select Category</option>	
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->text}}</option>
                                        @endforeach
                                    </select>
                                </div>
    
                                <!-- Type -->
                                <div class="col-md-6">
                                    <h5>Website link <span>(optional)</span><i class="tip" data-tip-content="Maximum of 15 keywords related with your business"></i></h5>
                                    <input type="text" name="website" placeholder="Enter business website">
                                </div>
    
                            </div>
                            <!-- Row / End -->
    
                        </div>
                        <!-- Section / End -->
    
                        <!-- Section -->
                        <div class="add-listing-section margin-top-45">
    
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-location"></i> Business data</h3>
                            </div>
    
                            <div class="submit-section">
    
                                <!-- Row -->
                                <div class="row with-forms">
    
                                    <!-- Address -->
                                    <div class="col-md-6">
                                        <h5>Phone<span>(optional)</span></h5>
                                        <input type="text" name="phone" placeholder="Enter phone number">
                                    </div>
    
                                    <!-- City -->
                                    <div class="col-md-6">
                                        <h5>SMS <span>(optional)</span></h5> 
                                        <input type="text" name="sms" placeholder="Enter SMS">
                                    </div>
    
                                    <!-- Zip-Code -->
                                    <div class="col-md-6">
                                        <h5>Insta <span>(optional)</span></h5>
                                        <input type="text" name="insta" placeholder="Enter Insta">
                                    </div>
    
                                    <!-- Zip-Code -->
                                    <div class="col-md-6">
                                        <h5>GMB <span>(optional)</span></h5>
                                        <input type="text" name="gmb" placeholder="Enter GMB">
                                    </div>
                                    <!-- Zip-Code -->
                                    <div class="col-md-6">
                                        <h5>Whatsapp <span>(optional)</span></h5>
                                        <input type="text" name="whatsapp" placeholder="Enter whatsapp">
                                    </div>
                                    <!-- Zip-Code -->
                                    <div class="col-md-6">
                                        <h5>Facebook <span>(optional)</span></h5>
                                        <input type="text" name="facebook" placeholder="Enter facebook">
                                    </div>
                                    <!-- Zip-Code -->
                                    <div class="col-md-6">
                                        <h5>Youtube <span>(optional)</span></h5>
                                        <input type="text" name="youtube" placeholder="Enter youtube">
                                    </div>
                                    <!-- Zip-Code -->
                                    <div class="col-md-6">
                                        <h5>Yelp <span>(optional)</span></h5>
                                        <input type="text" name="yelp" placeholder="Enter yelp">
                                    </div>
                                    <!-- Zip-Code -->
                                    <div class="col-md-6">
                                        <h5>Twitter <span>(optional)</span></h5>
                                        <input type="text" name="twitter" placeholder="Enter twitter">
                                    </div>
                                </div>
                                <!-- Row / End -->
    
                            </div>
                        </div>
                        <!-- Section / End -->
    
    
                        <!-- Section -->
                        {{-- <div class="add-listing-section margin-top-45">
    
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-picture"></i> Gallery</h3>
                            </div>
    
                            <!-- Dropzone -->
                            <div class="submit-section">
                                <form action="/file-upload" class="dropzone" ></form>
                            </div>
    
                        </div> --}}
                        <!-- Section / End -->
    
    
                        <!-- Section -->
                        <div class="add-listing-section margin-top-45">
    
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-docs"></i> Details</h3>
                            </div>
    
                            <!-- Row -->
                            <div class="row with-forms">
                                <!-- Email Address -->
                                <div class="col-md-6">
                                    <h5>Address <span>(optional)</span></h5>
                                    <input type="text" name="address" placeholder="Enter Business Address" >
                                </div>
                                 <!-- Email Address -->
                                 <div class="col-md-6">
                                    <h5>E-mail <span>(optional)</span></h5>
                                    <input type="email" name="email" placeholder="Enter Email Address" >
                                </div>
                            </div>
                            <!-- Row / End -->
                            <!-- Description -->
                            <div class="form">
                                <h5>Description</h5>
                                <textarea class="WYSIWYG" name="description" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
                            </div>
    
    
                        </div>
                        <!-- Section / End -->
    
                        <!-- Section -->
                        {{-- <div class="add-listing-section margin-top-45">
                            
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-clock"></i> Opening Hours</h3>
                                <!-- Switcher -->
                                <label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                            </div>
                            
                            <!-- Switcher ON-OFF Content -->
                            <div class="switcher-content">
    
                                <!-- Day -->
                                <div class="row opening-day">
                                    <div class="col-md-2"><h5>Monday</h5></div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Opening Time">
                                            <option label="Opening Time"></option>
                                            <option>Closed</option>
                                            <option>1 AM</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Closing Time">
                                            <option label="Closing Time"></option>
                                            <option>Closed</option>
                                            <option>1 AM</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Day / End -->
    
                                <!-- Day -->
                                <div class="row opening-day js-demo-hours">
                                    <div class="col-md-2"><h5>Tuesday</h5></div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Opening Time">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Closing Time">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                </div>
                                <!-- Day / End -->
    
                                <!-- Day -->
                                <div class="row opening-day js-demo-hours">
                                    <div class="col-md-2"><h5>Wednesday</h5></div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Opening Time">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Closing Time">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                </div>
                                <!-- Day / End -->
    
                                <!-- Day -->
                                <div class="row opening-day js-demo-hours">
                                    <div class="col-md-2"><h5>Thursday</h5></div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Opening Time">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Closing Time">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                </div>
                                <!-- Day / End -->
    
                                <!-- Day -->
                                <div class="row opening-day js-demo-hours">
                                    <div class="col-md-2"><h5>Friday</h5></div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Opening Time">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Closing Time">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                </div>
                                <!-- Day / End -->
    
                                <!-- Day -->
                                <div class="row opening-day js-demo-hours">
                                    <div class="col-md-2"><h5>Saturday</h5></div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Opening Time">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Closing Time">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                </div>
                                <!-- Day / End -->
    
                                <!-- Day -->
                                <div class="row opening-day js-demo-hours">
                                    <div class="col-md-2"><h5>Sunday</h5></div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Opening Time">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Closing Time">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                </div>
                                <!-- Day / End -->
    
                            </div>
                            <!-- Switcher ON-OFF Content / End -->
    
                        </div> --}}
                        <!-- Section / End -->
    
    
                        <!-- Section -->
                        {{-- <div class="add-listing-section margin-top-45">
                            
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-book-open"></i> Pricing</h3>
                                <!-- Switcher -->
                                <label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                            </div>
    
                            <!-- Switcher ON-OFF Content -->
                            <div class="switcher-content">
    
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="pricing-list-container">
                                            <tr class="pricing-list-item pattern">
                                                <td>
                                                    <div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>
                                                    <div class="fm-input pricing-name"><input type="text" placeholder="Title" /></div>
                                                    <div class="fm-input pricing-ingredients"><input type="text" placeholder="Description" /></div>
                                                    <div class="fm-input pricing-price"><input type="text" placeholder="Price" data-unit="USD" /></div>
                                                    <div class="fm-close"><a class="delete" href="#"><i class="fa fa-remove"></i></a></div>
                                                </td>
                                            </tr>
                                        </table>
                                        <a href="#" class="button add-pricing-list-item">Add Item</a>
                                        <a href="#" class="button add-pricing-submenu">Add Category</a>
                                    </div>
                                </div>
    
                            </div>
                            <!-- Switcher ON-OFF Content / End -->
    
                        </div> --}}
                        <!-- Section / End -->
    
    
                        <button type="submit" class="button preview">Submit &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
    
                    </div>
                </form>

				
			</div>

			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2022 Listeo. All Rights Reserved.</div>
			</div>

		</div>

	</div>
	<!-- Content / End -->

</div>
@endsection
