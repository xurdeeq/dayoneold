@extends('email')
<?php
//get the first name
$userIpAddress = Request::getClientIp();
?>

@section('email-body')
{{ $messageBody }}


<p>{{{ $sender }}}</p>

<p>{{ $recipient->checkTimezoneWarning() }}</p>
@stop