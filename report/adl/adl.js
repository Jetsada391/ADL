angular.module('statisticApp', [])
    .controller('statisticApp', ['$scope', '$http', function ($scope, $http) {
        $scope.temp_sum = 0.00;
        var xx = null;
        $scope.senddata = function () {
            //alert(555);
            $http({
                method: 'post',
                url: "./adl1.php",
                data:  $scope.f,
                headers: { "Content-type": "application/x-www-form-urlencoded" }
            }).then(
                function (A) {
                    $scope.bo = A.data;
                    $scope.temp_sum = 0.00;

                    angular.forEach($scope.bo, function (value, key) {
                        $scope.temp_sum += parseInt(value.amount);
                    });
                    console.log($scope.temp_sum);

                    var adl = $scope.bo.map(function (item) {

                        return item.Resualt_ADL;

                    });


                    var amountArray = $scope.bo.map(function (item) {
                        if (item.Moo == 4) {
                            return item.amount;
                        }else {return 0;
                        }
                    });


                    var amountArray2 = $scope.bo.map(function (item) {
                        if (item.Moo == 5) {
                            return item.amount;
                        }else {return 0;
                        }
                    });

                    var amountArray3 = $scope.bo.map(function (item) {
                        if (item.Moo == 6) {
                            return item.amount;
                        }else {return 0;
                        }
                    });

                    var amountArray4 = $scope.bo.map(function (item) {
                        if (item.Moo == 8) {
                            return item.amount;
                        }else {return 0;
                        }
                    });

                    var amountArray5 = $scope.bo.map(function (item) {
                        if (item.Moo == 9) {
                            return item.amount;
                        }else {return 0;
                        }
                    });

                    var amountArray6 = $scope.bo.map(function (item) {
                        if (item.Moo == 11) {
                            return item.amount;
                        }else {return 0;
                        }
                    });

                    var amountArray7 = $scope.bo.map(function (item) {
                        if (item.Moo == 13) {
                            return item.amount;
                        }else {return 0;
                        }
                    });

                    var amountArray8 = $scope.bo.map(function (item) {
                        if (item.Moo == 15) {
                            return item.amount;
                        }else {return 0;
                        }
                    });

                    var amountArray9 = $scope.bo.map(function (item) {
                        if (item.Moo == 17) {
                            return item.amount;
                        }else {return 0;
                        }
                    });
                   

                    const ctx = document.getElementById('myChart');
                    if (xx != null) {
                        xx.destroy();
                      }
                     xx =new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: adl,
                            datasets: [
                                {

                                    maxBarThickness: 8,
                                    label: 'หมู๋ที่4',
                                    data: amountArray,
                                    backgroundColor: [
                                        'rgb(0, 0, 255,0.5)',
                                    ],
                                    borderWidth: 1
                                },
                                {
                                    label: 'หมู๋ที่5',
                                    data: amountArray2,
                                    backgroundColor: [
                                        'rgb(51, 204, 255,0.5)'
                                    ],
                                    borderWidth: 1
                                },
                                {
                                    label: 'หมู๋ที่6',
                                    data: amountArray3,
                                    backgroundColor: [

                                        '	rgb(102, 255, 153,0.5)',

                                    ],
                                    borderWidth: 1
                                },
                                {
                                    label: 'หมู๋ที่8',
                                    data: amountArray4,
                                    backgroundColor: [

                                        '	rgb(255, 255, 102,0.5)',
                                    ],
                                    borderWidth: 1
                                },
                                {
                                    label: 'หมู๋ที่9',
                                    data: amountArray5,
                                    backgroundColor: [

                                        '	rgb(153, 153, 102,0.5)',
                                    ],
                                    borderWidth: 1
                                },
                                {
                                    label: 'หมู๋ที่11',
                                    data: amountArray6,
                                    backgroundColor: [

                                        '	rgb(204, 102, 153,0.5)',
                                    ],
                                    borderWidth: 1
                                },
                                {
                                    label: 'หมู๋ที่13',
                                    data: amountArray7,
                                    backgroundColor: [

                                        '	rgb(255, 0, 102,0.5)',
                                    ],
                                    borderWidth: 1
                                },
                                {
                                    label: 'หมู๋ที่15',
                                    data: amountArray8,
                                    backgroundColor: [

                                        '	rgb(255, 128, 0,0.5)',
                                    ],

                                    borderWidth: 1
                                },

                                {
                                    label: 'หมู๋ที่17',
                                    data: amountArray9,
                                    backgroundColor: [
                                        'rgb(102, 51, 0,0.5)',
                                    ],
                                    borderWidth: 1
                                }
                            ]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    // max: 5,



                                },

                            }

                        }
                    });

                    // new Chart(ctx, {
                    //     type: 'bar',
                    //     data: {
                    //         labels: mooArray,
                    //         datasets: nameADLArray.map((adl, index) => {
                    //             return {
                    //                 label: adl,
                    //                 data: [amountArray[index]], // สร้างอาร์เรย์ข้อมูลเพียงชุดเดียวสำหรับแต่ละ label
                    //                 backgroundColor: [
                    //                     'rgba(266, 99, 143, 0.5)',
                    //                     'rgba(106, 90, 205, 0.5)',
                    //                     'rgba(415, 192, 192, 0.5)',
                    //                     'rgba(255, 130, 255, 0.5)',
                    //                 ],
                    //                 borderWidth: 1
                    //             };
                    //         })
                    //     },
                    //     options: {
                    //         scales: {
                    //             y: {
                    //                 beginAtZero: true
                    //             }
                    //         }
                    //     }
                    // });
                    //  console.log(A.data);
                },
                function (B) {
                    // console.log(B.data);
                }
            );
        }

    }]);

/*
Copyright 2024 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at https://angular.io/license
*/


