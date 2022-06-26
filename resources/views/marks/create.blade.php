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
          <form method="post" action="{{ route('savemarks') }}" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Add Marks') }}</h4>
                
              </div>
              <div class="card-body ">
                
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="first_name">{{ __('Select Student') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select name="student_id" class="form-control custom-select">
                        <option value="">Select Student</option>
                        @foreach($students as $student)
                          <option value="{{ $student->id }}">{{ $student->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="last_name">{{ __('Term') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="term" id="term" type="text" value="" required="true" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <fieldset >
                    <legend >Subject</legend>
                      <div>&nbsp;</div>
                      <div>&nbsp;</div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label" for="name">{{ __('Maths') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group">
                            <input class="form-control" name="maths" id="maths" type="text" value="" required="true" />
                          </div>
                        </div>
                      </div>
                       <div class="row">
                        <label class="col-sm-2 col-form-label" for="name">{{ __('Science') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group">
                            <input class="form-control" name="science" id="science" type="text" value="" required="true" />
                          </div>
                        </div>
                      </div>
                       <div class="row">
                        <label class="col-sm-2 col-form-label" for="name">{{ __('History') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group">
                            <input class="form-control" name="history" id="history" type="text" value="" required="true" />
                          </div>
                        </div>
                      </div>
                </fieldset>
                </div>
                            
              </div>
              <div class="col-sm-12 text-center mb-4 mt-4">
                <a href="{{ route('marks') }}" ><button type="button" class="btn btn-primary" >Back</button></a>
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