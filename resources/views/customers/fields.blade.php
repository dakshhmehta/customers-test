<div class="row">
    <!-- First Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('first_name', 'First Name:') !!}
        {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Last Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('last_name', 'Last Name:') !!}
        {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Dob Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('dob', 'Date of Birth:') !!}
        {!! Form::date('dob', null, ['class' => 'form-control', 'max' => \Carbon\Carbon::now()->subYears(18)->format('Y-m-d')]) !!}
        <span class="text-info">A customer must be 18 years old.</span>
    </div>

    <!-- Gender Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('gender', 'Gender:') !!}<br/>
        <label class="radio-inline">
            {!! Form::radio('gender', "1", null) !!} Male
        </label>

        <label class="radio-inline">
            {!! Form::radio('gender', "0", null) !!} Female
        </label>

    </div>
</div>

<div class="row">
    <!-- Phone No Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('phone_no', 'Phone No:') !!}
        {!! Form::text('phone_no', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Email Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Company Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('company', 'Company:') !!}
        {!! Form::text('company', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('customers.index') !!}" class="btn btn-default">Cancel</a>
    </div>
</div>