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
            <div class="col-sm-8 mt-2">
                <!-- Section -->
                <div class="add-listing-section">

                    <table class="table table-bordered yajra-datatable">
                        <thead>
                            <tr>
                                <th>Text</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
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
                ajax: "{{ route('category.list') }}",
                columns: [
                    {data: 'text', name: 'text' },
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
        $(document).on('click','#deleteCategory',function(){
            var category_id = $(this).data('id');
            var url = '<?= route("category.delete") ?>';
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
                    $.post(url,{category_id:category_id}, function(data){
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
