@props(['tag','size'=>'base'])

@php
    
    $classes = 'bg-white/50 hover:bg-black/30 hover:text-yellow-400 rounded-xl font-bold transition-colors duration-500';


    if ($size == 'base') {

        $classes .= " px-5 py-1 text-sm";

    }

    if ($size == 'small') {

        $classes .= " px-3 py-1 text-[10px]";

    }

@endphp

<a href="" class="{{$classes}}">{{$slot}}</a>
