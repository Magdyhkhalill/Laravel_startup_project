
@extends('layout')
@section('title','Computers')


@section('content')

<div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center pt-8">
                 <h1>Computers</h1>
                </div>

     <div class="mt-16">

            <div>
                <p>{{$computer['name']}} ( {{$computer['origin']}} ) - <strong>{{$computer['price']}}$</strong></p>
            </div>
    
     </div>  
            
                     <div>
                <a class="edit-btn" href="{{route('computers.edit',$computer->id)}}">edit</a>

                <form  action=" {{route('computers.destroy',$computer->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input class="delete-btn" type="submit" value="Delete">

                </form>

                    </div>

</div>             
  

@endsection

 