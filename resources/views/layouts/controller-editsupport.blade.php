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

    <title>ToDo List</title>
</head>
<body>
<div>
    <div class="row">
        <div class="col">
            <div class="card min-h-400">
                <div class="card-header text-center">
                    ثبت کمک ها

                </div>
                <form method="POST" action="/support/{{$support->id}}">

                    @method('PUT')
                    @csrf


                    <div>
                        <span style="width: 105px;display: inline-block;">نهاد حمایتی : </span>
                        <input type="text" name="helper" value="{{$support->helper}}"
                               placeholder=" نام نهاد را وارد کنید:"
                        >
                    </div>
                    <br>


                    <div>
                        <span style="width: 105px;display: inline-block;">نوع کمک : </span>
                        <input type="text" name="typeofhelp" value="{{$support->typeofhelp}}"
                               placeholder=" نام نهاد را وارد کنید:"
                        >
                    </div>
                    <br>

                    <div>

                        <span style="width: 105px;display: inline-block;">مبلغ کمکی : </span>
                        <input type="number" name="amount" value="{{$support->amount}}"
                               placeholder="مبلغ را وارد کنید:"
                        >
                    </div>
                    <br>

                    <div>
                        <span style="width: 105px;display: inline-block;">تاریخ : </span>
                        <input type="number" name="date" value="{{$support->date}}"
                               placeholder="تاریخ را وارد کنید:"
                        >

                    </div>
                    <br>

                    <div>
                        <span style="width: 105px;display: inline-block;">کد بیمار : </span>
                        <input type="number" name="patient_id" value="{{$support->patient_id}}"
                               placeholder=" کد بیمار را وارد کنید:"
                        >
                    </div>
                    <br>
                    <div class="input-group-append">
                        <button  style="display: block;margin: 0 auto;width: 188px;background: darkgreen;" class="btn btn-primary" type="submit"
                                 id="button-addon2">ویرایش
                        </button>
                    </div>

                </form>


            </div>
        </div>
    </div>
</div>


</body>

</html>