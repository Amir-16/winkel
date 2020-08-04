@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Serial </th>
                <th>Banner title</th>
                <th> Picture</th>
                <th>Link </th>
                <th>Promotional_message </th>
                <th>Html_banner</th>
                <th>Is_active</th>
                <th>Is_draft</th>
                <th>Soft delete</th>
                <th>Max display</th>

                <th>Actions </th>
            </tr>

            @foreach($banners as $key => $banner)
                <tr>
                    <td> {{$banners->firstItem()+$key}} </td>
                    <td> {{$banner->title}} </td>
                    <td> {{$banner->picture}} </td>
                    <td> {{$banner->link}} </td>
                    <td> {{$banner->promotional_message}} </td>
                    <td> {{$banner->html_banner}}</td>
                    <td> {{$banner->is_active}} </td>
                    <td> {{$banner->is_draft}} </td>
                    <td> {{$banner->soft_delete}} </td>
                    <td> {{$banner->max_display}} </td>

                    <td>
                        <a href="{{url("banners/$banner->id")}}">
                            <button type="button" class="btn btn-success">show</button></a>
                        <a href="{{url("banners/$banner->id/edit")}}">
                            <button type="button" class="btn btn-primary">edit</button> </a>
                        <a href="{{url("banners/$banner->id/delete")}}">
                            <button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection


