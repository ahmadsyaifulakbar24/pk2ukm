@extends('layouts/app')

@section('title','Bantuan')

@section('content')
	<div class="container">
        <iframe width="100%" height="557" src="https://www.youtube.com/embed/5BXygUW7tpM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	</div>
@endsection

@section('script')
	<script src="{{asset('api/bantuan.js')}}"></script>
	<!-- <script src="{{asset('assets/js/exportCsv.js')}}"></script> -->
@endsection