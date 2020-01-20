<link rel="stylesheet" href="{{asset('admin/css/lib/datatable/dataTables.bootstrap.min.css')}}">
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">List of {{$page_title}}</strong>
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#largeModal"><i class="fa fa-plus-circle"></i>&nbsp; Create</button>
                </div>
                <div class="card-body">                    
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Title</th>
                <th>GM</th>
                <th style="width: 20%">Duration</th>
                <th>Type</th>
                <th style="width: 17%">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td>{{$event->title}}</td>
                    <td>{{App\User::find($event->gm)->userid}}</td>
                    <td>{{date('F d, Y', strtotime($event->startdate))}} : {{date('H:s', strtotime($event->starttime))}}-{{date('F d, Y', strtotime($event->endsdate))}} : {{date('H:s', strtotime($event->endstime))}}</td>
                    <td>{{$event->type}}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="" title="More Details"><i class="fa fa-list"></i></a>
                        <a class="btn btn-primary btn-sm" href="/admin-events/prizes/{{$event->id}}" title="Event Prizes"><i class="fa fa-gift"></i></a>
                        <a class="btn btn-warning btn-sm" title="Event Winners"><i class="fa fa-users"></i></a>
                        <a class="btn btn-secondary btn-sm" title="Update"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
                </div>
            </div>
        </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Create Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    {!! Form::open(['id' => 'event-form', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::label('title', 'Title')}}
                        {{Form::text('title', '',['id' => 'title', 'class' => 'form-control', 'placeholder' => 'Title', 'required'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('Description', 'Description')}}
                        {{Form::textarea('description', '',['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Description'])}}
                    </div>
                    <div class="row">
                        <div class="col-6">
                        <div class="form-group">
                            {{Form::label('Start Date', 'Start Date')}}
                            {{Form::date('startdate', \Carbon\Carbon::now(),['class' => 'form-control'])}}
                        </div>
                        </div>
                        <div class="col-6">
                            {{Form::label('Start Time', 'Start Time')}}
                            {{Form::time('starttime',null, ['class' => 'form-control']) }} 
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-6">
                            <div class="form-group">
                                {{Form::label('Ends Date', 'Ends Date')}}
                                {{Form::date('endsdate', \Carbon\Carbon::now(),['class' => 'form-control'])}}
                            </div>
                            </div>
                            <div class="col-6">
                                {{Form::label('Ends Time', 'Start Time')}}
                                {{Form::time('endstime',null, ['class' => 'form-control']) }} 
                            </div>
                        </div>
                    <div class="form-group">
                        {{Form::label('Type', 'Type')}}
                        {{Form::select('type', ['Game Event' => 'Game Event', 'Social Media Event' => 'Social Media Event'], NULL, ['class' => 'form-control','id' => 'myselect']) }}
                    </div>
                    <div class="form-group">
                        {{Form::label('Cover', 'Cover Photo')}}<br>
                        {{Form::file('event_cover')}}
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

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

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>

<script>
    $(document).ready(function() {
    $('#event-form').on('submit', function (e) {
        e.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "{{route('events.create')}}",
            data:form_data,
            dataType:"json",
            success: function( data ) {
                $('#largeModal').hide();
                swal({
                    title: data.response.title,
                    text: data.response.msg,
                    type: data.response.type
                }, function(){ window.location.reload() });
                
            }
        });
    });
});
</script>