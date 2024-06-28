<!doctype html>
<html ng-app="statisticApp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css">
  </head>
  <body  ng-controller="yearlyCtrl" ng-init="senddata()">
    <?php
    include_once('../../menu.php');?>
    <h2>Todo</h2>

    <table class="table-striped table-striped">
        <thead>
          <tr>
            <th scope="col">ID_Year</th>
            <th scope="col">Resualt_ADL</th>
            <th scope="col">amout</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="i in bo track by $index">
            <td>{{i.ID_Year}}</td>
            <td>{{i.Resualt_ADL}}</td>
            <td>{{i.amout}}</td>
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
    <script src="yearly1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</html>

