var app = angular.module("ajboapp", []);
app.controller("views", ['$scope', '$http', '$timeout',
  function ($scope, $http, $timeout) {
    $scope.adlsum = 0.00;

    $scope.senddata = function () {
      // Prepare data

      $scope.adlsum = parseInt($scope.form.adl1) + parseInt($scope.form.adl2) + parseInt($scope.form.adl3) +
        parseInt($scope.form.adl4) + parseInt($scope.form.adl5) + parseInt($scope.form.adl6) +
        parseInt($scope.form.adl7) + parseInt($scope.form.adl8) + parseInt($scope.form.adl9) +
        parseInt($scope.form.adl10);

      if ($scope.adlsum >= 12) {
        $scope.Resualt_ADL = "ไม่เป็นการพึ่งพา";
      } else if ($scope.adlsum >= 9 && $scope.adlsum <= 11) {
        $scope.Resualt_ADL = "ภาวะพึ่งพาป่านกลาง";
      } else if ($scope.adlsum >= 5 && $scope.adlsum <= 8) {
        $scope.Resualt_ADL = "ภาวะพึ่งพารุนแรง";
      } else if ($scope.adlsum < 5) {
        $scope.Resualt_ADL = "ภาวะพึ่งพาโดยสมบูรณ์";
      }


      $http({
        method: 'post',
        url: "view.php",
        data: {
          formData: $scope.form,
          Resualt_ADL: $scope.Resualt_ADL,
          ADLsum: $scope.adlsum
        },
        headers: { "Content-type": "application/x-www-form-urlencoded" }
      }).then(
        function (A) {
          $scope.sum = 0.00;

          var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {
            keyboard: false
          });
          if (A.data == 1) {
            $scope.bobo = "บันทึกสำเร็จ";
          } else {
            $scope.bobo = "บันทึกไม่สำเร็จ";
          }
          myModal.show();
        },
        function (B) { }
      );
    }
    
}]);
