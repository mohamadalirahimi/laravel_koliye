<div ng-controller="SupportController">
    {{--<style>--}}
        {{--table, td, th {--}}
            {{--border: 1px solid #ddd;--}}
            {{--text-align:center;--}}
        {{--}--}}

        {{--table {--}}
            {{--border-collapse: collapse;--}}
            {{--width: 100%;--}}
        {{--}--}}

        {{--th, td {--}}
            {{--padding: 15px;--}}
        {{--}--}}
    {{--</style>--}}
    <div class="card">
        <div align="center" class="card-header" style="background-color: #ededed !important;">نمایش کمک ها</div>
        <table class="table table-bordered table-responsive-md">
        <tbody>
            <thead class="thead-dark">
            <tr>

                <th scope="row">کد ثبت</th>
                <th>نهاد حمایتی</th>
                <th>نوع حمایت</th>
                <th>مبلغ</th>
                <th>تاریخ</th>
                <th>کد بیمار</th>

                <th class="table-buttons">
                    عملیات
                </th>
            </tr>
            </thead>
        <tr ng-repeat="support in supports track by $index">
            <th scope="row">@{{support.id}}</th>
            <td>@{{support.helper}}</td>
            <td>@{{support.typeofhelp}}</td>
            <td>@{{support.amount}}</td>
            <td>@{{support.date}}</td>
            <td>@{{support.patient_id}}</td>

            <td class="table-buttons">
                <button confirmed-click="delete(support.id)" ng-confirm-click="از حذف این مورد مطمئن هستید ؟"
                        class="btn btn-outline-danger btn-sm"
                        data-title="Delete" data-toggle="modal"
                        data-target="#delete" title="حذف"><i
                            class="fas fa-trash"></i>
                </button>
                <a href="/support/@{{support.id}}/edit">
                    <button confirmed-click="edit(support.id)"
                            class="btn btn-outline-danger btn-sm"
                            data-title="edit" data-toggle="modal"
                            title="ویرایش"><i
                                class="fas fa-edit"></i>
                    </button>
                </a>
            </td>
        </tr>
        </tbody>
    </table>

        <span class="total-amount">@{{ total }}</span>
    </div>
</div>