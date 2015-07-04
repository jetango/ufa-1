<?php
    $static_resources = ufa()->load_styles();
    $main = ufa()->realPath('main', 'css');
    $main_ie = ufa()->realPath('main-ie', 'css');
?>

{{-- Load main style --}}
@if(ufa()->compatible_ie)
    <!--[if IE]>
    <link href="{{$main_ie}}" rel="stylesheet"/>
    <![endif]-->
    <!--[if ! IE]><!-->
    <link href="{{$main}}" rel="stylesheet"/>
    <!--<![endif]-->
@else
    <link href="{{$main}}" rel="stylesheet"/>
@endif

{{-- load external styles --}}
@foreach($static_resources['external'] as $css_file)
    <link href="{{$css_file}}" rel="stylesheet"/>
@endforeach

{{-- load internal styles --}}
@foreach($static_resources['internal'] as $css_file)
    <link href="{{$css_file}}" rel="stylesheet"/>
@endforeach