@extends('dashboard.layouts.master')

@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Field Name </th>
                <th> Data </th>
            </tr>
            <tr>
                <td> Contact Name </td>
                <td> {{$contact->name}} </td>
            </tr>
            <tr>
                <td>Email</td>
                <td> {{$contact->email}} </td>
            </tr>
            <tr>
                <td> subject</td>
                <td> {{$contact->subject}} </td>
            </tr>
            <tr>
                <td>comment</td>
                <td> {{$contact->comment}} </td>
            </tr>
            <tr>
                <td> Status</td>
                <td> {{$contact->status}} </td>
            </tr>
            <tr>
                <td> Soft_delete</td>
                <td> {{$contact->soft_delete}} </td>
            </tr>
            <tr>
                <td> Date</td>
                <td> {{$contact->date}} </td>
            </tr>

        </table>
    </div>
@endsection

