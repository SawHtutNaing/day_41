@extends('master');
@section('content')
<h1 class="heading"> i am about </h1>
<p class="para">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, soluta exercitationem quae illum similique possimus debitis repellat laudantium dignissimos qui! Minima minus culpa fugit saepe sit at perspiciatis fuga maxime.
</p>
@push('script')
    @vite('resources/js/about.js')
@endpush
<button class="btn btn-primary" id="showName">say Name</button>
@endsection