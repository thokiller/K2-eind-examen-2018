<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div style="float: left">
        {{ $user->getFullName() }}
        <br />
        {{ $user->customer_address }}, {{ $user->customer_postal_code }} {{ $user->customer_town }}
        <br />
        {{ $user->customer_mobile }}
        <br />
        {{ $user->customer_phone }}
        <br />
        {{ $user->customer_email }}
    </div>
    <div style="float: right;">
        De Dissel
        <img width="30px" height="30px" src="https://image.flaticon.com/icons/svg/172/172901.svg" />
        <br />
        Deltion College, Lokaal grn.2.031
        <br />
        06-00000040
        <br />
        038-8503000
        <br />
        {{'info@dedissel.nl'}}
    </div>
    <div style="clear: both"></div>
    <br /><br /> <br /><br />
    Datum: {{ $order->updated_at->format('d-m-Y') }}
    <table class="mt-3" style="width: 100%;">
        <thead>
            <tr>
                <th>Object/Optie</th>
                <th>Betaal type</th>
                <th>Totaal prijs periode</th>
            </tr>
        </thead>
        <tbody style="border-top: 1px solid;">
            <tr>
                <td>
                    {{ $object->brand }} {{ $object->type }} {{ $object->year }}
                </td>
                <td>
                    {{ $weekly ? 'Per week' : 'Per dag' }}
                </td>
                <td>
                    €{{ number_format($objPrice, 2) }}
                </td>
            </tr>
            @foreach($order->options() as $option)
                <tr>
                    <td>
                        {{ $option->option_description }}
                    </td>
                    <td>
                        Één keer
                    </td>
                    <td>
                        €{{ number_format($option->option_price, 2) }}
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot style="border-top: 1px solid;">
            <tr>
                <th>Totaal</th>
                <th></th>
                <th>
                    €@php
                        echo number_format($objPrice + (float) array_sum($order->options()->map(function($option) {
                            return $option->option_price;
                        })->toArray()), 2);
                    @endphp
                </th>
            </tr>
        </tfoot>
    </table>

    <div class="mt-3"><i>Bedrag overmaken naar: AA00000000</i></div>
</body>
</html>




