@extends('partials.layout')
@section('content')



<h3> Charts </h3>

{{$data}}

{!! $chart->container()!!}

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
{!! $chart->script() !!}

@endsection