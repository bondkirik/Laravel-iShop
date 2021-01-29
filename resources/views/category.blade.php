@extends('layouts.master',['file' => 'category'])

@isset($category)
    @section('title','Категория'.$category->name)
@else
    @section('title', 'Категория')
@endisset
{{--@section('title','Категория')--}}

@section('content')
        <h1>
            {{$category->name}}
        </h1>
        <p>Количество товаров: <b>{{$category->products->count()}}</b></p>
        <p>{{$category->name}}</p>
        <div class="row">
            @foreach($category->products as $product)
                @include('layouts.card',compact($product))
            @endforeach
        </div>
@endsection

