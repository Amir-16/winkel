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
                <td> {{$popular->name}} </td>
            </tr>
            <tr>
                <td>Link</td>
                <td> {{$popular->link}} </td>
            </tr>
            <tr>
                <td>Is_active</td>
                <td> {{$popular->is_active}} </td>
            </tr>
            <tr>
                <td> Soft_delete</td>
                <td> {{$popular->soft_delete}} </td>
            </tr>
            <tr>
                <td> Soft_delete</td>
                <td> {{$popular->is_draft}} </td>
            </tr>

        </table>
    </div>
@endsection
