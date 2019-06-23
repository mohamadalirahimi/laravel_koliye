<div ng-controller="RecordController">
    <div class="row">
        <div class="col">
            <div class="card min-h-400">
                <div class="card-header text-center">
                    لیست بیمار ها
                </div>
                <div class="card-body">

                    <div class="container">
                        <table  class="table table-striped" >
                            <thead>
                            <tr>
                                <th>نام و نام خانوادگی</th>
                                <th>شماره پرونده</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="patient in patients">
                                <td> <a class="nav-link" ng-click="changeTab('showTab')" href="#">
                                        <p scope="row"> @{{patient.name}}</p></a></td>

                                <td> @{{patient.id}}</td>
                                <td class="table-buttons">
                                    <button confirmed-click="delete(patient.id)" ng-confirm-click="از حذف این مورد مطمئن هستید ؟"
                                            class="btn btn-outline-danger btn-sm"
                                            data-title="Delete" data-toggle="modal"
                                            data-target="#delete" title="حذف">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <a class="nav-link" ng-click="changeTab('editTab')" href="#">
                                        <button class="btn btn-outline-danger btn-sm"
                                                data-title="edit" data-toggle="modal"
                                                title="ویرایش">
                                            <i class="fas fa-pencil-alt"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
