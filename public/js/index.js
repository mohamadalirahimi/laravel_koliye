var app = angular.module('ToDoApp', []);

app.directive('ngConfirmClick', [
    function () {
        return {
            link: function (scope, element, attr) {
                var msg = attr.ngConfirmClick || "Are you sure?";
                var clickAction = attr.confirmedClick;
                element.bind('click', function (event) {
                    if (window.confirm(msg)) {
                        scope.$eval(clickAction)
                    }
                });
            }
        };
    }]);

app.controller('MainController', function ($scope) {
    $scope.tabs = {

        'patientTab': false,
        'categoryTab': false,
        'showTab': false,
        'editTab': false,
        'supportTab': false,
        'showsupportTab': false,
        'lettersTab': false,
        'showlettersTab': false,
    };
    $scope.changeTab = function (tab) {
        angular.forEach($scope.tabs, function (key, value) {
            $scope.tabs[value] = false;
        });
        angular.forEach($scope.tabs, function (key, value) {
            if (value === tab) {
                $scope.tabs[tab] = true;
            }
        });
    }
});


app.controller('RecordController', function ($scope, $http) {
    $scope.name = '';
    $scope.fathers_name = '';
    $scope.national_code = '';
    $scope.doctor = '';
    $scope.id = '';
    $scope.sickness_type = '';
    $scope.insurance_type = '';
    $scope.insurance = '';
    $scope.date_transplant = '';
    $scope.transplant_hospital = '';
    $scope.transplant_doctor = '';
    $scope.drug = '';
    $scope.home_adres = '';
    $scope.work_adres = '';
    $scope.home_phone = '';
    $scope.work_phone = '';
    $scope.cellphone = '';
    $scope.required_phone = '';
    $scope.account_number = '';
    $scope.patients = [];
    $scope.res = '';
    $scope.submit = function () {
        $http.post("http://localhost:8000/api/patiens", {
            name: $scope.name,
            fathers_name: $scope.fathers_name,
            national_code: $scope.national_code,
            doctor: $scope.doctor,
            id: $scope.id,
            sickness_type: $scope.sickness_type,
            insurance_type: $scope.insurance_type,
            insurance: $scope.insurance,
            date_transplant: $scope.date_transplant,
            transplant_hospital: $scope.transplant_hospital,
            transplant_doctor: $scope.transplant_doctor,
            drug: $scope.drug,
            home_adres: $scope.home_adres,
            work_adres: $scope.work_adres,
            home_phone: $scope.home_phone,
            work_phone: $scope.work_phone,
            cellphone: $scope.cellphone,
            required_phone: $scope.required_phone,
            account_number: $scope.account_number
        })
            .then(
                function successCallback(response) {
                    alert('اطلاعات با موفقیت ثبت شد');
                    $window.location.href = "https://www.google.com";
                },
                function errorCallback(response) {
                    console.log(response.data);
                }
            );
    };
    $scope.getData = function () {
        $http.get("http://localhost:8000/api/patients/")
            .then(
                function successCallback(response) {
                    $scope.patients = response.data;

                },
                function errorCallback(response) {
                    console.log(response.data);
                }
            );
    };
    $scope.getData();


    $scope.showData = function () {
        $http.get("http://localhost:8000/api/patients/" + $scope.id)
            .then(
                function successCallback(response) {
                    $scope.name = response.data.name,
                        $scope.fathers_name = response.data.fathers_name,
                        $scope.national_code = response.data.national_code,
                        $scope.doctor = response.data.doctor,
                        $scope.id = response.data.id,
                        $scope.sickness_type = response.data.sickness_type,
                        $scope.insurance_type = response.data.insurance_type,
                        $scope.insurance = response.data.insurance,
                        $scope.date_transplant = response.data.date_transplant,
                        $scope.transplant_hospital = response.data.transplant_hospital,
                        $scope.transplant_doctor = response.data.transplant_doctor,
                        $scope.drug = response.data.drug,
                        $scope.home_adres = response.data.home_adres,
                        $scope.work_adres = response.data.work_adres,
                        $scope.home_phone = response.data.home_phone,
                        $scope.work_phone = response.data.work_phone,
                        $scope.cellphone = response.data.cellphone,
                        $scope.required_phone = response.data.required_phone,
                        $scope.account_numbe = response.data.account_numberr
                },
                function errorCallback(response) {
                    console.log(response.data);
                }
            );
    };
    $scope.showData();

    $scope.edit = function () {
        $http.put("http://localhost:8000/api/patients", {
            name: $scope.name,
            fathers_name: $scope.fathers_name,
            national_code: $scope.national_code,
            doctor: $scope.doctor,
            id: $scope.id,
            sickness_type: $scope.sickness_type,
            insurance_type: $scope.insurance_type,
            insurance: $scope.insurance,
            date_transplant: $scope.date_transplant,
            transplant_hospital: $scope.transplant_hospital,
            transplant_doctor: $scope.transplant_doctor,
            drug: $scope.drug,
            home_adres: $scope.home_adres,
            work_adres: $scope.work_adres,
            home_phone: $scope.home_phone,
            work_phone: $scope.work_phone,
            cellphone: $scope.cellphone,
            required_phone: $scope.required_phone,
            account_number: $scope.account_number
        })
            .then(
                function successCallback(response) {
                    $scope.res = (response.data);
                    console.log($scope.res)


                },
                function errorCallback(response) {
                    console.log(response.data);
                }
            );
    };

    $scope.delete = function (id) {
        $http.delete("http://localhost:8000/api/patients/" + id)
            .then(
                function successCallback(response) {
                    $scope.getData()
                },
                function errorCallback(response) {
                    console.log("مشکلی در ارتباط با سرور پیش آمده است");
                }
            );
    };
});

