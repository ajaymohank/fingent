@extends('layouts.app')

@section('content')

<section>
    <div class="container">
      <div class="col-md-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
        </div>
        <br>
        @endif
        <div class="card-body">
          <div class="row">
            <div class="col-12 text-right">
              <a href="{{ route('addmarks') }}" class="btn btn-sm btn-primary">Add Marks</a>
            </div>
          </div>
          <div id="tb1" class="table-responsive">
                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0">
                      <thead class=" text-primary">
                        <tr>
                          <th class="disabled-sorting">ID</th>
                          <th>Name</th>
                          <th>Maths</th>
                          <th>Science</th>
                          <th>History</th>
                          <th>Term</th>
                          <th>Total Marks</th>
                          <th>Created on</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                          @if( count($marks) > 0)
                            @foreach($marks as $std)
                          <tr>
                            <td>{{ $std->id }}</td>
                            <td>{{ $std->student->name }}</td>
                            <td>{{ $std->maths }}</td>
                            <td>{{ $std->science }}</td>
                            <td>{{ $std->history }}</td>
                            <td>{{ $std->term }}</td>
                            <td>{{ $std->total_marks }}</td>
                            <td>{{  date('F d,Y h:i:s A', strtotime($std->created_at)) }}</td>
                            <td><a href="{{ route('editmarks', $std->id)}}">Edit/</a>
                                <a id="dl_id" href="#" data-id="{{ $std->id }}">Delete</a>
                            </td>
                         </tr>
                        @endforeach
                        @endif
                      </tbody>
                     
                </table>
            
              </div>
        </div>
      </div>
    </div>
</section>


@endsection

@push('js')
<script type="text/javascript">
  $(document).ready(function() {

    $(document).on('click','#dl_id',function(){
       
       var id = $(this).data('id');
       if (confirm("Do you want to delete the data ?")) {

            $.ajax({
             type:'POST',
             url:"{{ route('deletemarksAjax') }}",
             data:{rid: id, "_token": "{{ csrf_token() }}"},
             success:function(data){
               if(data == 1) {
                      $("#tb1").load(" #tb1");
                }
                  else
                  {   
                       alert('Error - could not delete data');
                  }
             }
          });

        }
        return false;
    
   });
  });

</script>

@endpush