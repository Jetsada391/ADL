<!doctype html>
<html ng-app="statisticApp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"crossorigin="anonymous"></script><link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css">

   <!-- Chart -->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css">

  </head>
  <body  ng-controller="statisticApp" ng-init="" >
    <?php include_once('../../menu.php');?>

         <!-- moo -->
         <main class="inline-block-center"> 
      <div class="container">
        <form ng-submit ="senddata()">
          <div class="row mb-3">
            <div class="col">
              <select name="moo"  class="form-select" ng-model="f.Moo" >
                
                <option value="" selected>ทั้งหมด</option>
                <option value="4">หมู่4</option>
                <option value="5">หมู่5</option>
                <option value="6">หมู่6</option>
                <option value="8">หมู่8</option> 
                <option value="9">หมู่9</option>
                <option value="11">หมู่11</option>
                <option value="13">หมู่13</option>
                <option value="15">หมู่15</option>
                <option value="17">หมู่ที่17</option>
              </select>
            </div>
            <div class="">
              <div class="col">
                <select name="startYear"  class="form-select" ng-model="f.start_year" required>
                  <option value="" selected>ปี</option>
                  <option value="2565">2565</option>
                  <option value="2566">2566</option>
                  <option value="2567">2567</option>
                  <option value="2568">2568</option>
                  <option value="2569">2569</option>
                  <option value="2570">2570</option>
                  <option value="2571">2571</option>
                  <option value="2572">2572</option>
                  <option value="2573">2573</option>
                  <option value="2574">2574</option>
                  <option value="2575">2575</option>
                </select>
              </div>
              <div class="col">
                <label for="to">ถึง</label>
              </div>
              <div class="col">
                <select name="endYear" class="form-select"  ng-model="f.end_year" required>
                  <option value="" selected>ปี</option>
                  <option value="2565">2565</option>
                  <option value="2566">2566</option>
                  <option value="2567">2567</option>
                  <option value="2568">2568</option>
                  <option value="2569">2569</option>
                  <option value="2570">2570</option>
                  <option value="2571">2571</option>
                  <option value="2572">2572</option>
                  <option value="2573">2573</option>
                  <option value="2574">2574</option>
                  <option value="2575">2575</option>
                </select>
              </div>
              <div class="col">
                <select name="adl" class="form-select"  ng-model="f.adl" required>
                  <option value="" selected></option>
                  <option value="" selected>ทั้งหมด</option>
                  <option value="user_input1">ติดสังคม</option>
                  <option value="user_input2">ติดบ้าน</option>
                  <option value="user_input3">ติดเตียง</option>

                </select>
              </div>
            </div>
            <input type="submit" value="ค้นหา">
          </div>
        </main>
        </form>
      </div>
      <!-- .......{{Chartdata}}....... -->
      <div class="container">
      <div class="table-responsive-md">
      <table class="table-striped table-striped">
        <thead>
          <tr ng-show="bo">
            <th scope="col">ปี พ.ศ.</th>
            <th scope="col">หมู่ที่</th>
            <th scope="col">ติดสังคม</th>
            <th scope="col">ติดบ้าน</th>
            <th scope="col">ติดเตียง</th>
            <th scope="col">รวม</th>
          </tr>
        </thead>
        <tbody>
      <!-- moo -->
          <tr ng-repeat="i in bo track by $index">
            <td>{{i.ID_Year}}</td>
            <td>{{i.Moo}}</td>
            <td>{{i.user_input1}}</td>
            <td>{{i.user_input2}}</td>
            <td>{{i.user_input3}}</td>
          </tr>
          <tr ng-show="Chartdata">
            <td></td><td>รวม</td><td>{{temp_sum}}</td>
          </tr>
        </tbody>
</div>
</div>
      </table>
      
      <div>
        <canvas id="myChart"></canvas>
      </div>
  </body>

      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="report.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</html>
