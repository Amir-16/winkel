@extends('dashboard.layouts.master')

@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-striped">
            <tr>
                <th> Field Name </th>
                <th> Data </th>
            </tr>
            <tr>
                <td> Title</td>
                <td> {{$label->title}} </td>
            </tr>
            <tr>
                <td> Picture</td>
                <td> {{$label->picture}} </td>
            </tr>
    
        </table>
    </div>
@endsection
















































