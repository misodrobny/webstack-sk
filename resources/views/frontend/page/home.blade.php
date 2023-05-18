@extends('frontend.layout')

@section('content')
    @include('frontend.section.start')
    @include('frontend.section.speakers')
    @include('frontend.section.prev-event')
    @include('frontend.section.event-schedule')
    @include('frontend.section.footer')
@endsection
