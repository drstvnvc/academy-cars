@extends('layouts.app')
@section('title', 'About')

@section('content')
  <h1>Cars</h1>
  @foreach ($cars as $car)
    <div>
      {{$car->producer}} - {{$car->title}} ({{$car->number_of_doors}} doors)
    </div>
  @endforeach
@endsection
