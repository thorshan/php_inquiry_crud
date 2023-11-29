@extends('layout.header')
@extends('layout.footer')

@section('content')
    <div class="container" style="padding: 50px 300px">
        <h2 class="mb-3">Update Inquiry</h2>
        <form action="{{route('inquiries.update', $inquiry->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-2">
                <label for="date" class="form-label">Select Date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{$inquiry->date ?? old('date')}}">
            </div>
            <div class="form-group mb-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control"
                    value="{{$inquiry->name ?? old('name') }}">
            </div>
            <div class="form-group mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" name="city" id="city" class="form-control"
                    value="{{$inquiry->city ?? old('city') }}">
            </div>
            <select class="form-select mb-2" name="type_id">
                <option>- Inquiry type -</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $type->id == $inquiry->type_id ? 'selected' : '' }}>{{ $type->name }}</option>
                @endforeach
            </select>
            <div class="form-group mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control"
                    value="{{$inquiry->phone ?? old('phone') }}">
            </div>
            <div class="form-group mb-3">
                <label for="remark" class="form-label">Remark</label>
                <input type="text" name="remark" id="remark" class="form-control"
                    value="{{$inquiry->remark ?? old('remark') }}">
            </div>
            <select class="form-select mb-3" name="status_id">
                <option>- Status -</option>
                @foreach ($statuses as $status)
                    <option value="{{ $status->id }}" {{ $status->id == $inquiry->status_id ? 'selected' : '' }}>{{ $status->name }}</option>
                @endforeach
            </select>
            <div class="col">
                <a href="{{route('inquiries.index')}}">
                    <button type="button" class="btn btn-secondary w-100 mb-2">Cancel</button>
                </a>
                <button type="submit" class="btn btn-primary w-100">Create</button>
            </div>
        </form>
    </div>
@endsection
