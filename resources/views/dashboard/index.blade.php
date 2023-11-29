@extends('layout.header')
@extends('layout.footer')

@section('content')
    <div class="container-fluid my-3">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Date</th>
                    <th scope="col">Name</th>
                    <th scope="col">City</th>
                    <th scope="col">Type</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Renmark</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inquiries as $inquiry)
                    <tr>
                        <td>{{$loop->index +1}}</td>
                        <td>{{$inquiry->date}}</td>
                        <td>{{$inquiry->name}}</td>
                        <td>{{$inquiry->city}}</td>
                        <td>{{$inquiry->type->name}}</td>
                        <td>{{$inquiry->phone}}</td>
                        <td>{{$inquiry->remark}}</td>
                        <td>{{$inquiry->status->name}}</td>
                        <td>
                            <div class="d-flex justify-content-evenly">
                                <div class="bd-highlight">
                                    <a href="{{route('inquiries.show', $inquiry->id)}}">
                                        <button type="button" class="btn btn-success btn-sm">View</button>
                                    </a>
                                </div>
                                <div class="bd-highlight">
                                    <a href="{{route('inquiries.edit', $inquiry->id)}}">
                                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                    </a>
                                </div>
                                <div class="bd-highlight">
                                    <form action="{{route('inquiries.destroy', $inquiry->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
