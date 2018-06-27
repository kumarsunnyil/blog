@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Contact US Form</h1>

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        {!! Form::open(['route'=>'contactus.store']) !!}

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('Name:') !!}
            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>

        <div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }}">
            {!! Form::label('Mobile:') !!}
            {!! Form::number('mobile', 'value',['class'=>'form-control', 'placeholder'=>'Enter Mobile Number']) !!}
            <span class="text-danger">{{ $errors->first('mobile') }}</span>
        </div>

        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::label('Email:') !!}
            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
            <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>

        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
            {!! Form::label('Message:') !!}
            {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
            <span class="text-danger">{{ $errors->first('message') }}</span>
        </div>

        <div class="form-group">
            <button class="btn btn-success">Contact US!</button>
        </div>

        {!! Form::close() !!}


        <div class="row">
            <div class="col-sm-6">
                <h3>Registered Office</h3>
                <hr>

            </div>
            <div class="col-sm-1">
            </div>

            <div class="col-sm-5">
                    <h3>Address</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                        <p>Phone: 8892277417</p>
                    </div>

                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d952.002566037782!2d78.55144328099468!3d17.363239108665212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb98c773258a71%3A0xcc225c4d1fbff87f!2sV+V+R+Towers%2C+Vnikata+Sai+Complex%2C+Ramakrishnapuram%2C+LB+Nagar%2C+Hyderabad%2C+Telangana+500035!5e0!3m2!1sen!2sin!4v1527311076363" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </p>
                </div>
                <hr>
            </div>












    </div>

{{--
    <div style="width: 500px; height: 500px;">
        {!! Mapper::render() !!}
    </div>
--}}
@endsection
