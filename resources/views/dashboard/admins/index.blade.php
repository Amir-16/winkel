@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Serial </th>
                <th>Admin Name</th>
                <th>email </th>
                <th>password </th>
                <th>phone </th>
                <th>soft_delete</th>
                <th>is_draft</th>

                <th>Actions </th>
            </tr>

            @foreach($admins as $key => $admin)
                <tr>
                    <td> {{$admins->firstItem()+$key}} </td>
                    <td> {{$admin->name}} </td>
                    <td> {{$admin->email}} </td>
                    <td> {{$admin->password}} </td>
                    <td> {{$admin->phone}} </td>
                    <td> {{$admin->soft_delete}} </td>
                    <td> {{$admin->is_draft}} </td>

                    <td>
                        <a href="{{url("admins/$admin->id")}}">
                            <button type="button" class="btn btn-success">show</button></a>
                        <a href="{{url("admins/$admin->id/edit")}}">
                            <button type="button" class="btn btn-primary">edit</button> </a>
                        <a href="{{url("admins/$admin->id/delete")}}">
                            <button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
            @endforeach
        </table>
        {{$admins->links()}}
    </div>
@endsection


