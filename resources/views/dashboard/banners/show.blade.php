@extends('dashboard.layouts.master')

@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Field Name </th>
                <th> Data </th>
            </tr>
            <tr>
                <td> Banner title </td>
                <td> {{$banner->title}} </td>
            </tr>
            <tr>
                <td>Picture</td>
                <td> {{$banner->picture}} </td>
            </tr>
            <tr>
                <td> Link</td>
                <td> {{$banner->link}} </td>
            </tr>
            <tr>
                <td>Promotions</td>
                <td> {{$banner->promotional_message}} </td>
            </tr>
            <tr>
                <td> Html_Banner</td>
                <td> {{$banner->html_banner}} </td>
            </tr>
            <tr>
                <td>Is_active</td>
                <td> {{$banner->is_active}} </td>
            </tr>
            <tr>
                <td> Is_draft</td>
                <td> {{$banner->is_draft}} </td>
            </tr>
            <tr>
                <td> Soft_delete</td>
                <td> {{$banner->soft_delete}} </td>
            </tr>
            <tr>
                <td>Max_display</td>
                <td>{{$banner->max_display}}</td>
            </tr>

        </table>
    </div>
@endsection
