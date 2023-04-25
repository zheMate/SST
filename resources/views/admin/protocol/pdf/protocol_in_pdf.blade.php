<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Протокол</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <div style="text-align: center;">
        <p><img src="{{ public_path('image/logo_for_email.jpg') }}" width="20%" alt="Логотип студенческого совета Авиатехникума"></p>
        <h1>Протокол № "{{ $protocol->id }}"</h1>
    </div>
    <table style="position:relative; ">
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $protocol->id }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $protocol->title }}</td>
            </tr>
            <tr>
                <td>Дата проведения собрания</td>
                <td>{{ $parsedDateOfMeeting->day }} {{ $parsedDateOfMeeting->translatedFormat('F') }} {{ $parsedDateOfMeeting->year }}</td>
            </tr>
            <tr>
                <td>Присутствовали</td>
                <td>
                    @foreach($protocol->users as $student)
                    {{ $student->name }} ({{ $student->group_name }})

                    <br>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>Повестка</td>
                <td>{!! $protocol->protocol_agenda !!}</td>
            </tr>
            <tr>
                <td>Решили</td>
                <td>{!! $protocol->protocol_decision !!}</td>
            </tr>
            <tr>
                <td>Дата проведения следующего собрания</td>
                <td>{{ $parsedDateOfNextMeeting->day }} {{ $parsedDateOfNextMeeting->translatedFormat('F') }} {{ $parsedDateOfNextMeeting->year }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
