<div ng-controller="LettersController">

    <div class="card">
        <div align="center" class="card-header" style="background-color: #ededed !important;">نمایش نامه ها</div>
        <table class="table table-bordered table-responsive-md">
            <tbody>
            <thead class="thead-dark">
            <tr>

                <th scope="row">کد نامه</th>
                <th>پیوست</th>
                <th>شماره</th>

                <th>تاریخ</th>
                <th>متن</th>

                <th class="table-buttons">
                    عملیات
                </th>
            </tr>
            </thead>
            <tr ng-repeat="letter in letters track by $index">
                <th scope="row">@{{letter.id}}</th>
                <td>@{{letter.attach}}</td>
                <td>@{{letter.shomare}}</td>
                <td>@{{letter.date}}</td>
                <td>@{{letter.textarea}}</td>


                <td class="table-buttons">
                    <a target="_blank" href='/letter/print?id=@{{letter.id}}'>
                        <button
                                class="btn btn-primary btn-sm"
                                title="مشاهده و پرینت"><i
                                    class="fas fa-print"></i>
                        </button>
                    </a>
                    <button confirmed-click="delete(letter.id)" ng-confirm-click="از حذف این مورد مطمئن هستید ؟"
                            class="btn btn-outline-danger btn-sm"
                            data-title="Delete" data-toggle="modal"
                            data-target="#delete" title="حذف"><i
                                class="fas fa-trash"></i>
                    </button>

                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>