<h1>Contact Form</h1>
@if(Session::has('message'))
    <div class="alert alert-info">
        {{Session::get('message')}}
    </div>
@endif
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}<br>
    {!! Form::text('name', null,
    array('required',
    'class'=>'form-control',
    'placeholder'=>'Your name')) !!}
</div>
<br>
<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}<br>
    {!! Form::text('email', null,
    array('required',
    'class'=>'form-control',
    'placeholder'=>'Your e-mail address')) !!}
</div>
<br>
<div class="form-group">
    {!! Form::label('Your Message') !!}<br>
    {!! Form::textarea('message', null,
    array('required',
    'class'=>'form-control',
    'placeholder'=>'Your message')) !!}
</div>
<br>
<div class="form-group">
    {!! Form::submit('Contact Us!',
    array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}