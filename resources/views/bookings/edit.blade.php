@extends('bookings.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Booking</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-eris" href="{{ route('bookings.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bookings.update',$booking->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full name:</strong>
                    <input type="text" name="guest_full_name" value="{{ $booking->guest_full_name }}" class="form-control" placeholder="Guest full name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Credit card:</strong>
                    <input type="text" name="guest_credit_card" value="{{ $booking->guest_credit_card }}" class="form-control" placeholder="Guest credit card">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Room:</strong>
                    <input type="text" name="room" value="{{ $booking->room }}" class="form-control" placeholder="Room">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>From:</strong>
                    <input type="text" name="from_date" value="{{ $booking->from_date }}" class="form-control" placeholder="From date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>To:</strong>
                    <input type="text" name="to_date" value="{{ $booking->to_date }}" class="form-control" placeholder="To date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details & Requests:</strong>
                    <input type="text" name="more_details" value="{{ $booking->more_details }}" class="form-control" placeholder="More details">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-eris">Submit</button>
            </div>
        </div>

    </form>
@endsection
