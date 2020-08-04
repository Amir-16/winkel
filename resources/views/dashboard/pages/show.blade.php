@extends('dashboard.layouts.master')

@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Field Name </th>
                <th> Data </th>
            </tr>
            <tr>
                <td> Page title </td>
                <td> {{$page->title}} </td>
            </tr>
            <tr>
                <td>Description</td>
                <td> {{$page->description}} </td>
            </tr>
            <tr>
                <td> Link</td>
                <td> {{$page->link}} </td>
            </tr>

        </table>
    </div>
@endsection

