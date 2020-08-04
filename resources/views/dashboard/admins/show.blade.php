@extends('dashboard.layouts.master')

@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Field Name </th>
                <th> Data </th>
            </tr>
            <tr>
                <td> Admin Name </td>
                <td> {{$admin->name}} </td>
            </tr>
            <tr>
                <td>Email</td>
                <td> {{$admin->email}} </td>
            </tr>
            <tr>
                <td> Password</td>
                <td> {{$admin->password}} </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td> {{$admin->phone}} </td>
            </tr>
            <tr>
                <td> Soft_delete</td>
                <td> {{$admin->soft_delete}} </td>
            </tr>
            <tr>
                <td> Soft_delete</td>
                <td> {{$admin->is_draft}} </td>
            </tr>

        </table>
    </div>
@endsection
