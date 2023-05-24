@extends('master');
@section('content')
@push('script')
    @vite('resources/js/welcome.js')
@endpush
<h1 class="heading"> i am index </h1>
<p class="para">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, soluta exercitationem quae illum similique possimus debitis repellat laudantium dignissimos qui! Minima minus culpa fugit saepe sit at perspiciatis fuga maxime.
</p>
<button class="btn btn-primary " id="greeting">say hello</button>
@endsection