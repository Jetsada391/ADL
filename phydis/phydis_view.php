<!DOCTYPE html>
<html lang="en" ng-app="ajboapp">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"crossorigin="anonymous"></script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css" /> -->

  <!-- angularjs -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
  <script src="phydis.js"></script>


  <!-- Data Table -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

  <title>ความพิการ</title>
  <style>
    body {
      /* background-color: #dafafa; */
      background: linear-gradient(to right, #dafafa, #db93e8);

    }
  </style>
</head>

<body ng-controller="chronic_crt">
  <?php include_once('../menu.php');?>
  <h1 class="text-center mt-4">ตารางแสดงรายการความพิการ</h3>

 <div class="container">
  <form ng-submit="getdata()">
    <div class="row mb-3">
      <label for="inputEmail3" class="col-form-label">กรอกเพื่อค้นหา</label>
      <div class="col-md-7 d-flex">
        <input type="text" class="form-control" id="inputEmail3" ng-model="f.nah" />
        <button type="submit" class="btn btn-primary mx-2">ค้นหา</button>
      </div>
    </div> 
  </form>
 </div>

 <div class="container">
  <div class="table-responsive-md">
    <table id="table-sample" class="table table-striped table-hover" ng-init="getdata()">
      <thead>
        <tr>
          <th scope="col">IDCard</th>
          <!-- <th scope="col">PhydisID</th> -->
          <th scope="col">ปี</th>
          <th scope="col">ความพิการ</th>
          <th scope="col">Manage</th>
        </tr>
      </thead>
      <tbody>
        <!-- Your table body content -->
        <tr ng-repeat="i in aaa">
          <td>{{i.IDCard}}</td>
          <!-- <td>{{i.PhydisID}}</td> -->
          <td>{{i.ID_Year}}</td>
          <td>{{i.Phydis_Name}}</td>
          <td>
            <button class="btn btn-danger" ng-click="confirm_del(i)">
              ลบ
            </button>
            <button class="btn btn-warning" ng-click="upse(i.IDCard)">
              แก้ไข
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  
  
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
    เพิ่มรายการใหม่
  </button>
 </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">
            เพิ่มรายการใหม่
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- insert -->
          <form ng-submit="senddata()">
            <div class="row mb-3">
              <label for="input1" class="col-sm-2 col-form-label">IDCard</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input1" ng-model="f.a">
              </div>
            </div>
            <div class="row mb-3">
              <label for="input2" class="col-sm-2 col-form-label">PhydisID</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input2" ng-model="f.b">
              </div>
            </div>
            <div class="row mb-3">
              <label for="input2" class="col-sm-2 col-form-label">ID_Year</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input2" ng-model="f.c">
              </div>
            </div>
            

            <div class="row mb-3">
              <div class="col-sm-10 offset-sm-2"></div>
            </div>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
              บันทึก
            </button>
          </form>

          <!-- insert -->
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">{{bobo}}</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="xyz" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="xyzLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h1>แก้ไขข้อมูล</h1>
          <form ng-submit="update()">
            <div class="row mb-3">
              <label for="input1" class="col-sm-2 col-form-label">IDCard</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" readonly="readonly" id="input1" ng-model="xyz.IDCard"
                  disabled />
              </div>
            </div>
            <div class="row mb-3">
              <label for="input2" class="col-sm-2 col-form-label">PhydisID</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input2" ng-model="xyz.PhydisID" />
              </div>
            </div>
            <div class="row mb-3">
              <label for="input3" class="col-sm-2 col-form-label">ID_Year</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input3" ng-model="xyz.ID_Year" />
              </div>
            </div>
            

            <div class="row mb-3">
              <div class="col-sm-10 offset-sm-2"></div>
            </div>
            <button type="button" class="btn btn-warning" data-bs-dismiss="modal" aria-label="Close">
              ยกเลิก
            </button>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
              บันทึก
            </button>
          </form>
        </div>
        <div class="modal-footer"></div>
      </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="checkdel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{del.IDCard}}<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" ng-click="deldata(del.IDCard)">  Confirm </button>
      </div>
    </div>
  </div>
</div>
</body>

</html>