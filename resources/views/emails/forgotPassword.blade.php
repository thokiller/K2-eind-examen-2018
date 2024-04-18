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
            height: 400px;
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

    <title>Nieuw Wachtwoord</title>
</head>
<body>

<table class="outer" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center">
            <div class="container">
                <h1 class="header">Nieuw wachtwoord</h1>
                <p class="text">
                    Geachte Heer, Mevrouw, <br> <br>
                    Hier uw nieuwe wachtwoord: <strong>{{$password}}</strong><br><br>
                    Met vriendelijke groet, <br>
                    De Dissel
                </p>
            </div>
        </td>
    </tr>
</table>

</body>
</html>