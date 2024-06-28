angular.module('statisticApp', [])
  .controller('yearlyCtrl',['$scope','$http', function($scope,$http) {
                $scope.temp_sum =0.00;
                 $scope.senddata = function () {
                    //alert(555);
                    $http({
                        method: 'post',
                        url: "./year_result_adl.php",
                        data: '',
                        headers: { "Content-type": "application/x-www-form-urlencoded" }
                    }).then(
                        function (A) {
                            $scope.bo = A.data;
                            const chart_label = [];
                            const chart_value = [];
                            angular.forEach($scope.bo , (v,k) => {
                                $scope.temp_sum += parseFloat(v.amout);
                                chart_label.push(v.Resualt_ADL);
                                chart_value.push(parseFloat(v.amout));
                            });
                            const ctx = document.getElementById('myChart');

                            new Chart(ctx, {
                                type: "bar",
                                data: {
                                labels: chart_label,
                                datasets: [{
                                    label: 'จำนวน',
                                    data: chart_value,
                                    borderWidth: 1
                                }]
                                },
                                options: {
                                scales: {
                                    y: {
                                    beginAtZero: true
                                    }
                                }
                                }
                            });
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