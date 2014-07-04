@extends('layouts.scaffold')

@section('transparent')

@include('partials.mapnav')

<div class="_addbtn _center _home">
    @if(!Sentry::check())
    <span class="_blade _aqua-hover _get-sign-up _right10" href="{{ URL::to('auth/signup') }}">&nbsp;+	Join&nbsp;</span>
	@endif
	<span class="_blade _aqua-hover _step1 _left10">Create</span>
</div>


@stop


