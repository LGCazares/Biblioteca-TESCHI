@extends('layouts.app')
@section('content')
<div class="container">
    <div>
    <iframe src="https://www.google.com/maps/embed?pb=!4v1615354548410!6m8!1m7!1sCAoSLEFGMVFpcE1UX2JPbERka29kZVRwVFlNMnZHdjR6b0pENjlyZ1pncXM4NnBj!2m2!1d19.4114742!2d-98.9288559!3f313.2754479717489!4f-3.5615535649187393!5f0.7820865974627469" width="100%" height="310" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>


<a href="{{route('imprimir.pdf')}}"> imprimir PDF </a>
@endsection
