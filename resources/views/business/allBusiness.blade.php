@extends('layouts.admin.app')
@push('css')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="//cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
@endpush
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
					<h2>All Businesses</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>All Business</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
            <div class="col-md-12">
                <table class="table table-bordered yajra-datatable">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
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

@push('js')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(function () {
            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('businesses.list') }}",
                columns: [
                    {data: 'category_id', name: 'businessCategory.text' },
                    {data: 'name', name: 'name' },
                    {data: 'created_at', name: 'created_at' },
                    {
                        data: 'action', 
                        name: 'action', 
                        orderable: true, 
                        searchable: true,
                        
                    },
                ],
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
            });
        });
        $(document).on('click','#deleteBusiness',function(){
            var business_id = $(this).data('id');
            var url = '<?= route("business.delete") ?>';
            swal.fire({
                title:'Are you sure?',
                html:'you want to <b>delete</b> this row',
                showCancelButton:true,
                showCloseButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes Delete it',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#556ee6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    $.post(url,{business_id:business_id}, function(data){
                        if(data.code == 1){
                            toastr.success(data.msg);
                            $('.yajra-datatable').DataTable().ajax.reload(null, false);
                        }else{
                            toastr.error(data.msg)
                        }
                    },'json')
                }
            });

        });
        
    });
</script>
@endpush
