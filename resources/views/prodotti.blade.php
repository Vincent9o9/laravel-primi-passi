@php
$cards = config('prodotti');
$lunghe = [];
$corte = [];
$cortissime = [];
foreach ($cards as $card) {
    if($card['tipo'] == 'lunga') {
        $lunghe[] = $card;
    }
    elseif ($card['tipo'] == 'corta') {
        $corte[] = $card;
    } elseif ($card['tipo'] == 'cortissima') {
        $cortissime[] = $card;
    }
}
@endphp
    @extends('layout.app')
    @section('titolo', 'Prodotti Molisana')
    @section('main')
        <h2>Le lunghe</h2>
        <div class="cards">
            @foreach ($lunghe as $card)
                <div class="card">
                    <h3>{{ $card['titolo'] }}</h3>
                    <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                </div>
            @endforeach
        </div>
            <h2>Le corte</h2>
        <div class="cards">
            @foreach ($corte as $card)
                <div class="card">
                    <h3>{{ $card['titolo'] }}</h3>
                    <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                </div>
            @endforeach
        </div>
            <h2>Le cortissime</h2>
        <div class="cards">
            @foreach ($cortissime as $card)
                <div class="card">
                    <h3>{{ $card['titolo'] }}</h3>
                    <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                </div>
            @endforeach
        </div>
    @endsection
