
@extends ('layouts.app')
@section('content')
    <div class="w-100 h-100 d-flex justify-content-center align-items-center ">
        <div class=" text-center" >
             <h1 class="display-2 text-white">Edit your Todo called {{ $todo1->title }} </h1>
            <form action="{{route('todo.update',$todo1->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class=" input-group md-3 w-100">
                    <input type="text" class="form-control input-lg" name="title" value="{{ $todo1->title }}" aria-label=" Recipient's username" aria-describedby="button-addon2">
                    <div class=" input-group-append">
                        <button class=" btn btn-success" type="submit" id="button-addon2" >Save</button>
                    </div>

                </div>
            </form>

        </div>

    </div>
@endsection
