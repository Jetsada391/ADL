<!DOCTYPE html>
<html lang="en" ng-app="ajboapp">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css" /> -->

  <!-- angularjs -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
  <script src="health_info.js"></script>


  <!-- Data Table -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

  <title>ข้อมูลการประเมินสภาวะสุขภาพ</title>
  <style>
    body {
      /* background-color: #dafafa; */
      background: linear-gradient(to right, #dafafa, #db93e8);


    }
  </style>
</head>

<body ng-controller="chronic_crt">
  <?php include_once('../menu.php');?>
  <h1 class="text-center mt-4">ตารางแสดงรายการข้อมูลการประเมินสภาวะสุขภาพ</h3>



    <div class="container">
      <!-- Tab menu click -->
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" ng-click="tab1()">ข้อมูลสุขภาพ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-cdis" type="button" role="tab" ng-click="tab3()">ปัญหาสุขภาวะ</button>
        </li>

      </ul>
      <!-- End Tab menu click -->


      <div class="tab-content" id="pills-tabContent">

        <!-- Tab1 -->

        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
          tabindex="0" ng-init="tab1()">

          <!-- Search -->
          <div class="container">
            <form ng-submit="tab1()">
              <div class="row mb-3">
                <label for="inputEmail3" class="col-form-label">กรอกเพื่อค้นหา</label>
                <div class="col-md-7 d-flex">
                  <input type="text" class="form-control" id="inputEmail3" ng-model="f.nah" />
                  <button type="submit" class="btn btn-primary mx-2">ค้นหา</button>
                </div>
              </div>
            </form>
          </div>

          <!-- Search -->

          <!-- Table -->
          <div class="container ">
            <div class="table-responsive">
              <table id="" class="table table-striped table-hover table-abc ">
                <thead>
                  <tr>
                    <th scope="col" class="col-sm-2">เลขบัตรประชาชน</th>
                    <th scope="col">ปี</th>
                    <th scope="col">น้ำหนัก</th>
                    <th scope="col">ส่วนสูง</th>
                    <th scope="col">รอบเอว</th>
                    <th scope="col" class="">ค่าความดันโลหิต</th>
                    <!-- <th scope="col" class="col-md-2">ค่าความดันโลหิต(วัดครั้งที่2)</th> -->
                    <!-- <th scope="col" class="col-md-2">ผลการตรวจโรคเบาหวานในรอบปีที่ผ่านมา</th>
                        <th scope="col" class="col-md-2">ผลการตรวจโรคความดันโลหิตสูงในรอบปีที่ผ่านมา</th> -->
                    <th scope="col">การสูบบุหรี่</th>
                    <!-- <th scope="col">ระยะเวลาที่สูบ</th> -->
                    <th scope="col">การดื่มแอลกอฮอล์</th>
                    <!-- <th scope="col">ระยะเวลาที่ดื่ม</th> -->
                    <th scope="col" class="">กิจกกรรมการเคลื่อนไหวระดับปานกลาง</th>


                    <th scope="col" class="col-md-2">การจัดการ</th>


                  </tr>
                </thead>
                <tbody>
                  <!-- Your table body content -->
                  <tr ng-repeat="i in alltype">
                    <td>{{i.IDCard}}</td>
                    <td>{{i.ID_Year}}</td>
                    <td>{{i.Wg}}</td>
                    <td>{{i.Hg}}</td>
                    <td>{{i.Wline}}</td>
                    <td>{{i.bp1name}}</td>
                    <!-- <td>{{i.bp2name}}</td> -->
                    <!-- <td>{{i.Results_diabetesname}}</td>
                        <td>{{i.Results_hypertensionname}}</td> -->
                    <td>{{i.Smoking_name}}</td>
                    <!-- <td>{{i.Smoking_year}}</td> -->
                    <td>{{i.Alcohol_name}}</td>
                    <!-- <td>{{i.Algohol_year}}</td> -->
                    <td>{{i.Mact_Name}}</td>

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
          <!-- Table -->

        </div>


     

        <!-- Tab3 -->
        <div class="tab-pane fade" id="pills-cdis">
          <!-- Search -->
          <div class="container">
            <form ng-submit="tab3()">
              <div class="row mb-3">
                <label for="inputEmail3" class="col-form-label">กรอกเพื่อค้นหา</label>
                <div class="col-md-7 d-flex">
                  <input type="text" class="form-control" id="inputEmail3" ng-model="f.nah" />
                  <button type="submit" class="btn btn-primary mx-2">ค้นหา</button>
                </div>
              </div>
            </form>
          </div>
          <!-- Search -->


          <!-- Table3 -->
          <div class="container ">
            <div class="table-responsive">
              <table id="" class="table table-striped table-hover table-abc">
                <thead>
                  <tr>
                    <th scope="col" class="col-sm-2">เลขบัตรประชาชน</th>
                    <!-- <th scope="col">ผลการตรวจโรคเบาหวานในรอบปีที่ผ่านมา</th>
                    <th scope="col">ผลการตรวจโรคความดันโลหิตสูงในรอบปีที่ผ่านมา</th> -->
                    <th scope="col">ปัจจุบันท่านมีฟันใช้งานอย่างน้อย 20ซี่</th>
                    <th scope="col">ผลการคัดกรองสายตา</th>
                    <th scope="col">รู้สึกหดหู่ เศร้า ท้อแท้ผิดหวัง</th>
                    <th scope="col">รู้สึกเบื่อ ไม่เพลิดเพลิน</th>
                    <th scope="col">การประเมินสภาวะหกล้ม</th>
                    <th scope="col">การคัดกรองภาวะกลั้นปัสสาวะ</th>
                    <th scope="col">การประเมินปัญหาการนอน</th>
                    <th scope="col">มีอาการง่วงนอน อ่อนเพลีย  ตอนกลางวัน</th>
                    <!-- <th scope="col">ดัชนีมวลกาย (ภาวะโภชนาการ)</th> -->
                    <th scope="col" class="col">การจัดการ</th>


                  </tr>
                </thead>
                <tbody>
                  <!-- Your table body content -->
                  <tr ng-repeat="i in alltype">
                    <td>{{i.IDCard}}</td>
                    <!-- <td>{{i.Results_diabetesname}}</td> -->
                    <!-- <td>{{i.Results_hypertensionname}}</td> -->
                    <td>{{i.Teethname}}</td>
                    <td>{{i.Results_eye1name}}</td>
                    <td>{{i.Feel_depressedname}}</td>
                    <td>{{i.Feel_boredname}}</td>
                    <td>{{i.Assess_fallname}}</td>`Z
                    <td>{{i.Urinaryname}}</td>
                    <td>{{i.Assess_sleepname}}</td>
                    <td>{{i.Sleep_dayname}}</td>
                    <!-- <td>{{i.Body_mass_Name}}</td> -->

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

          <!-- Table3 -->
        </div>
        

      </div>
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

            <h1>ข้อมูลการประเมินสภาวะสุขภาพ</h1>
            <form ng-submit="senddata()">
              <div class="row mb-3">
                <label for="input1" class="col-sm-2 col-form-label">IDCard</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input1" ng-model="f.a">
                </div>
              </div>
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">ID_Year</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="input2" ng-model="f.b">
                </div>
              </div>
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">Wg</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="input2" ng-model="f.c">
                </div>
              </div>
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">Hg</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="input2" ng-model="f.d">
                </div>
              </div>
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">Wline</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="input2" ng-model="f.e">
                </div>
              </div>
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">BP1</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input2" ng-model="f.f">
                </div>
              </div>
              
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">Smoking</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input2" ng-model="f.j">
                </div>
              </div>
              
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">Alcohol</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input2" ng-model="f.l">
                </div>
              </div>
            
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">Mact</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input2" ng-model="f.n">
                </div>
              </div>

              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">Teeth</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input2" ng-model="f.bb">
                </div>
              </div>
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">Results_eye1</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input2" ng-model="f.cc">
                </div>
              </div>
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">Feel_depressed</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input2" ng-model="f.dd">
                </div>
              </div>
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">Feel_bored</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input2" ng-model="f.ee">
                </div>
              </div>
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">Assess_fall</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input2" ng-model="f.hh">
                </div>
              </div>
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">Urinary</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input2" ng-model="f.ii">
                </div>
              </div>
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">Assess_sleep</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input2" ng-model="f.jj">
                </div>
              </div>
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">Sleep_day</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input2" ng-model="f.kk">
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
            <h1>ข้อมูลการประเมินสภาวะสุขภาพ</h1>
            <form ng-submit="update()">
              <div class="row mb-3">
                <label for="input1" class="col-sm-2 col-form-label">IDCard</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" readonly="readonly" id="input1" ng-model="xyz.IDCard"
                    disabled />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input2" class="col-sm-2 col-form-label">ID_Year</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input2" ng-model="xyz.ID_Year" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">Wg</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.Wg" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">Hg</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.Hg" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">Wline</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.Wline" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">BP1</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.BP1" />
                </div>
              </div>
            
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">Smoking</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.Smoking" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">Alcoho</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.Alcoho" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">Mact</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.Mact" />
                </div>
              </div>
              
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">Teeth</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.Teeth" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">Results_eye1</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.Results_eye1" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">Feel_depressed</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.Feel_depressed" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">Feel_bored</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.Feel_bored" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">Assess_fall</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.Assess_fall" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">Urinary</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.Urinary" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">Assess_sleep</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.Assess_sleep" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">Sleep_day</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.Sleep_day" />
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
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" ng-click="deldata(del.IDCard)"> ยืนยัน
            </button>
          </div>
        </div>
      </div>
    </div>
</body>

</html>