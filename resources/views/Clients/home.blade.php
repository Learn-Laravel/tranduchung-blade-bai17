<h1>Trang Chu Unicode</h1>
{{-- <h2>{{ !empty(request()->keyword) ? request()->keyword : 'khong co gi' }}</h2>
<div class="container">
    {!! !empty($content) ? $content : false !!}
</div>
<hr> --}}
{{-- @for ($i = 1; $i <= 10; $i++)
    <p>Phan tu: {{$i}}</p>
@endfor  

@while ($index <= 10)
    <p>phan tu: {{$index}}</p>
    @php
        $index ++;
    @endphp
@endwhile 

@foreach ($dataArr as $key => $item)
   <p>Phan tu:{{$item}} - {{$key}}</p> 
@endforeach 

 @forelse ($dataArr as $item)
    <p>phan tu thu: {{$item}}</p>
@empty
    <p>Khong co phan tu</p>
@endforelse -->

@if ($number >= 10)
    <p>Day la gia tri hop le</p>
@else
    <p>Day la gia tri ko hop le</p>
@endif 

@if ($number < 0)
    <p>So am</p>
@elseif ($number >=0 && $number <5)
    <p>So sieu nho</p>
@elseif ($number >=5 && $number <10)
    <p>So trung binh</p>
@else
    <p>So lon</p>
@endif -->

@switch($number)
    @case(1)
        <p>So thu nhat</p> 
        @break
    @case(2)
        <p>So thu hai</p> 
        @break
    @case(3)
        <p>So thu ba</p> 
        @break
    @default 
        <p>So con lai</p> 
@endswitch 

 @for ($i = 1; $i <= 10; $i++)
    @if ($i == 5)
        @continue
    @endif
    <p>Phan tu thu: {{$i}}</p>
@endfor

 
@php
   $number = 10;
    if ($number >= 10) {
        $total = $number + 20;
    }else{
        $total = $number + 10;
    }
@endphp
<h3>Ket qua: {{$number}} - {{$total}}</h3> 
@for ($index = 0; $index < 10; $index++)
    <p>Phan tu: {{$index}}</p>
@endfor --}}
{{-- @verbatim
    <div class="container">
        Hello, {{ className }}
    </div>
    <script>
        Hello, {{ name }}
        Hi, {{ age }}
    </script>
@endverbatim --}}
{{-- @php
  $message = "Thanh Cong";
@endphp
@include('paths.notice') --}}
@extends('layouts.client')
@section('sidebar')
    @parent
    <h3>Home sidebar</h3>
@endsection
@section('title')
    {{ $title }}
@endsection
@section('content')
    <h1>Trang chu</h1>
    @datetime('2021-12-15 15:00:30')
    @include('Clients.Contents.slide')
    @include('Clients.Contents.abouts')
    @datetime("2021-11-10 00:30:30")

    @env('production')
        <p>Moi truong production</p>
    @elseenv('test')
        <p>moi truong test</p>
    @else
    <p>Moi truong dev</p>
    @endenv
@endsection

@section('css')
    
@endsection

@section('Js')
    
@endsection
