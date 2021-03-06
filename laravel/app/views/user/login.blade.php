@extends('layout')

@section('header')
@parent
{{ Html::script('/js/jstz-1.0.4.min.js') }}
@stop

<!--Wrapper main-content Block Start Here-->
@section('content')
<div id="main-content">
  <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <h2 class="page-title">Botangle Sign In</h2>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span9 PageLeft-Block">
        <p class="FontStyle20">Already a Botangle member?</p>
        <p>Please enter your Botangle username/password to access your Botangle account.</p>
        <div class="Signup">
            {{ Form::open([
            'url' => 'login',
            'class' => 'form-inline form-horizontal',
            ]) }}
         
          <div class="form-group span5" style="margin-left:0px;">
            <label class="sr-only" for="Username2">Username</label>
            {{ Form::text('username', '', ['class'=>'form-control textbox1','placeholder'=>'Username']) }}
          </div>
          <div class="form-group span5">
            <label class="sr-only" for="Password2">Password</label>
           {{ Form::password('password', ['class'=>'form-control textbox1','placeholder'=>'Password']) }}
          </div>
         <div class="span2">
           <button type="submit" class="btn btn-primary">Login</button>
       </div>
       <div class="checkbox span12 mar0">
            <label>
              {{ Form::checkbox('remember_me') }}<label>Remember me</label>
            </label>
      </div>
      <div class="span12 mar0">
          {{ HTML::link(action('RemindersController@getRemind'), trans("Did you forget your username /password?")) }}

       </div>
        {{ Form::hidden('timezone', '', array('id' => 'timezone')) }}
        {{ Form::close() }}

        </div>
      </div>
      <div class="span3 PageRight-Block">
       <p class="FontStyle20">Not a member? Sign Up here</p>
        <p>Get a Free Account. Sign Up here.</p><br><br>
          {{ HTML::link(route('register.expert'), trans("Sign Up"), ['class' => 'btn btn-primary']) }}
      </div>
    </div>
    <!-- @end .row --> 
    
	@include('_partials.get-in-touch')
    
  </div>
  <!-- @end .container --> 
</div>
<!--Wrapper main-content Block End Here-->
@overwrite

@section('jsFiles')
@parent
<script>
    var tz = jstz.determine(); // Determines the time zone of the browser client
    jQuery('#timezone').val(tz.name());
</script>
@stop