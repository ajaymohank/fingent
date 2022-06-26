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
              <a href="{{ route('addstudent') }}" class="btn btn-primary">Add Student</a>
            </div>
          </div>
          <div id="tb2" class="table-responsive">
                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0">
                      <thead class=" text-primary">
                        <tr>
                          <th class="disabled-sorting">ID</th>
                          <th>Name</th>
                          <th>Age</th>
                          <th>Gender</th>
                          <th>Reporting Teacher</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                          @if( count($student) > 0)
                            @foreach($student as $std)
                              @php
                                $rep_teacher = ($std->reporting_teacher == 1) ? "Vinod" : (($std->reporting_teacher == 2)  ? "Sathish" : (($std->reporting_teacher == 3)  ? "Ajay" : "Aju"));
                               
                              @endphp
                          <tr>
                            <td>{{ $std->id }}</td>
                            <td>{{ $std->name }}</td>
                            <td>{{ $std->age }}</td>
                            <td>{{ $std->gender }}</td>
                            <td>{{ $rep_teacher }}</td>
                            <td><a href="{{ route('editstudent', $std->id)}}">Edit/</a>
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
             url:"{{ route('deletestudent') }}",
             data:{rid: id, "_token": "{{ csrf_token() }}"},
             success:function(data){
               if(data == 1) {
                      $("#tb2").load(" #tb2");
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