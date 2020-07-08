@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
           Update Client's Profile
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                 
                   {!! Form::model($clients, ['route' => ['clients.update', $clients->id], 'method' => 'patch']) !!}

                   <!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_Name', 'First Name:') !!}
    {!! Form::text('first_Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_Name', 'Last Name:') !!}
    {!! Form::text('last_Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::text('dob', null, ['class' => 'form-control','id'=>'dob']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Age Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age', 'Age:') !!}
    {!! Form::number('age', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_No', 'Phone No:') !!}
    {!! Form::text('phone_No', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control', 'cols' => 40, 'rows' => 2]) !!}
</div>

<!-- Current Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('current_address', 'Current Address:') !!}
    {!! Form::textarea('current_address', null, ['class' => 'form-control', 'cols' => 40, 'rows' => 3]) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
</div>

<!-- Passport No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('passport_No', 'Passport No:') !!}
    {!! Form::text('passport_No', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


<!-- Date Registered Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_Registered', 'Date Registered:') !!}
    {!! Form::text('date_Registered', null, ['class' => 'form-control','id'=>'date_Registered']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#date_Registered').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role', 'Role:') !!}
    {!! Form::number('role', null, ['class' => 'form-control']) !!}
</div>

</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Ignore</button>
        {!! Form::submit('Update Client', ['class' => 'btn btn-info']) !!}
      </div>
    </div>
  </div>
</div>
                        @include('clients.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection