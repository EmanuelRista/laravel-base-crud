@extends('bookings.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Hotel Costa del Sol - Software prenotazioni</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-eris" href="{{ route('bookings.create') }}">Nuova prenotazione</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome e Cognome</th>
            <th>Carta di credito</th>
            <th>Stanza</th>
            <th>Check in</th>
            <th>Check out</th>
            <th>Note</th>
            <th width="280px">Azione</th>
        </tr>
        @foreach ($bookings as $booking)
        <tr>
            <td>{{ $booking->id }}</td>
            <td>{{ $booking->guest_full_name }}</td>
            <td>{{ $booking->guest_credit_card }}</td>
            <td>{{ $booking->room }}</td>
            <td>{{ $booking->from_date }}</td>
            <td>{{ $booking->to_date }}</td>
            <td>{{ $booking->more_details }}</td>
            <td>
                <form action="{{ route('bookings.destroy',$booking->id) }}" method="POST">
                    <a class="btn btn-eris" href="{{ route('bookings.show',$booking->id) }}">Mostra</a>
                    <a class="btn btn-eris" href="{{ route('bookings.edit',$booking->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-eris">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $bookings->links() }}


@endsection
