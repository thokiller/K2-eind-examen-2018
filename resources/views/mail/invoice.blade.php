<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>

        body{
            width: 100%;
        }

        .outer {
            width: 100%;
            height: 600px;
            background-color: #2196F3;
        }

        .container{
            width: 400px;
            min-height: 400px;
            background-color: white;
            border-radius: 10px;
        }

        .header{
            padding: 15px;
            font-family: Tahoma;
        }

        .text{
            padding: 15px;
            font-family: Tahoma;
            text-align: left;
        }

    </style>

    <title>Confirm email</title>
</head>
<body>

<table class="outer" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center">
            <div class="container">
                <h1 class="header">Factuur</h1>
                <p class="text">
                    Geachte {{ $fullname }}, <br> <br>
                    Maak het bedrag in de factuur over naar: AA00000000
                    <br /><br />
                    Indien u een bestelling veranderd hebt krijgt u het originele bedrag binnen 3 dagen terug gestord
                    <br /><br />
                    De betaling moet minimaal 2 maanden van te voren gedaan worden, anders anuleren wij uw bestelling. Hebt u minder dan 2 maanden van te voren uw bestelling geplaatst? Dan dient u binnen 3 dagen te betalen.
                    <br /><br />
                    Met vriendelijke groet,
                    <br /><br />
                    De Dissel
                </p>
            </div>
        </td>
    </tr>
</table>

</body>
</html>