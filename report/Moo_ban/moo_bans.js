angular.module('statisticApp', [])
    .controller('statisticApp', ['$scope', '$http', function ($scope, $http) {
        $scope.temp_sum = 0.00;
        
        var xx = null;
        $scope.senddata = function () {
            //alert(555);
            $http({
                method: 'post',
                url: "./moo_bans.php",
                data: $scope.f,
                headers: { "Content-type": "application/x-www-form-urlencoded" }
            }).then(
                function (A) {
                    $scope.bo = A.data;
                    $scope.temp_sum = 0.00;


                    angular.forEach($scope.bo, function (value, key) {
                        $scope.temp_sum += parseInt(value.amount);
                    });

                    var mooArray = $scope.bo.map(function (item) {
                        return item.moo;//return 'หมู่ที่'+item.moo;

                    });
                    var amountArray = $scope.bo.map(function (item) {
                        if (item.Resualt_ADL == 'ไม่เป็นการพึ่งพา') {
                            return item.amount;
                        }else {return 0;
                        }
                    });
                    

                    var amountArray2 = $scope.bo.map(function (item) {
                        if (item.Resualt_ADL == 'ภาวะพึ่งพาปานกลาง') {
                            return item.amount;
                            
                        }else {return 0;
                        }
                    });
                   
                    console.log(amountArray2);

                    var amountArray3 = $scope.bo.map(function (item) {
                        if (item.Resualt_ADL == 'ภาวะพึ่งพาโดยสมบูรณ์') {
                            return item.amount;
                        }else {return 0;
                        }
                    });
                   
                    console.log(amountArray3);

                    var amountArray4 = $scope.bo.map(function (item) {
                        if (item.Resualt_ADL == 'ภาวะพึ่งพารุนแรง') {
                            return item.amount;
                        }else {return 0;
                        }
                    });
                  
                    console.log(amountArray4);




                    const ctx = document.getElementById('myChart');
                    if (xx != null) {
                        xx.destroy();
                      }

                     xx =new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: mooArray,
                            datasets: [
                                {


                                    label: 'ไม่เป็นการพึ่งพา',
                                    data: amountArray,
                                    backgroundColor: [
                                        'rgb(0, 255, 0,0.5)',

                                    ],
                                    borderWidth: 2
                                },
                                {
                                    label: 'พึ่งพาปานกลาง',
                                    data: amountArray2,
                                    backgroundColor: [

                                        'rgb(255, 255, 0,0.5)'


                                    ],
                                    borderWidth: 1
                                },
                                {
                                    label: 'ภาวะพึ่งพาโดยสมบูรณ์',
                                    data: amountArray3,
                                    backgroundColor: [

                                        '	rgb(255, 128, 0,0.5)',


                                    ],
                                    borderWidth: 1
                                },

                                {
                                    label: 'ภาวะพึ่งพารุนแรง',
                                    data: amountArray4,
                                    backgroundColor: [

                                        'rgb(255, 0, 0,0.5)',

                                    ],
                                    borderWidth: 1
                                }



                            ]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true,
                                }
                            },
                            
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


