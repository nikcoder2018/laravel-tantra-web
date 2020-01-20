<link rel="stylesheet" href="{{asset('admin/css/lib/datatable/dataTables.bootstrap.min.css')}}">

<table id="bootstrap-data-table" class="table table-striped table-bordered">
    <thead>
        <tr>
        <th>User ID</th>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date Registered</th>
        <th>Status</th>
        <th style="width: 10%">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($accounts as $account)
        <tr>
            <td>{{$account->userid}}</td>
            <td>{{$account->email}}</td>
            <td>{{$account->firstname}}</td>
            <td>{{$account->lastname}}</td>
            <td>{{date('F d, Y', strtotime($account->date_registered))}}</td>
            <td>{{$account->activated? 'verified' : 'unverified'}}</td>
            <td>
                <button class="btn btn-success btn-sm"><i class="fa fa-list"></i>&nbsp; More Details</button>            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
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

    function reload_table(){
        table.ajax.reload(null, false);
    }
</script>
