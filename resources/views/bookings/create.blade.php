@extends('bookings.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Aggiungi prenotazione</h2>
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

<form action="{{ route('bookings.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome e Cognome:</strong>
                <input type="text" name="guest_full_name" class="form-control" placeholder="Mario Rossi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Carta di credito:</strong>
              <input type="text" name="guest_credit_card" class="form-control" placeholder="1234123412341234">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Stanza:</strong>
            <input type="text" name="room" class="form-control" placeholder="Singola">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Check in:</strong>
          <input type="text" name="from_date" class="form-control" placeholder="09/08/2021">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Check out:</strong>
          <input type="text" name="to_date" class="form-control" placeholder="02/09/2021">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Note</strong>
          <input type="text" name="more_details" class="form-control" placeholder="Solo colazione e pranzo">
        </div>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-eris">Aggiungi</button>
        </div>
    </div>
  
  </form>
@endsection
