
@extends ('layouts.app')
@section('content')
    <div class="w-100 h-100 d-flex justify-content-center align-items-center ">
        <div class=" text-center" >
        <h1 class="display-2 text-white">todo app</h1>
        <h2 class="text-white pt-5">What next? Add something to your list!</h2>
        <form action="{{route('todo.store')}}" method="POST">
            @csrf
            <div class=" input-group md-3 w-100">
                <input type="text" class="form-control input-lg" name="title" placeholder="type here" aria-label=" Recipient's username" aria-describedby="button-addon2">
                <div class=" input-group-append">
                    <button class=" btn btn-success" type="submit" id="button-addon2" >Add to the list</button>
                </div>

            </div>
        </form>
        <h2 class=" text-white pt-2">My todo List:</h2>
        <div class="bg-light p-3">
            @foreach ($todos as $todo)
               <div class=" w-100 d-flex align-items-center justify-content-between">
                <div>
                    @if ($todo->complete)

                    @else

                    @endif {{ $todo->title }}</div>

               <div class="p-2 mr-2 d-flex align-items-center">
                   @if ($todo->completed==0)
                   <form class="pr-1" action="{{route('todo.update',$todo->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <input type="text" name="completed" value="1" hidden>
                    <button class="btn btn-success">Mark it as Completed</button>
                </form>

                   @else
                   <form class="pr-1" action="{{route('todo.update',$todo->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <input type="text" name="completed" value="0" hidden>
                    <button class="btn btn-warning">Mark it as Uncompleted</button>
                </form>


                   @endif
                  <form class="pr-1" action="{{route('todo.edit',$todo->id)}}" method="POST">
                    @method('GET')
                    @csrf
                    <button class=" btn btn-info">Edit</button></button>
                </form>
                   <form action="{{route('todo.destroy',$todo->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class=" btn btn-danger">Delete</button>
                </form>

               </div>
            </div>
            @endforeach

        </div>

        </div>

    </div>
@endsection
