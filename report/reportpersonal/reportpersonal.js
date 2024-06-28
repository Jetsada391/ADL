angular.module('statisticApp', [])
    .controller('statisticApp', ['$scope', '$http', function ($scope, $http) {
        $scope.temp_sum = 0.00;
        $scope.defaultMoo = '0';
        $scope.senddata = function () {
            //alert(555);
            $http({
                method: 'post',
                url: "./reportpersonal.php",
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

                    

                    
                },
                function (B) {
                    // console.log(B.data);
                }
            );
        }

    }]);



