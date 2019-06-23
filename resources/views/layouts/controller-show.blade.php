<div ng-controller="RecordController">
    <div class="row">
        <div class="col">
            <div class="card min-h-400">
                <div class="card-header text-center">
                    نمایش بیمار
                </div>
                <form ng-submit="showData()" style="width: 70%">
                    <div class="input-group mb-3">
                        <input  type="text" ng-model="id" class="form-control"
                               placeholder="َشماره پرونده را وارد کنید"
                               aria-label="شماره پرونده را وارد کنید">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit"
                                    id="button-addon2">جستجو
                            </button>
                        </div>
                    </div>
                </form>
                <form ng-submit="showDataname()">
                    <div class="input-group mb-3" style="width: 70%">
                        <input type="text" ng-model="name" class="form-control"
                               placeholder="َنام را وارد کنید"
                               aria-label="نام را وارد کنید">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit"
                                    id="button-addon2">جستجو
                            </button>
                        </div>
                    </div>
                </form>
                <div class="card-body">
                    <div>نام و نام خانوادگی  : @{{name}}</div>
                    <div>نام پدر : @{{fathers_name}}</div>
                    <div>کد ملی : @{{national_code}}</div>
                    <div>نام پزشک : @{{doctor}}</div>
                    <div>شماره پرونده: @{{id}}</div>
                    <div>تحت پوشش : @{{sickness_type}}</div>
                    <div>نوع بیمه : @{{insurance_type}}</div>
                    <div>نوع بیمار : @{{insurance}}</div>
                    <div>تاریخ پیوند : @{{date_transplant}}</div>
                    <div>بیمارستان پیوند : @{{transplant_hospital}}</div>
                    <div> پزشک پیوند : @{{transplant_doctor}}</div>
                    <div>دارو های مصرفی : @{{drug}}</div>
                    <div>آدرس منزل : @{{home_adres}}</div>
                    <div>آدرس محل کار : @{{work_adres}}</div>
                    <div>تلفن منزل : @{{home_phone}}</div>
                    <div>تلفن محل کار : @{{work_phone}}</div>
                    <div>همراه : @{{cellphone}}</div>
                    <div>تلفن ضروری : @{{required_phone}}</div>
                    <div>شماره حساب : @{{account_number}}</div>

                </div></div>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit"
                            id="button-addon2">ویرایش
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>