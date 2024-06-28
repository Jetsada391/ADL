<!doctype html>
<html ng-app="statisticApp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css">
  </head>
  <body  ng-controller="statisticApp" ng-init="senddata()">
    <?php include_once('../../menu.php');?>

    <table class="table-striped table-striped">
        <thead>
        
          <tr>
            <th scope="col">ID_Year</th>
            <th scope="col">Resualt_ADL</th>
            <th scope="col">Moo</th>
            <th scope="col">amount</th>
          </tr>
        
        </thead>
        <tbody>

         <!-- Search -->
         <div class="container">
          <form ng-submit="senddata()">
            <div class="row mb-3">
              <label for="inputEmail3" class="col-form-label">กรอกเพื่อค้นหา</label>
              <div class="col-md-7 d-flex">
                <input type="text" class="form-control" id="inputEmail3" ng-model="f.nah" />
                <button type="submit" class="btn btn-primary">ค้นหา</button>
              </div>
            </div>
          </form>
        </div>

      <!-- Search -->

          <tr ng-repeat="i in bo track by $index">
            
            <td>{{i.ID_Year}}</td>
            <td>{{i.Resualt_ADL}}</td>
            <td>{{i.moo}}</td>
            <td>{{i.amount}}</td>
          </tr>
        
          <tr>
            <td></td><td>รวม</td><td>{{temp_sum}}</td>
          </tr>
        </tbody>
      </table>
      
      <div>
        <canvas id="myChart"></canvas>
      </div>
     
  </body>

      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="adl.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</html>
