@extends('layout.header')
@extends('layout.footer')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
              {{$inquiry->name}}
            </div>
            <div class="card-body">
              <h5 class="card-title">Name : {{$inquiry->name}}</h5>
              <small class="card-text">Inquiry Date : {{$inquiry->date}}<br>Last updated : {{$inquiry->updated_at}}</small>
              <p class="card-text mt-2">{{$inquiry->city}}</p>
              <p class="card-text">Phone number : {{$inquiry->phone}}</p>
              <p class="card-text">Remark : {{$inquiry->remark}}</p>
              <p class="card-text">Status : {{$inquiry->status->name}}</p>
              <a href="{{route('inquiries.index')}}" class="btn btn-primary">Dashboard</a>
            </div>
          </div>
    </div>
@endsection
