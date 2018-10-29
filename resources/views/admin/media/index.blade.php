@extends('layouts.admin')

@section('content')


    <h1>Media</h1>

    <form action="delete/media" method="post" class="form-inline">
        {{csrf_field()}}
        {{method_field('delete')}}
        <div class="form-group">
           <select name="checkBoxArray" id="" class="form-control">
                <option value="">Delete</option>

           </select>
        </div>
        <div class="form-group">
            <input type="submit" name="delete_all" class="btn btn-danger">
        </div>

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th><input type="checkbox" id="options"> </th>
            <th>Id</th>
            <th>Name</th>
            <th>Created Date</th>
            <th>Email</th>


        </tr>
        </thead>
        <tbody>
        @if($photos)
            @foreach($photos as $photo)
                <tr>
                    <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}} "> </td>
                    <td>{{$photo->id}}</td>
                    <td> <img height="70" width="70" src="{{$photo->file ? $photo->file :'/images/No.jpg'}}" alt=""></td>
                    {{--<td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>--}}
                    {{--<td><a href="{{route('admin.categories.edit',$category->id)}}" >{{$category->name}}</a></td>--}}
                    {{--<td>{{$photo->file}}</td>--}}
                    <td>{{$photo->created_at ? $photo->created_at->diffForHumans(): 'No Date'}}</td>
                    <td>
                        <input type="hidden" name="photo_id" value="{{$photo->id}}">
                        <div class="form-group">
                            <input type="submit" value="Delete" name="delete_single" class="btn btn-danger">
                        </div>

                    </td>

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    </form>

@stop

@section('scripts')
<script>
$(document).ready(function(){
    $('#options').click(function(){

        if(this.checked)
        {
                   $('.checkBoxes').each(function() {

                       this.checked = true;
                   });
        }
           else{
                    $('.checkBoxes').each(function() {

                        this.checked = false;
                    });
               }

        });
    });

</script>
@endsection