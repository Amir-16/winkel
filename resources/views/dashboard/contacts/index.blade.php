@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Serial </th>
                <th>Contact Name</th>
                <th>email </th>
                <th>Subject </th>
                <th>comment </th>
                <th>status</th>
                <th>soft_delete</th>
                <th>date</th>

                <th>Actions </th>
            </tr>

            @foreach($contacts as $key => $contact)
                <tr>
                    <td> {{$contacts->firstItem()+$key}} </td>
                    <td> {{$contact->name}} </td>
                    <td> {{$contact->email}} </td>
                    <td> {{$contact->subject}} </td>
                    <td> {{$contact->comment}} </td>
                    <td> {{$contact->status}} </td>
                    <td> {{$contact->soft_delete}} </td>
                    <td> {{$contact->date}} </td>

                    <td>
                        <a href="{{url("contacts/$contact->id")}}">
                            <button type="button" class="btn btn-success">show</button></a>
                        <a href="{{url("contacts/$contact->id/edit")}}">
                            <button type="button" class="btn btn-primary">edit</button> </a>
                        <a href="{{url("contacts/$contact->id/delete")}}">
                            <button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
            @endforeach
        </table>
        {{$contacts->links()}}
    </div>
@endsection



