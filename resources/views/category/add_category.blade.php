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

        <div class="row">
            <div class="col-sm-4">
                    <!-- Section -->
                <div class="add-listing-section">

                    <!-- Headline -->
                    <div class="add-listing-headline">
                        <h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
                    </div>
                    <form action="{{route('category.store')}}" method="POST">
                        @csrf
                        <!-- Title -->
                    <div class="row with-forms">
                        <div class="col-md-12">
                            <h5>Listing Title <i class="tip" data-tip-content="Name of your business"></i></h5>
                            <input type="text" class="search-field" name="text"  value=""/>
                        </div>
                    </div>

                    <!-- Row -->
                    <div class="row with-forms">
                        <button type="submit" class="button preview">Submit</button>
                    </div>
                    <!-- Row / End -->
                    </form>


                </div>
            <!-- Section / End -->
            </div>
            <div class="col-sm-8">
                <!-- Section -->
                <div class="add-listing-section">

                    <table>
                        <thead>
                            <tr>Title</tr>
                        </thead>
                        <tbody>
                            @php
                                $categories = App\Models\BusinessCategory::latest()->get();
                            @endphp
                            @forelse ($categories as $item)
                                <td>{{$item->text}}</td>
                            @empty
                                <p>No result found</p>
                            @endforelse
                        </tbody>
                    </table>


                </div>
                <!-- Section / End -->
            </div>
        </div>


    </div>
    <!-- Content / End -->


</div>
@endsection
