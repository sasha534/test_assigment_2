@extends('layouts.app')

@section('content')

<div class="card-body">
    @include('errors')

    <form action="{{url('/api/users')}}" method="POST" class="form-horizontal">
        {{csrf_field()}}

        <div class="row">
            <div class="form-group">
                <label for="Task" class="col-sm-3 control-label">Add NEW</label>

                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="name" id="task-name" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="phone" id="task-phone" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" id="task-button" class="btn btn-success">ADD PHONE</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


    @if(count($phone_book_users) > 0)
        <div class="card">
            <div class="card-heading">
                ALL PHONE NUMBERS AND NAMES

            </div>
            <div class="card-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>PHONE BOOK</th>
                    <th>&nbsp;</th>
                    </thead>

                    <tbody>
                    @foreach($phone_book_users as $phone_book_user)

                        <tr>

                        <td class="table-text">
                            <div>{{$phone_book_user->name}}</div>
                        </td>

                            <td class="table-text">
                                <div>{{$phone_book_user->phone}}</div>
                            </td>

                        <td>
                            <form action="{{url('api/users/'.$phone_book_user->id)}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}

                                <button class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
     @endif
@endsection