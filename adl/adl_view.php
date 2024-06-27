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
  <script src="adl.js"></script>


  <!-- Data Table -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

  <title>ข้อมูลการประเมินADL</title>
  <style>
    body {
      /* background-color: #dafafa; */
      background: linear-gradient(to right, #dafafa, #db93e8);


    }
  </style>
</head>

<body ng-controller="chronic_crt">
  <?php include_once('../menu.php');?>
  <h1 class="text-center mt-4">ตารางแสดงรายการข้อมูลการประเมินADL</h3>

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
                    <th scope="col" class="col-sm-2">เลขบัตรประชาชน</th>
                    <th scope="col">ADL1</th>
                    <th scope="col">ADL2</th>
                    <th scope="col">ADL3</th>
                    <th scope="col">ADL4</th>
                    <th scope="col">ADL5</th>
                    <th scope="col">ADL6</th>
                    <th scope="col">ADL7</th>
                    <th scope="col">ADL8</th>
                    <th scope="col">ADL9</th>
                    <th scope="col">ADL10</th>
                    <th scope="col">ADL_RESULT</th>
                    <th scope="col" class="col">การจัดการ</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Your table body content -->
                  <tr ng-repeat="i in alltype">
                    <td>{{i.IDCard}}</td>
                    <td>{{i.ADL1}}</td>
                    <td>{{i.ADL2}}</td>
                    <td>{{i.ADL3}}</td>
                    <td>{{i.ADL4}}</td>
                    <td>{{i.ADL5}}</td>
                    <td>{{i.ADL6}}</td>
                    <td>{{i.ADL7}}</td>
                    <td>{{i.ADL8}}</td>
                    <td>{{i.ADL9}}</td>
                    <td>{{i.ADL10}}</td>
                    <td>{{i.Resualt_ADL}}</td>


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

          <!-- Table2 end -->
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
              <div class="mt-5">
                <p>1. รับประทานอาหารเมื่อเตรียมสำรับไว้ให้เรียบร้อยต่อหน้า</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL1" id="radio0" value="0" ng-model="f.adl1">
                    <label class="form-check-label" for="radio0">
                        ไม่สามารถตักอาหารเข้าปากได้ ต้องมีคนป้อนให้
                    </label>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL1" id="radio1" value="1" ng-model="f.adl1">
                    <label class="form-check-label" for="radio1">
                        ไม่สามารถตักอาหารเข้าปากได้
                    </label>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL1" id="radio2" value="2" ng-model="f.adl1">
                    <label class="form-check-label" for="radio2">
                        ตักอาหารและช่วยตัวเองได้เป็นปกติ
                    </label>
                </div>
            </div>
            <div class="mt-5">
              <p>2. ล้างหน้า หวีผม แปรงฟัน โกนหนวด </p>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="ADL2" id="radio0" value="0" ng-model="f.adl2">
                  <label class="form-check-label" for="radio0">
                    ต้องการความช่วยเหลือ 
                  </label>
              </div>
              
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="ADL2" id="radio1" value="1" ng-model="f.adl2">
                  <label class="form-check-label" for="radio1">
                    ทำเองได้ 
                  </label>
              </div>
            </div>
            <div class="mt-5">
              <p>3. ลุกนั่งจากที่นอน หรือจากเตียงไปยังเก้าอี้</p>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="ADL3" id="radio0" value="0" ng-model="f.adl3">
                  <label class="form-check-label" for="radio0">
                      ทำไม่ได้
                  </label>
              </div>
              
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="ADL3" id="radio1" value="1" ng-model="f.adl3">
                  <label class="form-check-label" for="radio1">
                    ต้องการความช่วยเหลืออย่างมาก
                  </label>
              </div>
              
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="ADL3" id="radio2" value="2" ng-model="f.adl3">
                  <label class="form-check-label" for="radio2">
                    ต้องการความช่วยเหลือบ้าง 
                  </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="ADL3" id="radio1" value="3" ng-model="f.adl3">
                <label class="form-check-label" for="radio1">
                  ทำได้เอง
                </label>
            </div>
          </div>
          <div class="mt-5">
            <p>4. ใช้ห้องน้ำ</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ADL4" id="radio0" value="0" ng-model="f.adl4">
                <label class="form-check-label" for="radio0">
                  ช่วยตัวเองไม่ได้
                </label>
            </div>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ADL4" id="radio1" value="1" ng-model="f.adl4">
                <label class="form-check-label" for="radio1">
                  ทำเองได้บ้าง 
                </label>
            </div>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ADL4" id="radio2" value="2" ng-model="f.adl4">
                <label class="form-check-label" for="radio2">
                  ช่วยตัวเองได้ดี 
                </label>
            </div>
        </div>
        <div class="mt-5">
          <p>5. การเคลื่อนที่ภายในห้องหรือบ้าน</p>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="ADL5" id="radio0" value="0" ng-model="f.adl5">
              <label class="form-check-label" for="radio0">
                เคลื่อนที่ไปไหนไม่ได้
              </label>
          </div>
          
          <div class="form-check">
              <input class="form-check-input" type="radio" name="ADL5" id="radio1" value="1" ng-model="f.adl5">
              <label class="form-check-label" for="radio1">
                ต้องใช้รถเข็นช่วยตัวเองให้เคลื่อนที่ได้เอง 
              </label>
          </div>
          
          <div class="form-check">
              <input class="form-check-input" type="radio" name="ADL5" id="radio2" value="2" ng-model="f.adl5">
              <label class="form-check-label" for="radio2">
                เดินหรือเคลื่อนที่โดยมีคนช่วย 
              </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="ADL5" id="radio2" value="3" ng-model="f.adl5">
            <label class="form-check-label" for="radio2">
              เดินหรือเคลื่อนที่ได้เอง 
            </label>
        </div>
      </div>
      <div class="mt-5">
        <p>6. การสวมใส่เสื้อผ้า</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ADL6" id="radio0" value="0" ng-model="f.adl6">
            <label class="form-check-label" for="radio0">
              ต้องมีคนสวมใส่ให้ 
            </label>
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ADL6" id="radio1" value="1" ng-model="f.adl6">
            <label class="form-check-label" for="radio1">
              ช่วยตัวเองครึ่งหนึ่ง ที่เหลือต้องมีคนช่วย
            </label>
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ADL6" id="radio2" value="2" ng-model="f.adl6">
            <label class="form-check-label" for="radio2">
              ช่วยตัวเองได้
            </label>
        </div>
      </div>
      <div class="mt-5">
        <p>7. การขึ้นลงบันได 1 ชั้น</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ADL7" id="radio0" value="0" ng-model="f.adl7">
            <label class="form-check-label" for="radio0">
              ไม่สามารถทำได้ 
            </label>
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ADL7" id="radio1" value="1" ng-model="f.adl7">
            <label class="form-check-label" for="radio1">
              ต้องการคนช่วย
            </label>
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ADL7" id="radio2" value="2" ng-model="f.adl7">
            <label class="form-check-label" for="radio2">
              ขึ้นลงได้เอง ถ้าต้องใช้เครื่องช่วยเช่นจะต้องเอาขึ้นลงได้ด้วย
            </label>
        </div>
      </div>
      <div class="mt-5">
        <p>8. การอาบน้ำ</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ADL8" id="radio0" value="0" ng-model="f.adl8">
            <label class="form-check-label" for="radio0">
              ต้องมีคนช่วยหรือทำให้
            </label>
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ADL8" id="radio1" value="1" ng-model="f.adl8">
            <label class="form-check-label" for="radio1">
              อาบน้ำเองได้
            </label>
        </div>
      
      </div>
      <div class="mt-5">
        <p>9. การกลั้นการถ่ายอุจจาระในระยะ 1 สัปดาห์ที่ผ่านมา</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ADL9" id="radio0" value="0" ng-model="f.adl9">
            <label class="form-check-label" for="radio0">
              กลั้นไม่ได้ 
            </label>
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ADL9" id="radio1" value="1" ng-model="f.adl9">
            <label class="form-check-label" for="radio1">
              กลั้นไม่ได้บางครั้ง เป็นน้อยกว่า 1 ครั้งต่อสัปดาห์
            </label>
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ADL9" id="radio2" value="2" ng-model="f.adl9">
            <label class="form-check-label" for="radio2">
              กลั้นได้เป็นปกติ
            </label>
        </div>
      </div>
      <div class="mt-5">
        <p>10. การกลั้นปัสสาวะในระยะ 1 สัปดาห์ที่ผ่านมา</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ADL10" id="radio0" value="0" ng-model="f.adl10">
            <label class="form-check-label" for="radio0">
              กลั้นไม่ได้  
            </label>
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ADL10" id="radio1" value="1" ng-model="f.adl10">
            <label class="form-check-label" for="radio1">
              กลั้นไม่ได้บางครั้ง เป็นน้อยกว่าวันละ 1 ครั้ง
            </label>
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ADL10" id="radio2" value="2" ng-model="f.adl10">
            <label class="form-check-label" for="radio2">
              กลั้นได้เป็นปกติ
            </label>
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
            <h1>ข้อมูลการประเมินADL</h1>
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
                <label for="input4" class="col-sm-2 col-form-label">ADL1</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.ADL1" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">ADL2</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.ADL2" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">ADL3</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.ADL4" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">ADL5</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.ADL5" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">ADL6</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.ADL6" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">ADL7</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.ADL7" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">ADL8</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.ADL8" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">ADL9</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.ADL9" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">ADL10</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.ADL10" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="input4" class="col-sm-2 col-form-label">Resualt_ADL</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input3" ng-model="xyz.Resualt_ADL" />
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