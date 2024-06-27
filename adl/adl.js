var app = angular.module("ajboapp", []);
app.controller("chronic_crt", ['$scope', '$http', '$timeout',
  function ($scope, $http, $timeout) {
    $scope.adlsum = 0.00;

    $scope.senddata = function () {
      // Prepare data
      $scope.adlsum = parseInt($scope.f.adl1) + parseInt($scope.f.adl2) + parseInt($scope.f.adl3) +
        parseInt($scope.f.adl4) + parseInt($scope.f.adl5) + parseInt($scope.f.adl6) +
        parseInt($scope.f.adl7) + parseInt($scope.f.adl8) + parseInt($scope.f.adl9) +
        parseInt($scope.f.adl10);

      if ($scope.adlsum >= 12) {
        $scope.Resualt_ADL = "ติดสังคม";
      } else if ($scope.adlsum >= 5 && $scope.adlsum <= 11) {
        $scope.Resualt_ADL = "ติดบ้าน";
      } else if ($scope.adlsum < 5) {
        $scope.Resualt_ADL = "ติดเตียง";
      }


      $http({
        method: 'post',
        url: "adl_insert.php",
        data: {
          formData: $scope.f,
          Resualt_ADL: $scope.Resualt_ADL
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
    
    $scope.getdata = function () {
      $http({
        method: 'post',
        url: "adl_select.php",
        data: $scope.f,
        headers: { "Content-type": "application/x-www-form-urlencoded" }
      }).then(
        function (A) {
          $('#table-sample').DataTable().destroy();
          $scope.alltype = A.data;          
          $timeout(function(){
            $('#table-sample').DataTable({
              searching:false,
              language:{
                lengthMenu: "แสดง _MENU_ รายการ",
                info: "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
                paginate:{
                  previous:"ก่อนหน้า",
                  next:"ถัดไป"
                }
              }
            });            
          })
          if (A.data == 1) {
            $scope.bobo = "บันทึกสำเร็จ";
          } else {
            $scope.bobo = "บันทึกไม่สำเร็จ";
          }
          myModal.show();
        },

        function (A) { }
      );
    }



    $scope.deldata = function (will_be_deleted) {
      console.log(will_be_deleted)
      $http({
        method: 'post',
        url: "adl_delete.php",
        data: { pn: will_be_deleted },
        headers: { "Content_Type": "application/x-www-form-urlencoded" }

      }).then(
        function (A) {
          var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {
            keyboard: false

          });
          if (A.data == 1) {
            $scope.bobo = "ลบสำเร็จ";
          } else {
            $scope.bobo = "ลบไม่สำเร็จ";
          }
          myModal.show();
          // $scope.getdata();
          window.location.reload();
      
        },

        function (B) {

        }
      );
    }

    $scope.upse = function (will_be) {
      $http({
        method: 'post',
        url: "adl_select_frm_tab2.php",
        data: { nah: will_be },
        headers: { "Content_Type": "application/x-www-form-urlencoded" }

      }).then(
        function (A) {
          $scope.xyz = A.data[0];
          var myModal = new bootstrap.Modal(document.getElementById('xyz'), {
            keyboard: false

          });
          myModal.show();
        },

        function (B) {

        }
      );
    }

    $scope.update = function () {
      $http({
        method: 'post',
        url: "adl_update.php",
        data: $scope.xyz,
        headers: { "Content-type": "application/x-www-form-urlencoded" }
      }).then(
        function (A) {

          var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {
            keyboard: false

          });
          if (A.data == 1) {
            $scope.bobo = "แก้ไขสำเร็จ";
          } else {
            $scope.bobo = "แก้ไขไม่สำเร็จ";
          }
          myModal.show();
          $scope.getdata();
        },

        function (B) {

        }
      );
    }
    $scope.confirm_del = function (param) {
      $scope.del=param
      var myModal = new bootstrap.Modal(document.getElementById('checkdel'), {
        keyboard: false

      });
      myModal.show()

    }

  }]);



