<!doctype html>
<html lang="en" ng-app="ajboapp">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <!-- angularjs -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="view.js"></script>

    <title>แบบประเมิน</title>
</head>

<body ng-controller="views">
    <?php
    include_once('../admin/menu.php');?>

          
    
    <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
        <a class="navbar-brand" href="#">การประเมินสภาวะสุขภาพ</a>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading1">ประวัติส่วนตัว</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading2">สุขภาวะ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading3">ADL</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">เมนู</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#scrollspyHeading1">ประวัติส่วนตัว</a></li>
              <li><a class="dropdown-item" href="#scrollspyHeading2">สุขภาวะ</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#scrollspyHeading3">ADL</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <div  > 
      <div style="height: 500px; overflow-y: scroll;" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
        <h4 id="scrollspyHeading1">ประวัติส่วนตัว</h4>
        <form ng-submit="senddata()">
            <p>
            <div class="container">
                <label for="input1" class="col-sm-2 col-form-label">ชื่อ-นามสกุล</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="input1" ng-model="form.personal1" required>
                </div>
            </div>
            <div class="container">
                <label for="input2" class="col-sm-2 col-form-label">หมู่ที่</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="input2" ng-model="form.personal2" required>
                </div>
            </div>
            <div class="container">
                <label for="input2" class="col-sm-2 col-form-label">บ้านเลขที่ </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="input2" ng-model="form.personal3" required>
                </div>
            </div>
            <div class="container" >
                <p>สถานะภาพการสมรส</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="radio0" value="1" ng-model="form.status">
                    <label class="form-check-label" for="radio0">
                        โสด
                    </label>
                </div>
    
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="radio1" value="2" ng-model="form.status">
                    <label class="form-check-label" for="radio1">
                        สมรส
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="radio0" value="3" ng-model="form.status">
                    <label class="form-check-label" for="radio0">
                        หม้าย
                    </label>
                </div>
    
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="radio1" value="4" ng-model="form.status">
                    <label class="form-check-label" for="radio1">
                        หย่าร้าง/แยกย้าย
                    </label>
                </div>
            </div>
    
            <div class="container">
                <p>สถานการณ์อยู่อาศัย(เลือกคำตอบได้มากกว่า1ข้อ)</p>
                <div class="form-check">
                    <input ng-true-value="1" class="form-check-input" type="checkbox"  name="situation" id="checkbox0" value="1" ng-model="form.situation">
                    <label class="form-check-label" for="checkbox0">
                        อยู่ลำพัง
                    </label>
                </div>
                
                <div class="form-check">
                    <input ng-true-value="2" class="form-check-input" type="checkbox" name="situation"  id="checkbox" value="2" ng-model="form.situation1">
                    <label class="form-check-label" for="checkbox">
                        มีคู่สมรส
                    </label>
                </div>
                <div class="form-check">
                    <input ng-true-value="3" class="form-check-input" type="checkbox" name="situation"  id="checkbox" value="3" ng-model="form.situation2">
                    <label class="form-check-label" for="checkbox">
                        มีลูกหลานดูแล
                    </label>
                </div>
                <div class="form-check">
                    <input ng-true-value="4" class="form-check-input" type="checkbox" name="situation" id="checkbox" value="4" ng-model="form.situation3">
                    <label class="form-check-label" for="checkbox">
                        มีพี่น้องดูแล
                    </label>
                </div>
                <div class="form-check">
                    <input ng-true-value="5" class="form-check-input" type="checkbox" name="situation" id="checkbox" value="5" ng-model="form.situation4">
                    <label class="form-check-label" for="checkbox">
                        มีญาติดูแล
                    </label>
                </div>
                <div class="form-check">
                    <input ng-true-value="6" class="form-check-input" type="checkbox" name="situation" id="checkbox" value="6" ng-model="form.situation5">
                    <label class="form-check-label" for="checkbox">
                        ไม่มีผู้ดูแล
                    </label>
                </div>
                </div>
    
                <div class="container">
                    <p>อาชีพหลักหรืองานที่ใช้เวลาทำเป็นส่วนใหญ่(เลือกคำตอบได้มากกว่า1ข้อ)</p>
                    <div class="form-check">
                        <input ng-true-value="1" class="form-check-input" type="checkbox" name="occupation" id="checkbox0" value="1" ng-model="form.occupation">
                        <label class="form-check-label" for="checkbox0">
                            เกษตกรรม ทำนา/ทำไร่/ทำสวน
                        </label>
                    </div>
                    <div class="form-check">
                        <input ng-true-value="2" class="form-check-input" type="checkbox" name="occupation" id="checkbox1" value="2" ng-model="form.occupation1">
                        <label class="form-check-label" for="checkbox1">
                            รับจ้างทั่วไป
                        </label>
                    </div>
                    <div class="form-check">
                        <input ng-true-value="3" class="form-check-input" type="checkbox" name="occupation" id="checkbox2" value="3" ng-model="form.occupation2">
                        <label class="form-check-label" for="checkbox2">
                            ค้าขาย/ประกอบธุรกิจส่วนตัว
                        </label>
                    </div>
                    <div class="form-check">
                        <input ng-true-value="4" class="form-check-input" type="checkbox" name="occupation" id="checkbox3" value="4" ng-model="form.occupation3">
                        <label class="form-check-label" for="checkbox3">
                            เลี้ยงสัตว์
                        </label>
                    </div>
                    <div class="form-check">
                        <input ng-true-value="5" class="form-check-input" type="checkbox" name="occupation" id="checkbox4" value="5" ng-model="form.occupation4">
                        <label class="form-check-label" for="checkbox4">
                            ข้าราชการบำนาญ(เกษียณ)
                        </label>
                    </div>
                    <div class="form-check">
                        <input ng-true-value="6" class="form-check-input" type="checkbox" name="occupation" id="checkbox5" value="6" ng-model="form.occupation5">
                        <label class="form-check-label" for="checkbox5">
                            อยู่บ้านเฉยๆไม่ได้ทำ
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="occupation" id="checkbox0" ng-model="show">
                        <label class="form-check-label" for="checkbox0">
                            อื่น
                        </label>
                    </div>
                    <div class="row mb-3" ng-show="show">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input2" ng-model="form.occupationother" >
                        </div>
                    </div>
                    <div class="container">
                        <p>การศึกษา(ระบุการศึกษาขั้นสูงสุด)</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="edu" id="radio0" value="1" ng-model="form.edu">
                            <label class="form-check-label" for="radio0">
                                ไม่เคยเรียน
                            </label>
                        </div>
    
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="edu" id="radio0" value="2" ng-model="form.edu">
                            <label class="form-check-label" for="radio1">
                                ประถมศึกษา
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="edu" id="radio0" value="3" ng-model="form.edu">
                            <label class="form-check-label" for="radio0">
                                มัธยมศึกษาตอนต้น
                            </label>
                        </div>
    
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="edu" id="radio0" value="4" ng-model="form.edu">
                            <label class="form-check-label" for="radio1">
                                มัธยมศึกษาตอนปลาย
                            </label>
                        </div>
    
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="edu" id="radio0" value="5" ng-model="form.edu">
                            <label class="form-check-label" for="radio2">
                                ปวช.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="edu" id="radio0" value="6" ng-model="form.edu">
                            <label class="form-check-label" for="radio1">
                                ปวส./ปวท./อนุปริญญา
                            </label>
                        </div>
    
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="edu" id="radio0" value="7" ng-model="form.edu">
                            <label class="form-check-label" for="radio2">
                                ปริญญาตรี
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="edu" id="radio0" value="8" ng-model="form.edu">
                            <label class="form-check-label" for="radio2">
                                ปริญญาโทหรือสูงกว่า
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="edu" id="radio0" value="9" ng-model="form.edu">
                            <label class="form-check-label" for="radio2">
                                อื่น
                            </label>
                        </div>
                        <div class="row mb-3" ng-show="edu.a == 9">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input2"  ng-model="form.eduother" >
                            </div>
                        </div>
                        <div class="container">
                            <p>บทบาททางสังคมปัจจุบัน(เลือกคำตอบได้มากกว่า1ข้อ)</p>
                            <div class="form-check">
                                <input ng-true-value="1" class="form-check-input" type="checkbox" name="social" id="checkbox0" value="1" ng-model="form.social">
                                <label class="form-check-label" for="checkbox0">
                                    ผู้นำท้องถิ่น
                                </label>
                            </div>
                            <div class="form-check">
                                <input ng-true-value="2" class="form-check-input" type="checkbox" name="social" id="checkbox1" value="2" ng-model="form.social1">
                                <label class="form-check-label" for="checkbox1">
                                    อสม.
                                </label>
                            </div>
                            <div class="form-check">
                                <input ng-true-value="3" class="form-check-input" type="checkbox" name="social" id="checkbox2" value="3" ng-model="form.social2">
                                <label class="form-check-label" for="checkbox2">
                                    ชรบ./สตบ.
                                </label>
                            </div>
                            <div class="form-check">
                                <input ng-true-value="4" class="form-check-input" type="checkbox" name="social" id="checkbox3" value="4" ng-model="form.social3">
                                <label class="form-check-label" for="checkbox3">
                                    แม่บ้านสตรี
                                </label>
                            </div>
                            <div class="form-check">
                                <input ng-true-value="5" class="form-check-input" type="checkbox" name="social" id="checkbox4" value="5" ng-model="form.social4">
                                <label class="form-check-label" for="checkbox4">
                                    ผู้นำชุมชน
                                </label>
                            </div>
                            <div class="form-check">
                                <input ng-true-value="6" class="form-check-input" type="checkbox" name="social" id="checkbox5" value="6" ng-model="form.social5">
                                <label class="form-check-label" for="checkbox5">
                                    กรรมการหมู่บ้าน
                                </label>
                            </div>
                            <div class="form-check">
                                <input ng-true-value="7" class="form-check-input" type="checkbox" name="social" id="checkbox6" value="7" ng-model="form.social6">
                                <label class="form-check-label" for="checkbox6">
                                    กรรมการวัด
                                </label>
                            </div>
                            <div class="form-check">
                                <input ng-true-value="8" class="form-check-input" type="checkbox" name="social" id="checkbox7" value="8" ng-model="form.social7">
                                <label class="form-check-label" for="checkbox7">
                                    กรรมการสถานศึกษา
                                </label>
                            </div>
                            <div class="form-check">
                                <input ng-true-value="9" class="form-check-input" type="checkbox" name="social" id="checkbox8" value="9" ng-model="form.social8">
                                <label class="form-check-label" for="checkbox8">
                                    กรรมการกองทุนหมู่บ้าน
                                </label>
                            </div>
                            <div class="form-check">
                                <input  class="form-check-input" type="checkbox" name="social" id="checkbox9" ng-model="show2">
                                <label class="form-check-label" for="checkbox9">
                                    อื่น
                                </label>
                            </div>
                            <div class="row mb-3" ng-show="show2">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input2" ng-model="form.socialother">
                                </div>
                            </div>
                            <div class="container">
                                <p>รายได้เฉลี่ยต่อเดือน</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="income" id="radio0" value="1"
                                        ng-model="form.income">
                                    <label class="form-check-label" for="radio0">
                                        ไม่เกิน 1,500 บาท
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="income" id="radio1" value="2"
                                        ng-model="form.income">
                                    <label class="form-check-label" for="radio1">
                                        ระหว่าง 1,501 - 3,000 บาท
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="income" id="radio0" value="3"
                                        ng-model="form.income">
                                    <label class="form-check-label" for="radio0">
                                        ระหว่าง 3,001 - 4,500 บาท
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="income" id="radio1" value="4"
                                        ng-model="form.income">
                                    <label class="form-check-label" for="radio1">
                                        มากกว่า 4,500 บาทขึ้นไป
                                    </label>
                                </div>
    
                            </div>
                            <div class="container">
                                <p>แหล่งรายได้ของตนเอง(เลือกคำตอบได้มากกว่า1ข้อ)</p>
                                <div class="form-check">
                                    <input ng-true-value="1" class="form-check-input" type="checkbox" id="checkbox0" name="s_income"  value="1" ng-model="form.s_income">
                                    <label class="form-check-label" for="checkbox0">
                                        เบี้ยผู้สูงอายุ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input ng-true-value="2" class="form-check-input" type="checkbox" id="checkbox1" name="s_income"  value="2" ng-model="form.s_income1">
                                    <label class="form-check-label" for="checkbox1">
                                        เงินบำนาญ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input ng-true-value="3" class="form-check-input" type="checkbox" id="checkbox2"name="s_income"  value="3" ng-model="form.s_income2">
                                    <label class="form-check-label" for="checkbox2">
                                        เกษตรกรรม
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input ng-true-value="4" class="form-check-input" type="checkbox" id="checkbox3" name="s_income"  value="4" ng-model="form.s_income3">
                                    <label class="form-check-label" for="checkbox3">
                                        ค้าขาย
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input ng-true-value="5" class="form-check-input" type="checkbox" id="checkbox4" name="s_income"  value="5" ng-model="form.s_income4">
                                    <label class="form-check-label" for="checkbox4">
                                        ธุรกิจส่วนตัว
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input ng-true-value="6" class="form-check-input" type="checkbox" id="checkbox5" name="s_income"  value="6" ng-model="form.s_income5">
                                    <label class="form-check-label" for="checkbox5">
                                        รับจ้าางทั่วไป
                                    </label>
                                </div>
                            </div></p>
        <h4 id="scrollspyHeading2">สุขภาวะ</h4>
        <p> 
            <div class="container">
            <label for="input1" class="col-sm-2 col-form-label">น้ำหนัก หน่วย(กิโลกรัม)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input1" ng-model="form.health_info1">
            </div>
        </div>
        <div class="container">
            <label for="input2" class="col-sm-2 col-form-label">ส่วนสูง หน่วย(เซนติเมตร)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input2" ng-model="form.health_info2">
            </div>
        </div>
        <div class="container">
            <label for="input2" class="col-sm-2 col-form-label">รอบเอว หน่วย(เซนติเมตร) </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input2" ng-model="form.health_info3">
            </div>
        </div>
        <div class="container">
            <p>ระดับค่าความดันโลหิต</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="BP1" id="radio0" value="1"
                    ng-model="form.health_info4">
                <label class="form-check-label" for="radio0">
                    ปกติ (ไม่เกิน 120/80)
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="BP1" id="radio0" value="2"
                    ng-model="form.health_info4">
                <label class="form-check-label" for="radio0">
                    เริ่มสูง (120-139/80-89)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="BP1" id="radio0" value="3"
                    ng-model="form.health_info4">
                <label class="form-check-label" for="radio0">
                    สูง(140-159/90-99)
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="BP1" id="radio0" value="4"
                    ng-model="form.health_info4">
                <label class="form-check-label" for="radio0">
                    สูงมาก(>160/100)
                </label>
            </div>
        </div>
        <div class="container">
            <p>โรคประจำตัว (เลือกคำตอบได้มากกว่า1ข้อ)</p>
            <div class="form-check">
                <input ng-true-value="1" class="form-check-input" type="checkbox" id="checkbox0" name="cdis"  value="1" ng-model="form.cdis">
                <label class="form-check-label" for="checkbox0">
                    ไม่มี
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="2" class="form-check-input" type="checkbox" id="checkbox1" name="cdis"  value="2" ng-model="form.cdis1">
                <label class="form-check-label" for="checkbox1">
                    เบาหวาน
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="3" class="form-check-input" type="checkbox" id="checkbox2" name="cdis"  value="3" ng-model="form.cdis2">
                <label class="form-check-label" for="checkbox2">
                    ความดันโลหิตสูง
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="4" class="form-check-input" type="checkbox" id="checkbox3" name="cdis"  value="4" ng-model="form.cdis3">
                <label class="form-check-label" for="checkbox3">
                    ไขมันในเลือดสูง
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="5" class="form-check-input" type="checkbox" id="checkbox4" name="cdis"  value="5" ng-model="form.cdis4">
                <label class="form-check-label" for="checkbox4">
                    โรคหัวใจและหลอดเลือด
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="6" class="form-check-input" type="checkbox" id="checkbox5" name="cdis"  value="6" ng-model="form.cdis5">
                <label class="form-check-label" for="checkbox5">
                    โรคหลอดเลือดสมอง
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="7" class="form-check-input" type="checkbox" id="checkbox6" name="cdis"  value="7" ng-model="form.cdis6">
                <label class="form-check-label" for="checkbox6">
                    โรคไตวาย
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="8" class="form-check-input" type="checkbox" id="checkbox7" name="cdis"  value="8" ng-model="form.cdis7">
                <label class="form-check-label" for="checkbox7">
                    โรคหอบหืด
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="9" class="form-check-input" type="checkbox" id="checkbox8" name="cdis"  value="9" ng-model="form.cdis8">
                <label class="form-check-label" for="checkbox8">
                    โรคถุงลมโป่งพอง
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="10" class="form-check-input" type="checkbox" id="checkbox9" name="cdis"  value="10" ng-model="form.cdis9">
                <label class="form-check-label" for="checkbox9">
                    โรคมะเร็ง
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="11" class="form-check-input" type="checkbox" id="checkbox10" name="cdis"  value="11" ng-model="form.cdis10">
                <label class="form-check-label" for="checkbox10">
                    โรคโลหิตจาง/ธาลาตซีเมีย
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="12" class="form-check-input" type="checkbox" id="checkbox11" name="cdis"  value="12" ng-model="form.cdis11">
                <label class="form-check-label" for="checkbox11">
                    โรคจิตเวช
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="13" class="form-check-input" type="checkbox" id="checkbox12"name="cdis"  value="13" ng-model="form.cdis12">
                <label class="form-check-label" for="checkbox12">
                    โรคลมชัก
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="14" class="form-check-input" type="checkbox" id="checkbox13" name="cdis"  value="14" ng-model="form.cdis13">
                <label class="form-check-label" for="checkbox13">
                    โรคเก๊าท์
                </label>
            </div>

            <div class="form-check">
                <input ng-true-value="15" class="form-check-input" type="checkbox" id="checkbox14" name="cdis"  value="15" ng-model="form.cdis14">
                <label class="form-check-label" for="checkbox14">
                    โรคข้อเข่าเสื่อม
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkbox15"   ng-model="show3">
                <label class="form-check-label" for="checkbox15">
                    อื่น
                </label>
            </div>
            <div class="row mb-3" ng-show="show3">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="input2" ng-model="form.cdisother">
                </div>
            </div>
        </div>
        <div class="container" ng-hide="">
            <p>*กรณีมีโรคประจำตัวรักษาที่ใด (เลือกคำตอบได้มากกว่า1ข้อ)</p>
            <div class="form-check">
                <input ng-true-value="1" class="form-check-input" type="checkbox" id="checkbox0" name="Pcdis"  value="1" ng-model="form.pcdis">
                <label class="form-check-label" for="checkbox0">
                    โรงยาบาลพะเยา
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="2" class="form-check-input" type="checkbox" id="checkbox1" name="Pcdis"  value="2" ng-model="form.pcdis1">
                <label class="form-check-label" for="checkbox1">
                    โรงพยาบาลศูนย์แพทย์ มหาวิทยาลัยพะเยา
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="3" class="form-check-input" type="checkbox" id="checkbox2" name="Pcdis"  value="3" ng-model="form.pcdis2">
                <label class="form-check-label" for="checkbox2">
                    รพ.สต.แม่กา
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="4" class="form-check-input" type="checkbox" id="checkbox3" name="Pcdis"  value="4" ng-model="form.pcdis3">
                <label class="form-check-label" for="checkbox3">
                    โรงพยาบาลเอกชน
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="5" class="form-check-input" type="checkbox" id="checkbox4" name="Pcdis"  value="5" ng-model="form.pcdis4">
                <label class="form-check-label" for="checkbox4">
                    คลินิกเอกชน
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="6" class="form-check-input" type="checkbox" id="checkbox5" name="Pcdis"  value="6" ng-model="form.pcdis5">
                <label class="form-check-label" for="checkbox5">
                    ซื้อยาทานเอง
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkbox6" name="Pcdis"  ng-model="show4">
                <label class="form-check-label" for="checkbox6">
                    อื่น
                </label>
            </div>
            <div class="row mb-3" ng-show="show4">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="input2" ng-model="form.pcdisother">
                </div>
            </div>
        </div>
        <div class="container">
            <p>ความพิการของร่างกาย (เลือกคำตอบได้มากกว่า1ข้อ)</p>
            <div class="form-check">
                <input ng-true-value="0" class="form-check-input" type="checkbox" id="checkbox0" name="Phydis" value="0" ng-model="form.phydis">
                <label class="form-check-label" for="checkbox0">
                    ไม่มี
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="1" class="form-check-input" type="checkbox" id="checkbox1" name="Phydis" value="1" ng-model="form.phydis1">
                <label class="form-check-label" for="checkbox1">
                    พิการร่างกายและเคลื่อนไหว
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="2" class="form-check-input" type="checkbox" id="checkbox2" name="Phydis" value="2" ng-model="form.phydis2">
                <label class="form-check-label" for="checkbox2">
                    พิการทางสายตา
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="3" class="form-check-input" type="checkbox" id="checkbox3" name="Phydis" value="3" ng-model="form.phydis3">
                <label class="form-check-label" for="checkbox3">
                    พิการทางหู
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="4" class="form-check-input" type="checkbox" id="checkbox4" name="Phydis" value="4" ng-model="form.phydis4">
                <label class="form-check-label" for="checkbox4">
                    พิการทางสติปัญญาและการเรียนรู้
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="5" class="form-check-input" type="checkbox" id="checkbox5" name="Phydis" value="5" ng-model="form.phydis5">
                <label class="form-check-label" for="checkbox5">
                    พิการทางจิตใจ/พฤติกรรม
                </label>
            </div>
            <div class="form-check">
                <input ng-true-value="6" class="form-check-input" type="checkbox" id="checkbox6" name="Phydis" value="6" ng-model="form.phydis6">
                <label class="form-check-label" for="checkbox6">
                    ออทิสติก
                </label>
            </div>
        </div>
        <div class="container" ng-hide="">
            <p>*กรณีมาความพิการ ได้รับการสงเคราะห์เบี้ยผู้พิการหรือไม่</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="radio1" name="Phydis" value="7" ng-model="form.phydis7">
                <label class="form-check-label" for="radio1">
                    ได้รับ
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="radio1" name="Phydis" value="8" ng-model="form.phydis7">
                <label class="form-check-label" for="radio1">
                    ไม่ได้รับ
                </label>
            </div>
        </div>

        <div class="container">
            <p> ท่านสูบบุหรี่ หรือยาเส้น หรือไม่</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="radio4" name="smok" value="1" ng-model="form.smok">
                <label class="form-check-label" for="radio4">
                    สูบ
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="radio4" name="smok" value="2" ng-model="form.smok">
                <label class="form-check-label" for="radio4">
                    ไม่สูบ
                </label>
            </div>
        </div>

        <div class="container">
            <p>ท่านดื่มแอลกอออล์ หรือไม่</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="radio5" name="alcohol" value="1" ng-model="form.alcohol">
                <label class="form-check-label" for="radio5">
                    ดื่ม
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="radio5" name="alcohol" value="2" ng-model="form.alcohol">
                <label class="form-check-label" for="radio5">
                    ไม่ดื่ม
                </label>
            </div>
        </div>

        <div class="container">
            <p>ในแต่ละวันท่านมีกิจกรรมมเคลื่อนไหวทางกายที่ระดับปานกลาง เหล่านี้หรือไม่</p>
            <p>เช่น การเดิน ปั่นจักรยาน ทำการบ้าน ทำนา การทำไร่ ทำสวน
                หรือออกกกำลังการอย่างน้อยครั้งละ 30นาที</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="radio1" name="mat" value="1" ng-model="form.mat">
                <label class="form-check-label" for="radio1">
                    สม่ำเสมอ อย่างน้อยสัปดาห์ละ 3 ครั้ง
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="radio1" name="mat" value="2" ng-model="form.mat">
                <label class="form-check-label" for="radio1">
                    ไม่สม่ำเสมอ น้อยกว่า 3 ครั้งต่อสัปดาห์
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="radio1" name="mat" value="3" ng-model="form.mat">
                <label class="form-check-label" for="radio1">
                    ไม่มี เนื่องจากทำไม่ได้ทำเลย
                </label>
            </div>
            <div class="container">
                <p> ปัจจุบันท่านมีฟันอยู่กี่ซี่</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="radio0" name="teeth" value="1" ng-model="form.teeth">
                    <label class="form-check-label" for="radio0">
                        มากกว่า 20 ซี่
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="radio0" name="teeth" value="2" ng-model="form.teeth">
                    <label class="form-check-label" for="radio0">
                        น้อยกว่า 20 ซี่
                    </label>
                </div>
            </div>
            <div class="container">
                <p>ผลการคัดกรองสายตา(เลือกคำตอบได้มากกว่า1ข้อ)</p>
                <div class="form-check">
                    <input ng-true-value="0" class="form-check-input" type="checkbox" id="checkbox0" name="eye" value="0" ng-model="form.eye">
                    <label class="form-check-label" for="checkbox0">
                        ปกติ
                    </label>
                </div>
                <div class="form-check">
                    <input ng-true-value="1" class="form-check-input" type="checkbox" id="checkbox1" name="eye" value="1" ng-model="form.eye1">
                    <label class="form-check-label" for="checkbox1">
                        สายตาสั้น
                    </label>
                </div>
                <div class="form-check">
                    <input ng-true-value="2" class="form-check-input" type="checkbox" id="checkbox2" name="eye" value="2" ng-model="form.eye2">
                    <label class="form-check-label" for="checkbox2">
                        สายตายาว
                    </label>
                </div>
                <div class="form-check">
                    <input ng-true-value="3" class="form-check-input" type="checkbox" id="checkbox3" nname="eye" value="3" ng-model="form.eye3">
                    <label class="form-check-label" for="checkbox3">
                        ต้อกระจก
                    </label>
                </div>
                <div class="form-check">
                    <input ng-true-value="4" class="form-check-input" type="checkbox" id="checkbox4" name="eye" value="4" ng-model="form.eye4">
                    <label class="form-check-label" for="checkbox4">
                        ต้อหิน
                    </label>
                </div>
                <div class="form-check">
                    <input ng-true-value="5" class="form-check-input" type="checkbox" id="checkbox5" name="eye" value="5" ng-model="form.eye5">
                    <label class="form-check-label" for="checkbox5">
                        ต้อเนื้อ
                    </label>
                </div>
                <div class="form-check">
                    <input ng-true-value="6" class="form-check-input" type="checkbox" id="checkbox6" name="eye" value="6" ng-model="form.eye6">
                    <label class="form-check-label" for="checkbox6">
                        ต้อลม
                    </label>
                </div>
                <div class="form-check">
                    <input ng-true-value="7" class="form-check-input" type="checkbox" id="checkbox7" name="eye" value="7" ng-model="form.eye7">
                    <label class="form-check-label" for="checkbox7">
                        จอตาเสื่อม
                    </label>
                </div>
                <div class="form-check">
                    <input  class="form-check-input" type="checkbox" id="checkbox8" name="eye"  ng-model="show5">
                    <label class="form-check-label" for="checkbox8">
                        อื่น
                    </label>
                </div>
                <div class="row mb-3" ng-show="show5">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input2" ng-model="form.eye8">
                    </div>
                </div>
                <div class="container">
                    <p>การประเมินคัดกรองโรคซึมเศร้าด้วย 2 คำถาม (2Q)</p>
                    <p> 1. ใน 2 สัปดาห์ที่ผ่านมารวมวันนี้ ท่านรู้สึกหดหู่ เศร้า หรือท้อแท้สิ้นหวังหรือไม่
                    </p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="radio1" name="feel" value="1" ng-model="form.feel">
                        <label class="form-check-label" for="radio1">
                            มี
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="radio1" name="feel" value="2" ng-model="form.feel">
                        <label class="form-check-label" for="radio1">
                            ไม่มี
                        </label>
                    </div>
                </div>

                <div class="container">
                    <p>2. ใน 2 สัปดาห์ที่ผ่านมารวมวันนี้ ท่านรู้สึกเบื่อ ทำอะไรก็ไม่เพลิดเพลินหรือไม่</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="radio3" name="feel_bored" value="1" ng-model="form.feel_bored">
                        <label class="form-check-label" for="radio3">
                            มี
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="radio3" name="feel_bored" value="2" ng-model="form.feel_bored">
                        <label class="form-check-label" for="radio3">
                            ไม่มี
                        </label>
                    </div>
                </div>

                <div class="container">
                    <p>คำตอบจากข้อ 2 ประเมินคัดกรองโรคซึมเศร้า</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="radio5" name="feel_sum" value="2" ng-model="form.feel_sum">
                        <label class="form-check-label" for="radio5">
                            ถูก
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="radio5" name="feel_sum" value="2" ng-model="form.feel_sum">
                        <label class="form-check-label" for="radio5">
                            ผิด
                        </label>
                    </div>
                </div>

                <div class="container">
                    <p>การคัดกรองภาวะกลั้นปัสสาวะ ท่านมีภาวะ "ปัสสาวะเล็ด" หรือ "ปัสสาวะราด"
                        จนทำให้เกิดปัญหาในการใช้ชีวิตประจำวัน</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="radio7" name="urinary" value="1" ng-model="form.urinary">
                        <label class="form-check-label" for="radio7">
                            มี
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="radio7" name="urinary" value="2" ng-model="form.urinary">
                        <label class="form-check-label" for="radio7">
                            ไม่มี
                        </label>
                    </div>
                </div>

                <div class="container">
                    <p> การประเมินปัญหาการนอน </p>
                    <p>(1) ท่านมีปัญหาการนอนหลับ หรือไม่ (เลือกคำตอบได้มากกว่า1ข้อ)</p>
                    <div class="form-check">
                        <input ng-true-value="0" class="form-check-input" type="checkbox" id="checkbox0" name="sleep_detail" value="0" ng-model="form.sleep_detail">
                        <label class="form-check-label" for="checkbox0">
                            ไม่มี
                        </label>
                    </div>
                    <div class="form-check">
                        <input ng-true-value="1" class="form-check-input" type="checkbox" id="checkbox1" name="sleep_detail" value="1" ng-model="form.sleep_detail1">
                        <label class="form-check-label" for="checkbox1">
                            นอนไม่หลับ
                        </label>
                    </div>
                    <div class="form-check">
                        <input ng-true-value="2" class="form-check-input" type="checkbox" id="checkbox2" nname="sleep_detail" value="2" ng-model="form.sleep_detail2">
                        <label class="form-check-label" for="checkbox2">
                            นอนมากเกินไป
                        </label>
                    </div>
                    <div class="form-check">
                        <input ng-true-value="3" class="form-check-input" type="checkbox" id="checkbox3" name="sleep_detail" value="3" ng-model="form.sleep_detail3">
                        <label class="form-check-label" for="checkbox3">
                            นอนกรน
                        </label>
                    </div>
                    <div class="form-check">
                        <input ng-true-value="4" class="form-check-input" type="checkbox" id="checkbox4" name="sleep_detail" value="4" ng-model="form.sleep_detail4">
                        <label class="form-check-label" for="checkbox4">
                            นอนละเมอ
                        </label>
                    </div>
                </div>
                <div class="container">
                    <p>(2) ท่านมีอาการง่วงนอน อ่อนเพลีย ตอนกลางวัน หรือไม่</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="radio7" name="sleep" value="1" ng-model="form.sleep">
                        <label class="form-check-label" for="radio7">
                            มี
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="radio7" name="sleep" value="2" ng-model="form.sleep">
                        <label class="form-check-label" for="radio7">
                            ไม่มี
                        </label>
                    </div>
                </div>
        </div></p>
        <h4 id="scrollspyHeading3">ADL</h4>
        <p>
            <div class="mt-5">
                <p>1. รับประทานอาหารเมื่อเตรียมสำรับไว้ให้เรียบร้อยต่อหน้า</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL1" id="radio0" value="0"
                        ng-model="form.adl1">
                    <label class="form-check-label" for="radio0">
                        ไม่สามารถตักอาหารเข้าปากได้ ต้องมีคนป้อนให้
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL1" id="radio1" value="1"
                        ng-model="form.adl1">
                    <label class="form-check-label" for="radio1">
                        ไม่สามารถตักอาหารเข้าปากได้
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL1" id="radio2" value="2"
                        ng-model="form.adl1">
                    <label class="form-check-label" for="radio2">
                        ตักอาหารและช่วยตัวเองได้เป็นปกติ
                    </label>
                </div>
            </div>
            <div class="mt-5">
                <p>2. ล้างหน้า หวีผม แปรงฟัน โกนหนวด </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL2" id="radio0" value="0"
                        ng-model="form.adl2">
                    <label class="form-check-label" for="radio0">
                        ต้องการความช่วยเหลือ
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL2" id="radio1" value="1"
                        ng-model="form.adl2">
                    <label class="form-check-label" for="radio1">
                        ทำเองได้
                    </label>
                </div>
            </div>
            <div class="mt-5">
                <p>3. ลุกนั่งจากที่นอน หรือจากเตียงไปยังเก้าอี้</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL3" id="radio0" value="0"
                        ng-model="form.adl3">
                    <label class="form-check-label" for="radio0">
                        ทำไม่ได้
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL3" id="radio1" value="1"
                        ng-model="form.adl3">
                    <label class="form-check-label" for="radio1">
                        ต้องการความช่วยเหลืออย่างมาก
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL3" id="radio2" value="2"
                        ng-model="form.adl3">
                    <label class="form-check-label" for="radio2">
                        ต้องการความช่วยเหลือบ้าง
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL3" id="radio1" value="3"
                        ng-model="form.adl3">
                    <label class="form-check-label" for="radio1">
                        ทำได้เอง
                    </label>
                </div>
            </div>
            <div class="mt-5">
                <p>4. ใช้ห้องน้ำ</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL4" id="radio0" value="0"
                        ng-model="form.adl4">
                    <label class="form-check-label" for="radio0">
                        ช่วยตัวเองไม่ได้
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL4" id="radio1" value="1"
                        ng-model="form.adl4">
                    <label class="form-check-label" for="radio1">
                        ทำเองได้บ้าง
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL4" id="radio2" value="2"
                        ng-model="form.adl4">
                    <label class="form-check-label" for="radio2">
                        ช่วยตัวเองได้ดี
                    </label>
                </div>
            </div>
            <div class="mt-5">
                <p>5. การเคลื่อนที่ภายในห้องหรือบ้าน</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL5" id="radio0" value="0"
                        ng-model="form.adl5">
                    <label class="form-check-label" for="radio0">
                        เคลื่อนที่ไปไหนไม่ได้
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL5" id="radio1" value="1"
                        ng-model="form.adl5">
                    <label class="form-check-label" for="radio1">
                        ต้องใช้รถเข็นช่วยตัวเองให้เคลื่อนที่ได้เอง
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL5" id="radio2" value="2"
                        ng-model="form.adl5">
                    <label class="form-check-label" for="radio2">
                        เดินหรือเคลื่อนที่โดยมีคนช่วย
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL5" id="radio2" value="3"
                        ng-model="form.adl5">
                    <label class="form-check-label" for="radio2">
                        เดินหรือเคลื่อนที่ได้เอง
                    </label>
                </div>
            </div>
            <div class="mt-5">
                <p>6. การสวมใส่เสื้อผ้า</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL6" id="radio0" value="0"
                        ng-model="form.adl6">
                    <label class="form-check-label" for="radio0">
                        ต้องมีคนสวมใส่ให้
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL6" id="radio1" value="1"
                        ng-model="form.adl6">
                    <label class="form-check-label" for="radio1">
                        ช่วยตัวเองครึ่งหนึ่ง ที่เหลือต้องมีคนช่วย
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL6" id="radio2" value="2"
                        ng-model="form.adl6">
                    <label class="form-check-label" for="radio2">
                        ช่วยตัวเองได้
                    </label>
                </div>
            </div>
            <div class="mt-5">
                <p>7. การขึ้นลงบันได 1 ชั้น</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL7" id="radio0" value="0"
                        ng-model="form.adl7">
                    <label class="form-check-label" for="radio0">
                        ไม่สามารถทำได้
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL7" id="radio1" value="1"
                        ng-model="form.adl7">
                    <label class="form-check-label" for="radio1">
                        ต้องการคนช่วย
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL7" id="radio2" value="2"
                        ng-model="form.adl7">
                    <label class="form-check-label" for="radio2">
                        ขึ้นลงได้เอง ถ้าต้องใช้เครื่องช่วยเช่นจะต้องเอาขึ้นลงได้ด้วย
                    </label>
                </div>
            </div>
            <div class="mt-5">
                <p>8. การอาบน้ำ</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL8" id="radio0" value="0"
                        ng-model="form.adl8">
                    <label class="form-check-label" for="radio0">
                        ต้องมีคนช่วยหรือทำให้
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL8" id="radio1" value="1"
                        ng-model="form.adl8">
                    <label class="form-check-label" for="radio1">
                        อาบน้ำเองได้
                    </label>
                </div>

            </div>
            <div class="mt-5">
                <p>9. การกลั้นการถ่ายอุจจาระในระยะ 1 สัปดาห์ที่ผ่านมา</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL9" id="radio0" value="0"
                        ng-model="form.adl9">
                    <label class="form-check-label" for="radio0">
                        กลั้นไม่ได้
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL9" id="radio1" value="1"
                        ng-model="form.adl9">
                    <label class="form-check-label" for="radio1">
                        กลั้นไม่ได้บางครั้ง เป็นน้อยกว่า 1 ครั้งต่อสัปดาห์
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL9" id="radio2" value="2"
                        ng-model="form.adl9">
                    <label class="form-check-label" for="radio2">
                        กลั้นได้เป็นปกติ
                    </label>
                </div>
            </div>
            <div class="mt-5">
                <p>10. การกลั้นปัสสาวะในระยะ 1 สัปดาห์ที่ผ่านมา</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL10" id="radio0" value="0"
                        ng-model="form.adl10">
                    <label class="form-check-label" for="radio0">
                        กลั้นไม่ได้
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL10" id="radio1" value="1"
                        ng-model="form.adl10">
                    <label class="form-check-label" for="radio1">
                        กลั้นไม่ได้บางครั้ง เป็นน้อยกว่าวันละ 1 ครั้ง
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ADL10" id="radio2" value="2"
                        ng-model="form.adl10">
                    <label class="form-check-label" for="radio2">
                        กลั้นได้เป็นปกติ
                    </label>
                </div>
            </div>
        </p>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2"></div>
        </div>
        <button type="submit" class="btn btn-primary" >
            บันทึก
        </button>
        </form>
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
</body>
</html>