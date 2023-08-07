
@extends('layout')
@section('title','Computers')


@section('content')

<div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center pt-8">
                 <h1>Computers</h1>
                </div>

                <div class="mt-16">

             @if (count($computers)>0)
                
                @foreach($computers as $computer) 
                <a href="{{route('computers.show',['computer'=>$computer['id']])}}"> 
   
                <li>
                    <p>{{$computer['name']}} ( {{$computer['origin']}} ) - <strong>{{$computer['price']}}$</strong></p>
                    </a>
                </li>
                @endforeach
                
            @else

            <p>There are no computers to display</p>


                @endif

                </div>

            
            </div>  

@endsection

