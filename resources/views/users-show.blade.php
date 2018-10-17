@extends('layouts.app')

@section('content')

        <div class="card">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>EDIT PHONE BOOK USER</th>
                    </thead>

                    <tbody>
                    @foreach($phone_book_users as $phone_book_user)
                        <tr>

                            <td class="table-text">
                                <div>{{$phone_book_user->id}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$phone_book_user->name}}</div>
                            </td>

                            <td class="table-text">
                                <div>{{$phone_book_user->phone}}</div>
                            </td>

                        </tr>
                        <tr>
                            <td></td>
                            <td><strong>FORM FORE UPDATE USER</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        <td>
                            @include('errors')

                            <form action="{{route('users.update', $phone_book_user->id)}}" method="POST" class="form-horizontal">
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="form-group">
                                        <div class="row">

                                            <div class="col-sm-3">
                                                <input type="text" name="name" id="task-name" class="form-control" value={{ $phone_book_user->name }}>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" name="phone" id="task-phone" class="form-control" value={{ $phone_book_user->phone }}>
                                            </div>
                                            <div class="col-sm-3">
                                                <button type="submit" id="task-button" class="btn btn-success">UPDATE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection