<nav class="navbar navbar-expand-lg bg-light"> 
         <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar scroll</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="page1.html">หน้าหลัก</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="view.html">ประวัติส่วนตัว</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  จักการข้อมูลผู้สูงอายุ
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./personal/personal_view.php">ทะเบียนผู้สูงอายุ</a></li>
                  <li><a class="dropdown-item" href="./health_info/health_view.php">ข้อมูลการประเมินสภาวะสุขภาพ</a></li>
                  <li><a class="dropdown-item" href="./adl/adl_view.php">ADL</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="./chronic_disease/chronic_disease_view.php">โรคประจำตัว</a></li>
                  <li><a class="dropdown-item" href="./preexisting_condition/preexisting_condition_view.php">สถานที่รับการรักษา โรคประจำตัว </a></li>
                  <li><a class="dropdown-item" href="./phydis/phydis_view.php">ความพิการของร่างกาย</a></li>
                  <li><a class="dropdown-item" href="./eye_results/eye_results_view.php">ผลการคัดกรองสายตา</a></li>
                  <li><a class="dropdown-item" href="./sleep_detail/sleep_detail_view.php">การประเมินปัญหาการนอน</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="./income_info2/income_view.php">แหล่งรายได้</a></li>
                  <li><a class="dropdown-item" href="./occupation/occupation_view.php">อาชีพ</a></li>
                  <li><a class="dropdown-item" href="./situation/situation_view.php">สถานการณ์อยู่อาศัย</a></li>
                  <li><a class="dropdown-item" href="./social_info/social_info_view.php">บทบาททางสังคมปัจจุบัน</a></li>
                </ul>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="../user/view2.php">แบบประเมิน</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ประวัติการกรอกแบบประเมิน
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">2565</a></li>
                  <li><a class="dropdown-item" href="#">2566</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
             
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  รายงาน
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./report/report/report_view.php">รายงานประวัติผู้ป่วยแยกตามADL</a></li>
                  <li><a class="dropdown-item" href="./report/reportpersonal/reportpersonal_view.php">รายงานรายงานชื่อผู้ป่วยADL</a></li>
                  <li><a class="dropdown-item" href="./report/New/report_view.php">new</a></li>
                </ul>
              </li>
            </ul>
            
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">ค้นหา</button>
              
            </form>
          </div>
      </nav>