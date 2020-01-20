<link rel="stylesheet" href="{{asset('admin/css/lib/datatable/dataTables.bootstrap.min.css')}}">
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">List of {{$page_title}}</strong>
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#largeModal"><i class="fa fa-plus-circle"></i>&nbsp; Create Prize</button>
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#largeModal"><i class="fa fa-plus-circle"></i>&nbsp; Add Categories</button>
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#largeModal"><i class="fa fa-plus-circle"></i>&nbsp; Add to Templates</button>
                </div>
                <div class="card-body">   
<table id="bootstrap-data-table" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Package</th>
            <th>For</th>
            <th style="width: 17%">Action</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="" title="Edit"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger btn-sm" href="/admin-events/prizes/" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
      </table>
    </div>
</div>
</div>


</div>
</div><!-- .animated -->
</div><!-- .content -->
      
<script src="{{asset('admin/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{asset('admin/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{asset('admin/js/lib/data-table/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/js/lib/data-table/buttons.colVis.min.js')}}"></script>
<script src="{{asset('admin/js/lib/data-table/datatables-init.js')}}"></script>


<script type="text/javascript">
    var table = $('#bootstrap-data-table-export').DataTable();
</script>