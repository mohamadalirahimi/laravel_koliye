<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
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
<body ng-app="ToDoApp" class="hold-transition sidebar-mini"
      ng-controller="MainController">
<div class="wrapper">
    @include('layouts/navbar')
    @include('layouts/sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content" id="main-content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="container-fluid">
                        <div class="animated fadeIn">
                            <div class="row">
                                <div class="container" ng-if="tabs['patientTab'] == true">
                                    @include('layouts/controller-patients')
                                </div>
                                <div class="container" ng-if="tabs['categoryTab'] == true">
                                    @include('layouts/controller-category')
                                </div>
                                <div class="container" ng-if="tabs['showTab'] == true">
                                    @include('layouts/controller-show')
                                </div>
                                <div class="container" ng-if="tabs['editTab'] == true">
                                    @include('layouts/controller-edit')
                                </div>

                                <div class="container" ng-if="tabs['supportTab'] == true">
                                    @include('layouts/controller-support')
                                </div>
                                <div class="container" ng-if="tabs['showsupportTab'] == true">
                                    @include('layouts/controller-showsupport')
                                </div>
                                <div class="container" ng-if="tabs['lettersTab'] == true">
                                    @include('layouts/controller-letters')
                                </div>
                                <div class="container" ng-if="tabs['showlettersTab'] == true">
                                    @include('layouts/controller-showletters')
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</div>

<script src="{{ URL::asset('js/angular.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ URL::asset('js/adminlte.min.js') }}"></script>
<script src="{{ URL::asset('js/index.js') }}"></script>
<script src="{{ URL::asset('js/persian-date.min.js') }}"></script>
<script src="{{ URL::asset('js/persian-datepicker.min.js') }}"></script>
</body>
</html>
