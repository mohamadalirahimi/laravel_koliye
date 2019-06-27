<div ng-controller="RecordController">
    <div class="row">
        <div class="col">
            <div class="card min-h-400">
                <div class="card-header text-center">
                    ثبت نام بیمار</div>
                <div class="card-body">
                    <form ng-submit="submit()" class="form-inline" >
                        <div class="tg-wrap"><table class="tg">
                                <tr>
                                    <td class="tg-0lax"><div  style="display: flex; align-items: center" class="input-group mb-3">
                                        <h6>نام و نام خانوادگی:  </h6>
                                        <input   type="text" ng-model="name" class="form-control"
                                                 placeholder="نام و نام خانوادگی">
                                        </div>
                                    </td>
                                    <td class="tg-0lax">
                                        <div class="input-group mb-3">
                                            <h6>نام پدر:</h6>
                                            <input type="text" ng-model="fathers_name" class="form-control"
                                                   placeholder="نام پدر"
                                                   aria-label="نام پدر">
                                        </div>
                                    </td>
                                    <td class="tg-0lax"> <div class="input-group mb-3">
                                            <h6>کد ملی:</h6>
                                            <input type="text" ng-model="national_code" class="form-control"
                                                   placeholder="کد ملی"
                                                   aria-label="کد ملی">
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="tg-0lax"> <div class="input-group mb-3">
                                            <h6>پزشک:</h6>
                                            <input type="text" ng-model="doctor" class="form-control"
                                                   placeholder="پزشک"
                                                   aria-label="پزشک">
                                        </div></td>
                                    <td class="tg-0lax">   <div class="input-group mb-3">
                                            <h6>شماره پرونده:</h6>
                                            <input type="text" ng-model="id_file" class="form-control"
                                                   placeholder="شماره پرونده"
                                                   aria-label="شماره پرونده">
                                        </div></td>
                                    <td class="tg-0lax">        &nbsp;&nbsp;&nbsp;
                                        <div class="input-group mb-3">
                                            <h6>تحت پوشش:</h6>
                                            <select ng-model="sickness_type">
                                                placeholder="نحت پوشش"
                                                aria-label="تحت پوشش"
                                                <option value="کمیته امداد">کمیته امداد</option>
                                                <option value="بهزیستی">بهزیستی</option>

                                                <input type="text" ng-model="sickness_type" class="form-control"
                                                       placeholder="سایر"
                                                       aria-label="سایر">
                                            </select>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="tg-0lax">       <div class="input-group mb-3">
                                            <h6>نوع بیمه:</h6>
                                            <select ng-model="insurance_type">
                                                placeholder="نوع بیمه"
                                                aria-label="نوع بیمه"
                                                <option value="خدمات درمانی">خدمات درمانی</option>
                                                <option value="نیروهای مصلح">نیروهای مصلح</option>
                                                <option value="تامین اجتماعی">تامین اجتماعی</option>
                                            </select>
                                            <input type="text" ng-model="insurance_type" class="form-control"
                                                   placeholder="سایر"
                                                   aria-label="سایر">
                                        </div></td>
                                    <td class="tg-0lax">       <div class="input-group mb-3">
                                            <h6>نوع بیماری:</h6>
                                            <select ng-model="insurance">
                                                placeholder="نوع بیماری"
                                                aria-label="نوع بیماری"
                                                <option value="دیالیز خونی">دیالیز خونی</option>
                                                <option value="دیتایز">دیالیز</option>
                                                <option value="پیوند">پیوند</option>
                                                <input type="text" ng-model="insurance" class="form-control"
                                                       placeholder="سایر"
                                                       aria-label="سایر">
                                            </select>
                                        </div></td>
                                    <td class="tg-0lax">    <div class="input-group mb-3">
                                            <h6>تاریخ پیوند:</h6>
                                            <input type="text" ng-model="date_transplant" class="form-control"
                                                   placeholder="تاریخ پیوند"
                                                   aria-label="تاریخ پیوند">
                                        </div></td>
                                    <td class="tg-0lax"> <div class="input-group mb-3">
                                        <h6>بیمارستان پیوند:</h6>
                                        <input type="text" ng-model="transplant_hospital" class="form-control"
                                               placeholder="بیمارستان پیوند"
                                               aria-label="بیمارستات پیوند">
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="tg-0lax"> <div class="input-group mb-3">
                                            <h6>پزشک پیوند:</h6>
                                            <input type="text" ng-model="transplant_doctor" class="form-control"
                                                   placeholder="پزشک پیوند"
                                                   aria-label="پزشک پیوند">
                                        </div></td>

                                    <td class="tg-0lax"><div class="input-group mb-3">
                                            <h6>داروهای مصرفی:</h6>
                                            <input type="text" ng-model="drug" class="form-control"
                                                   placeholder="دارو های مصرفی"
                                                   aria-label="دارو های مصرفی">
                                        </div>&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td class="tg-0lax">  <div class="input-group mb-3">
                                            <h6>آدرس منزل:</h6>
                                            <input type="text" ng-model="home_adres" class="form-control"
                                                   placeholder="آدرس منزل"
                                                   aria-label="آدرس منزل">
                                        </div>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="tg-0lax"><div class="input-group mb-3">
                                            <h6>آدرس محل کار:</h6>
                                            <input type="text" ng-model="work_adres" class="form-control"
                                                   placeholder="آدرس محل کار"
                                                   aria-label="آدرس محل کار">
                                        </div>
                                    </td>
                                    <td class="tg-0lax"> <div class="input-group mb-3">
                                            <h6>تلفن منزل:</h6>
                                            <input type="text" ng-model="home_phone" class="form-control"
                                                   placeholder="تلفن منزل"
                                                   aria-label="تلفن منرل">
                                        </div>&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td class="tg-0lax"><div class="input-group mb-3">
                                            <h6>تلفن محل کار:</h6>
                                            <input type="text" ng-model="work_phone" class="form-control"
                                                   placeholder="تلفن محل کار"
                                                   aria-label="تلفن محل کار">
                                        </div>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="tg-0lax"> <div class="input-group mb-3">
                                            <h6>همراه:</h6>
                                            <input type="text" ng-model="cellphone" class="form-control"
                                                   placeholder="همراه"
                                                   aria-label="همراه">
                                        </div></td>
                                    <td class="tg-0lax"><div class="input-group mb-3">
                                            <h6>تلفن ضروری:</h6>
                                            <input type="text" ng-model="required_phone" class="form-control"
                                                   placeholder="تلفن ضروری"
                                                   aria-label="تلفن ضروری">
                                        </div>&nbsp;&nbsp;&nbsp;</td>
                                    <td class="tg-0lax"><div class="input-group mb-3">
                                            <h6>شماره حساب: </h6>
                                            <input type="text" ng-model="account_number" class="form-control"
                                                   placeholder="شماره حساب"
                                                   aria-label="شماره حساب">
                                        </div></td>
                                </tr>

                            </table><div class="input-group-append">
                            <button class="btn btn-primary" type="submit"
                                    id="button-addon2">ثبت
                            </button>
                        </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
