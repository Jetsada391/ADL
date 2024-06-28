angular.module('statisticApp', [])
    .controller('statisticApp', ['$scope', '$http', function ($scope, $http) {
        $scope.temp_sum = 0.00;
        $scope.defaultMoo = '0';
        var xx = null;
        $scope.senddata = function () {
            //alert(555);
            $http({
                method: 'post',
                url: "./report.php",
                data: $scope.f,
                headers: { "Content-type": "application/x-www-form-urlencoded" }
            }).then(
                function (A) {
                    $scope.bo = A.data;
                    $scope.temp_sum = 0.00;

                    angular.forEach($scope.bo, function (value, key) {
                        $scope.temp_sum += parseInt(value.amout);

                    });

    
                    console.log('Check sum: '+$scope.temp_sum);
                    console.log($scope.f)

                    var mooArray = $scope.bo.map(function (item) {
                        return item.Moo;//return 'หมู่ที่'+item.moo;

                    });

                    // console.log(mooArray)

                    var amountArray = $scope.bo.map(function (item) {
                        if (item.Resualt_ADL == 'ติดบ้าน') {
                                 
                            return item.amout;
                        }else {return 0;
                        }
                    });
                    // console.log(amountArray)

                    

                    var amountArray2 = $scope.bo.map(function (item) {
                        if (item.Resualt_ADL == 'ติดสังคม') {
                            return item.amout;
                            
                        }else {return 0;
                        }
                    });
 
                    // console.log(amountArray4);

                    var amountArray3 = $scope.bo.map(function (item) {
                        if (item.Resualt_ADL == 'ติดเตียง') {
                            return item.amout;
                        }else {return 0;
                        }
                    });
                  
                    // console.log(amountArray3);
                    $scope.Chartdata =[];
                    mooArray.forEach((element,index) => {
                       $scope.Chartdata[index] = [element[index],amountArray[index],amountArray2[index],amountArray3[index]];
                        console.log(element[index],amountArray[index],amountArray2[index],amountArray3[index]);
                    });
                 //   console.log(Chartdata);
                  //  $scope.Chartdata=[mooArray,amountArray,amountArray2,amountArray3];

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
                                    label: 'ติดสังคม',
                                    data: amountArray2,
                                    backgroundColor: [
                                        'rgb(0, 255, 0,0.5)'

                                        

                                    ],
                                    borderWidth: 1
                                },
                                {


                                    label: 'ติดบ้าน',
                                    data: amountArray,
                                    backgroundColor: [
                                        'rgb(255, 255, 0,0.5)'

                                    ],
                                    borderWidth: 2,
                                    
                                },
                                {
                                   
                                    label: 'ติดเตียง',
                                    data: amountArray3,
                                    backgroundColor: [
                                        'rgb(255, 0, 0,0.5)'
                                        

                                        
                                    ],
                                    borderWidth: 1
                                } 
                                
                            ]
                        },
                        options: {
                            legend: {display: false},

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


