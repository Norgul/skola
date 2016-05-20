<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


    <style>
        thead:before, thead:after,
        tbody:before, tbody:after,
        tfoot:before, tfoot:after
        {
            display: none;
        }
    </style>

</head>
<body>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Ime i prezime</th>
        <th>Adresa</th>
        <th>Telefon</th>
        <th>E-mail</th>
        <th>OIB</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td><strong>{{$user->name}}</strong></td>
            <td>{{$user->address}} <br> {{$user->city}}</td>
            <td>{{$user->phone_private}} <br> {{$user->phone_work}}</td>
            <td>{{$user->email}} <br> {{$user->email_private}}</td>
            <td>{{$user->oib}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>


