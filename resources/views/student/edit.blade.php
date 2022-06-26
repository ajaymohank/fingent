@extends('layouts.app')

@section('content')

<section>
    <div class="container">
      <div class="col-md-12">
        <div class="row">
        <div class="col-md-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
        </div>
        <br>
        @endif
           @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
          <form method="post" action="{{ route('updatestudent',$id) }}" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit Student') }}</h4>
                
              </div>
              <div class="card-body ">
                
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="first_name">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="name" id="name" type="text" value="{{ $details->name }}" required="true"  />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="last_name">{{ __('Age') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="age" id="age" type="text" value="{{ $details->age }}" required="true" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="phno">{{ __('Gender') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group form-group-inline">
                        <input class="form-group-input" type="radio" name="gender" id="gender" value="M" {{ $details->gender == 'M' ? 'checked' : '' }} >
                        <label class="form-group-label" for="gender">Male</label>
                    </div>
                    <div class="form-group form-group-inline">
                        <input class="form-group-input" type="radio" name="gender" id="gender" value="F" {{ $details->gender == 'F' ? 'checked' : '' }}>
                        <label class="form-group-label" for="gender">Female</label>
                    </div>
                    
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="name">{{ __('Reporting Teacher') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="reporting_teacher" id="reporting_teacher" type="text" value="{{ $details->reporting_teacher }}" required="true" />
                    </div>
                  </div>
                </div>
              
              </div>
              <div class="col-sm-12 text-center mb-4 mt-4">
                <a href="{{ route('home') }}" ><button type="button" class="btn btn-primary" >Back</button></a>
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
</section>


@endsection

@push('js')
@endpush