app.controller('LettersController', function ($scope, $http) {
    $scope.text = '';
    $scope.shomare = '';
    $scope.attach= '';
    $scope.date = '';
    $scope.letters = '';
    // $scope.patient_id = '';
    $scope.res = '';

    $scope.submit = function () {
        $http.post("http://localhost:8000/api/letters", {
            text: $scope.text,
            shomare: $scope.shomare,
            attach: $scope.attach,
            date: $scope.date,
        })
            .then(
                function successCallback(response) {
                    $scope.res = (response.data);
                    console.log($scope.res)

                },
                function errorCallback(response) {
                    console.log(response.data);
                }
            );
    };
    $scope.getshowletters = function () {
        $http.get("http://localhost:8000/api/letters")
            .then(
                function successCallback(response) {

                    $scope.letters = response.data;
                },
                function errorCallback(response) {
                    console.log(response.data);
                }
            );
    };


    $scope.getshowletters()
    $scope.delete = function (id) {
        $http.delete("http://localhost:8000/api/letters/" + id)
            .then(
                function successCallback(response) {
                    $scope.getshowletters()


                },
                function errorCallback(response) {
                    console.log(response.data);
                }
            );
    };
});
app.controller('SupportController', function ($scope, $http) {
    $scope.helper = '';
    $scope.amount = '';
    $scope.typeofhelp = '';
    $scope.date = '';
    $scope.patient_id = '';
    $scope.res = '';
    $scope.supports = '';
    $scope.total = 0;
    $scope.submit = function () {
        $http.post("http://localhost:8000/api/supports", {
            helper: $scope.helper,
            amount: $scope.amount,
            typeofhelp: $scope.typeofhelp,
            date: $scope.date,
            patient_id: $scope.patient_id
        })
            .then(
                function successCallback(response) {
                    $scope.res = (response.data);
                    console.log($scope.res)

                },
                function errorCallback(response) {
                    console.log(response.data);
                }
            );
    };
    $scope.edit = function () {
        $http.put("http://localhost:8000/api/supports", {
            helper: $scope.helper,
            amount: $scope.amount,
            typeofhelp: $scope.typeofhelp,
            date: $scope.date,
            patient_id: $scope.patient_id
        })
            .then(
                function successCallback(response) {
                    $scope.res = (response.data);
                    console.log($scope.res)

                },
                function errorCallback(response) {
                    console.log(response.data);
                }
            );
    };

    $scope.getTotal = function() {



        for(count=0;count<$scope.supports.length;count++){
            $scope.total += parseInt($scope.supports[count].amount);
        }

    };

    $scope.getshowsupport = function () {
        $http.get("http://localhost:8000/api/supports")
            .then(
                function successCallback(response) {

                    $scope.supports = response.data;
                    $scope.getTotal();
                },
                function errorCallback(response) {
                    console.log("مشکلی در ارتباط با سرور پیش آمده است");
                }
            );
    };
    $scope.getshowsupport()

    $scope.delete = function (id) {
        $http.delete("http://localhost:8000/api/supports/" + id)
            .then(
                function successCallback(response) {
                    $scope.getshowsupport()


                },
                function errorCallback(response) {
                    console.log("مشکلی در ارتباط با سرور پیش آمده است");
                }
            );
    };
});





