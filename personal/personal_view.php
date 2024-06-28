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
  <script src="personal_info2.js"></script>


  <!-- Data Table -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

  <title>ทะเบียนผู้สูงอายุ</title>
  <style>
    body {
      /* background-color: #dafafa; */
      background: linear-gradient(to right, #dafafa, #db93e8);

    }
  </style>
</head>

<body ng-controller="chronic_crt">
  <?php include_once('../menu.php');?>
  
<h1 class="text-center mt-4">ทะเบียนผู้สูงอายุ</h3>

 <div class="container">
  <form ng-submit="getdata()">
    <div class="row mb-3">
      <label for="inputEmail3" class="col-form-label">กรอกเพื่อค้นหา</label>
      <div class="col-md-7 d-flex">
        <input type="text" class="form-control" id="inputEmail3" ng-model="f.nah" />
        <button type="submit" class="btn btn-primary mx-2">ค้นหา</button>
      </div>
    </div> 
     <!-- Button trigger modal box-->
  <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#exampleModal" ng-click="box()">
    เพิ่มรายการใหม่
  </button>
 </div>
  </form>
 </div>

 <div class="container">
  <div class="table-responsive-md">
    <table id="table-sample" class="table table-striped table-hover" ng-init="getdata()">
      <thead>
        <tr>
          <th scope="col">เลขบัตรประชาชน</th>
          <th scope="col" class="col-md-2">ชื่อ-สกุล</th>
          <th scope="col">บ้านเลขที่</th>
          <th scope="col">หมู่ที่</th>
          <!-- <th scope="col">ตำบล</th>
          <th scope="col">อำเภอ</th>
          <th scope="col">จังหวัด</th> -->
          <th scope="col">โทรศัพท์</th>
          <!-- <th scope="col">รหัสสถานภาพการสมรส</th> -->
          <th scope="col">สถานภาพ</th>
          <!-- <th scope="col">รหัสระดับการศึกษาสูงสุด</th> -->
          <th scope="col">ระดับการศึกษา</th>
          <!-- <th scope="col">รหัสรายได้เฉลี่ยต่อเดือน</th> -->
          <!-- <th scope="col">รายได้เฉลี่ยต่อเดือน</th> -->
          <th scope="col">การจัดการ</th>
        </tr>
      </thead>
      <tbody>
        <!-- Your table body content -->
        <tr ng-repeat="i in alltype">
          <td>{{i.IDCard}}</td>
          <td>{{i.Name}}</td > 
          <td>{{i.Num_Home}}</td>
          <td>{{i.Moo}}</td>
          <!-- <td>{{i.Tb}}</td>
          <td>{{i.Amp}}</td>
          <td>{{i.Prov}}</td> -->
          <td>{{i.Phone}}</td>
          <!-- <td>{{i.Status}}</td> -->
          <td>{{i.Status_name}}</td>
          <!-- <td>{{i.Edu}}</td> -->
          <td>{{i.Edu_name}}</td>
          <!-- <td>{{i.Income}}</td> -->
          <!-- <td>{{i.incomename}}</td> -->
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
  </div>
  
 


  <!-- Modal เพิ่มข้อมูล-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <style>
  .modal-content {
    width: 600px; /* กำหนดความกว้างของ Modal เป็น 800px */
    /*height: 850px;  กำหนดความสูงของ Modal เป็น 600px */
  }
</style>
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">
            เพิ่มรายการใหม่
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- insert -->

          <h1>เพิ่มรายการใหม่</h1>
          <form ng-submit ="senddata()">
            <div class="row mb-3">
              <label for="input1" class="col-sm-2 col-form-label">เลขบัตรประชาชน</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input1" ng-model="f.a">
              </div>
            </div>
            <div class="row mb-3">
              <label for="input2" class="col-sm-2 col-form-label">คำนำหน้า ชื่อ สกุล</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input2" ng-model="f.b">
              </div>
            </div>
            <div class="row mb-3">
              <label for="input2" class="col-sm-2 col-form-label">บ้านเลขที่</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input2" ng-model="f.c">
              </div>
            </div>
            <div class="row mb-3">
              <label for="input2" class="col-sm-2 col-form-label">หมู่ที่</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input2" ng-model="f.d">
              </div>
            </div>
            <div class="row mb-3">
              <label for="input2" class="col-sm-2 col-form-label">ตำบล</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input2" ng-model="f.e">
              </div>
            </div>
            <div class="row mb-3">
              <label for="input2" class="col-sm-2 col-form-label">อำเภอ</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input2" ng-model="f.f">
              </div>
            </div>
            <div class="row mb-3">
              <label for="input2" class="col-sm-2 col-form-label">จังหวัด</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input2" ng-model="f.g">
              </div>
            </div>
            <div class="row mb-3">
              <label for="input2" class="col-sm-2 col-form-label">โทรศัพท์</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input2" ng-model="f.h" >
              </div>
            </div>
            <!-- bobobo -->
            <div class="row mb-3">
              <label for="input2" class="col-sm-2 col-form-label">สถานภาพ</label>
              <div class="col-sm-10">
                
                <span  class="nullable">
                  <select ng-model="f.i" >
                    <option value="">-- ตัวเลือก --</option>
                    <option ng-repeat="i in statuslist" value="{{i.situID}}">{{i.Situ_Name}}</option>
                  </select>
                </span>
                <div class="row mb-3" ng-show="f.i==100">
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="input2" ng-model="f.i100" >
                  </div>
              </div>
            </div>
            <!-- bobobo -->
            <div class="row mb-3" >
              <label for="input2" class="col-sm-2 col-form-label">การศึกษา</label>
              <div class="col-sm-10">
                <span  class="nullable">
                  <select ng-model="f.j" >
                    <option value="">-- ตัวเลือก --</option>
                    <option ng-repeat="i in educationlist" value="{{i.Edu_ID}}">{{i.Edu_name}}</option>
                  </select>
                </span>
                <div class="row mb-3" ng-show="f.j==100">
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="input2" ng-model="f.j100" >
                  </div>
              </div>
            </div>
              </div>
            </div>
            <div class="row mb-3">
              <label for="input2" class="col-sm-2 col-form-label">รายได้</label>
              <div class="col-sm-10">
                <span  class="nullable">
                  <select ng-model="f.k" >
                    <option value="">-- ตัวเลือก --</option>
                    <option ng-repeat="i in incomelist" value="{{i.income_ID}}">{{i.incomename}}</option>
                  </select>
                </span>
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

  <!-- Modal แก้ไชข้อมูล-->
  <div class="modal fade" id="xyz" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="xyzLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h1>แก้ไขข้อมูลผู้สูงอายุ</h1>
          <form ng-submit="update()">
            <div class="row mb-3">
              <label for="input1" class="col-sm-2 col-form-label">IDCard</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" readonly="readonly" id="input1" ng-model="xyz.IDCard"
                  disabled />
              </div>
            </div>
            <div class="row mb-3">
              <label for="input2" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input2" ng-model="xyz.Name" />
              </div>
            </div>
            <div class="row mb-3">
              <label for="input3" class="col-sm-2 col-form-label">Num_Home</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input3" ng-model="xyz.Num_Home" />
              </div>
            </div>
            <div class="row mb-3">
              <label for="input4" class="col-sm-2 col-form-label">Moo</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input3" ng-model="xyz.Moo" />
              </div>
            </div>
            <div class="row mb-3">
              <label for="input4" class="col-sm-2 col-form-label">Tb</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input3" ng-model="xyz.Tb" />
              </div>
            </div>
            <div class="row mb-3">
              <label for="input4" class="col-sm-2 col-form-label">Amp</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input3" ng-model="xyz.Amp" />
              </div>
            </div>
            <div class="row mb-3">
              <label for="input4" class="col-sm-2 col-form-label">Prov</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input3" ng-model="xyz.Prov" />
              </div>
            </div>
            <div class="row mb-3">
              <label for="input4" class="col-sm-2 col-form-label">Phone</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input3" ng-model="xyz.Phone" />
              </div>
            </div>
            <div class="row mb-3">
              <label for="input4" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input3" ng-model="xyz.Status" />
              </div>
            </div>
            <div class="row mb-3">
              <label for="input4" class="col-sm-2 col-form-label">Edu</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input3" ng-model="xyz.Edu" />
              </div>
            </div>
            <div class="row mb-3">
              <label for="input4" class="col-sm-2 col-form-label">Income</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input3" ng-model="xyz.Income" />
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">กรุณายืนยันการลบข้อมูล</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        เลขบัตรประชาชน: {{del.IDCard}}<br>
        ชื่อ-สกุล: {{del.Name}}<br>
        บ้านเลขที่: {{del.Num_Home}} หมู่ที่: 
        {{del.Moo}}<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">ยกเลิก</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" ng-click="deldata(del.IDCard)">  ยืนยันการลบ </button>
      </div>
    </div>
  </div>
</div>
</body>

</html>