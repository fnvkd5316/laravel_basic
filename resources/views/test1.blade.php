라라벨10 블레이드 문법

<p>{{ $name }}</p>

<p>@{{ $name .'이건 그대로 나와요' }}</p>

<p>{!! $id !!}</p>

<p>지금은 {{now()}} 입니다!</p>

@for($i = 0; $i < 10; $i++)
    숫자증가! : {{ $i }}<br>
@endfor

@include('sub/inc')

@includeIf('sub/incx') {{--버그가 나지 않도록 없는파일을 거를 수 있다--}}

@php
    $a = 10;
    $a++;
    echo 'a의 값은'.$a.'입니다<br>';
@endphp