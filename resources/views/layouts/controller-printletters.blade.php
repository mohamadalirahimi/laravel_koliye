<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/custom-style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/persian-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.min.css') }}">

    <style>

        .info-item {
            display: block;
        }

        .pcontainer {
            height: 200px;
            position: relative;

        }

        .pvertical-center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 0;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .letter-text .text {
            padding: 53px 0;
            display: block;
            min-height: 400px;
            text-align: justify;
        }

        span.footer-item {
            display: block;
        }

        @page {
            width: 700px;
            height: 993px;
        }

        @media print {
            body {
                width: 700px;
                height: 993px;
            }


        }
    </style>
</head>
<body>


<div class="print-root container" style="width: 700px;height: 993px !important; margin: 50px auto;">

    <div class="print-header pcontainer"
         style="height: 120px; border-bottom: solid; padding-bottom: 8px;margin-bottom: 20px; ">
        <img src="{{asset("images/k-logo.png")}}" class="logo" style="height: 100%;display: inline-block"/>

        <div class="letter-info pvertical-center" style="float: left; text-align: right;">


            <div >
                <span class="info-item">تاریخ :  {{(new Verta($letter->date))->year}}/{{(new Verta($letter->date))->month}}/{{(new Verta($letter->date))->day}} </span>

            </div>

            <span class="info-item">شماره : {{$letter->shomare}}</span>
            <span class="info-item">پیوست : {{$letter->attach}}</span>

        </div>
    </div>

    <div class="letter-text">
        <span class="text">{!!  nl2br(e($letter->textarea)) !!}</span>
    </div>


    <div class="letter-footer">
        <span class="footer-item" style="text-align: left;padding-left: 55px">امضاء</span>
        <span class="footer-item address" style="border-top: solid;padding-top: 15px;margin-top: 60px;">قاین - خیابان امین زاده - درمانگاه جوادالائمه</span>
        <span class="footer-item phone">تلفن : 05632522720</span>

    </div>

</div>

</body>

</html>
