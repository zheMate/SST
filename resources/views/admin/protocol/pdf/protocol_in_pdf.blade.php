<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Протокол собрания от {{ $parsedDateOfMeeting->day }} {{ $parsedDateOfMeeting->getTranslatedMonthName('Do MMMM') }} {{ $parsedDateOfMeeting->year }}</title>
    <style>
        .attend {
            text-align: center;
            margin-bottom: 1em;
        }

        .logo__wrapper {
            
            position: relative
        }

        .logo__wrapper td {
            margin: 0;
            position: absolute;            
            top: 10%;
            transform: translate(0, -10%);
        }
    </style>
</head>

<body>
    <div>
        <table>
            <tbody>
                <tr class="logo__wrapper">
                    <td width="20%">
                        <p class="logo"><img src="{{ public_path('image/logo_for_pdf.png') }}" width="100%" alt="Логотип студенческого совета Авиатехникума"></p>
                    </td>
                    <td >
                        <p style="text-align:center;"> <b>КГАПОУ «Авиатехникум» Протокол заседания студенческого совета</b></p>
                        <p style="margin-left: auto;
    margin-right: auto; width: 80%; text-align: right; "> №{{ $protocol->id }} от {{$parsedDateOfMeeting->translatedFormat('d.m.Y') }} </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div>
        <div class="attend">
            <b>Присутствуют</b>
        </div>

        <table style="text-align:center;  margin-left: auto;
    margin-right: auto; width: 80%; border-collapse: collapse;">
            <thead>
                <tr style="border: 1px solid #000;">
                    <th style="padding-top: .5em; padding-bottom: .5em; border: 1px solid #000;">ФИ гр.</th>
                    <th style="padding-top: .5em; padding-bottom: .5em; border: 1px solid #000;">Должность</th>
                </tr>
            </thead>
            <tbody>
                @foreach($protocol->users as $student)
                <tr style="border: 1px solid #000; ">
                    <td style="padding-top: .5em; padding-bottom: .5em; border: 1px solid #000;">{{ $student->name }} ({{ $student->group_name }})</td>
                    <td style="padding-top: .5em; padding-bottom: .5em; border: 1px solid #000;">{{ $student->job_title }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="margin-left: auto;
    margin-right: auto; width: 80%; ">
        <div class="attend">
            <b>Повестка:</b>
        </div>
        <div>
            {!! $protocol->protocol_agenda !!}
        </div>
    </div>

    <div style="margin-left: auto;
    margin-right: auto; width: 80%; ">
        <div class="attend">
            <b>Решили:</b>
        </div>
        <div class="decision">
            {!! $protocol->protocol_decision !!}
        </div>
    </div>

    <div class="date-of-next-meeting" style="margin-left: auto;
    margin-right: auto; width: 80%; ">
        <p>Назначить следующее заседание студ.совета на {{$parsedDateOfNextMeeting->translatedFormat('d.m.Y') }}</p>
    </div>
    <div class="sign-of-chairperson" style="text-align: right;">
        <p>Председатель студ.совета _________________________ Субботина Ю.А.
        </p>
    </div>

</body>

</html>