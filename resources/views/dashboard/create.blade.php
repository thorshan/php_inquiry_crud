@extends('layout.header')
@extends('layout.footer')

@section('content')
    <div class="container" style="padding: 50px 300px">
        <h2 class="mb-3">Create new inquiry</h2>
        <form action="{{route('inquiries.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group mb-2">
                <label for="date" class="form-label">Select Date</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ old('name') }}">
            </div>
            <div class="form-group mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" name="city" id="city" class="form-control"
                    value="{{ old('city') }}">
            </div>
            <select class="form-select mb-2" name="type_id">
                <option>- Inquiry type -</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
            <div class="form-group mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control"
                    value="{{ old('phone') }}">
            </div>
            <div class="form-group mb-3">
                <label for="remark" class="form-label">Remark</label>
                <input type="text" name="remark" id="remark" class="form-control"
                    value="{{ old('remark') }}">
            </div>
            <select class="form-select mb-3" name="status_id">
                <option>- Status -</option>
                @foreach ($statuses as $status)
                    <option value="{{ $status->id }}">{{ $status->name }}</option>
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
