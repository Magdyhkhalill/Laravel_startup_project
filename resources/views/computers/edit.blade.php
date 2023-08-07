
@extends('layout')
@section('title','Create Computers')


@section('content')

<div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center pt-8">
                 <h1>Edit an old Computers</h1>
                </div>

                
                <div class="flex justify-center pt-8">
                 
                    <form action="{{route('computers.update',['computer' =>$computer->id])}}" method="post">
                
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="computer-name">Computer Name</label>
                            <input id="computer-name" name = "computer-name" value="{{$computer->name}}" type="text">
                            @error('computer-name')
                            <div class="from-error">
                                {{$message}}
                            </div>
                            @enderror
                        </div>


                        <div>
                            <label for="computer-origin">Computer Origin</label>
                            <input id="computer-origin" name = "computer-origin" value="{{$computer->origin}}" type="text">
                            @error('computer-origin')
                            <div class="from-error">
                                {{$message}}
                            </div>
                            @enderror
                        </div>  


                        <div>
                            <label for="computer-price">Computer Price</label>
                            <input id="computer-price" name = "computer-price" value="{{$computer->price}}" type="text">
                            @error('computer-price')
                            <div class="from-error">
                                {{$message}}
                            </div>
                            @enderror 
                        </div>      
                        <button
                            type="submit">Submit
                        </button>
                     
                    </form>

                </div>

            
            </div>  

@endsection

 