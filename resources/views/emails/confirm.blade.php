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

        .button{
            display: inline-block;
            position: relative;
            padding: .625rem 1.125rem;
            min-width: 7.5rem;
            background-color: #0079d3;
            color: #fff;
            box-shadow: inset 0 -.125rem 0 #005ca0;
            text-align: center;
            font-size: 1rem;
            border: none;
            text-decoration: none;
            transition: box-shadow .15s ease-in-out
        }

        .button:hover{
            color: #fff;
            text-decoration: none;
            cursor: pointer;
            box-shadow: inset 0 -3.125rem 0 #005ca0
        }

    </style>

    <title>Confirm email</title>
</head>
<body>

<table class="outer" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center">
            <div class="container">
                <h1 class="header">Email bevestiging</h1>
                <p class="text">
                    Geachte Heer, Mevrouw, <br> <br>
                    Om uw account te kunnen activeren moet u eerst uw email bevestigen. <br>
                    Dat doet u door op de knop hier onder te klikken: <br><br>
                    <a href="{{ url('/confirm-email/' . $uuid) }}" class="button">Bevestig email</a> <br><br>
                    Met vriendelijke groet, <br>
                    De Dissel
                </p>
            </div>
        </td>
    </tr>
</table>

</body>
</html>