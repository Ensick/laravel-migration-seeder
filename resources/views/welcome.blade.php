<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <main>
        @foreach($allDbTrains as $elem)

        <h2>Treno: {{$elem['train_name']}}</h2>
        <h3>Partenza: {{$elem['departure_time']}}</h3>
        <h3>Arrivo: {{$elem['arrival_time']}}</h3>
        <h3>Stazione di Partenza: {{$elem['departure_station']}}</h3>
        <h3>Stazione di Arrivo: {{$elem['arrival_station']}}</h3>
        <h3>Prezzo biglietto: {{$elem['price']}}</h3>
        @endforeach
    </main>

</body>
</html>
