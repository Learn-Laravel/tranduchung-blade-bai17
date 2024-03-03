<h1>Trang Chu Unicode</h1>
<h2>{{ !empty(request()->keyword) ?request()->keyword:"khong co gi"}}</h2>
<div class="container">
    {!! !empty($content)? $content:false!!}
</div>
<hr>
<!-- @for ($i = 1; $i <= 10; $i++)
    <p>Phan tu: {{$i}}</p>
@endfor  -->

<!-- @while ($index <= 10)
    <p>phan tu: {{$index}}</p>
    @php
        $index ++;
    @endphp
@endwhile -->

<!-- @foreach ($dataArr as $key => $item)
   <p>Phan tu:{{$item}} - {{$key}}</p> 
@endforeach -->

<!-- @forelse ($dataArr as $item)
    <p>phan tu thu: {{$item}}</p>
@empty
    <p>Khong co phan tu</p>
@endforelse -->

<!-- @if ($number >=10)
    <p>Day la gia tri hop le</p>
@else
    <p>Day la gia tri ko hop le</p>
@endif -->
<!-- 
@if ($number <0)
    <p>So am</p>
@elseif ($number >=0 && $number <5)
    <p>So sieu nho</p>
@elseif ($number >=5 && $number <10)
    <p>So trung binh</p>
@else
    <p>So lon</p>
@endif -->

<!-- @switch($number)
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
@endswitch -->

@for($i = 1; $i<=10; $i++)
    @if ($i == 5)
        @continue
    @endif
    <p>Phan tu thu: {{$i}}</p>
    
@endfor