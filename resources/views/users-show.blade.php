@extends('layouts.app')

@section('content')

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

                        <tr>

                            <td class="table-text">
                                <div>{{$phone_book_users->name}}</div>
                            </td>

                            <td class="table-text">
                                <div>{{$phone_book_users->phone}}</div>
                            </td>

                            <td>
                                <form action="{{url('api/users/'.$phone_book_users->id)}}" method="PUT">
                                    {{csrf_field()}}
                                    {{method_field('EDIT')}}

                                    <button class="btn btn-danger">
                                        Edit
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection