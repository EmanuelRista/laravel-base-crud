@extends('bookings.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifica Booking</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-eris" href="{{ route('bookings.index') }}"> Indietro</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ops!</strong> There were some problems with your input.<br><br>
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
                    <strong>Nome e Cognome:</strong>
                    <input type="text" name="guest_full_name" value="{{ $booking->guest_full_name }}" class="form-control" placeholder="Guest full name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Carta di credito:</strong>
                    <input type="text" name="guest_credit_card" value="{{ $booking->guest_credit_card }}" class="form-control" placeholder="Guest credit card">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stanza:</strong>
                    <input type="text" name="room" value="{{ $booking->room }}" class="form-control" placeholder="Room">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Check in:</strong>
                    <input type="text" name="from_date" value="{{ $booking->from_date }}" class="form-control" placeholder="From date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Check out:</strong>
                    <input type="text" name="to_date" value="{{ $booking->to_date }}" class="form-control" placeholder="To date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Note:</strong>
                    <input type="text" name="more_details" value="{{ $booking->more_details }}" class="form-control" placeholder="More details">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-eris">Edit</button>
            </div>
        </div>

    </form>
@endsection
