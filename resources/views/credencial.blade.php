<html>

<head>
    <style>
        body {
            font-family: sans-serif;
            text-align: center;
        }

        .logos {
            width: 290px;
            height: 50px;
        }

        .credencial1 {
            width: 290px;
            height: 470px;
            border: 3px solid #333;
            background: #9CFE85;
            float: auto;
            margin: auto 50px;
        }

        .credencial2 {
            width: 290px;
            height: 470px;
            border: 3px solid #333;
            background: #9CFE85;
            margin: auto 345px;
        }

        .teschi {
            margin: 4px;
            text-align: center;
            width: 120px;
            height: 50px;
            margin-left: -10px;
        }

        .tecnm {
            width: 50px;
            height: 50px;
            margin-top: 3px;

        }

        .gobierno {
            width: 50px;
            height: 50px;
            float: left;

        }

        .libelula {
            width: 50px;
            height: 50px;
            float: right;
        }
    </style>

<body>
    <div class="container" style="background-color: blueviolet;">
        <div class="credencial1">
            <div class="logos">
                <img class="gobierno" src="{{asset('imagen/gobierno.png')}}" alt="gobierno">
                <img class="teschi" src="{{asset('imagen/teschi.gif')}}" alt="teschi">
                <img class="tecnm" src="{{asset('imagen/tec.png')}}" alt="tecnm">
                <img class="libelula" src="{{asset('imagen/libelula.gif')}}" alt="libelula">

            </div>
        </div>
        <div class="credencial2">
            <div class="logos">
                <img class="gobierno" src="{{asset('imagen/gobierno.png')}}" alt="gobierno" style="float: left-50px;">
                <img class="teschi" src="{{asset('imagen/teschi.gif')}}" alt="teschi" style="float: left; margin: 0px;">
                <img class="tecnm" src="{{asset('imagen/tec.png')}}" alt="tecnm" style="float: left; margin: 0px; margin-left: 5px;">
                <img class="libelula" src="{{asset('imagen/libelula.gif')}}" alt="libelula" style="float: right; margin-right: -50px;">

            </div>
        </div>
</body>

</html>