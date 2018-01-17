@extends('layouts.master')
@section('content')

          <h3><i class="fa fa-angle-right"></i> Satışlar Raporu </h3>
          <div class="col-md-12 mt content content-panel">

              <hr>
              <div class="col-md-12 row">
                  <ul>
                  <li class="col-md-4" >FATURA KATEGORİLERİ</li>
                      <li class="col-md-4" style="text-align: center">FATURA KATEGORİLERİ</li>
                      <li class="col-md-4" style="text-align: center">FATURA KATEGORİLERİ</li>
                  </ul>
              </div>
              <div class="col-md-12 row" >
                              <div id="piechart"  style="width: 32%; height: 240px;" class="col-md-4"></div>
                              <div id="piechart2" style="width: 32%; height: 240px;" class="col-md-4"></div>
                              <div id="piechart3" style="width: 32%; height: 240px;" class="col-md-4"></div>
                          </div>
              <div class="col-md-12 row">
                  <ul>
                      <li class="col-md-4" >FATURA KATEGORİLERİ</li>
                      <li class="col-md-4" style="text-align: center">FATURA KATEGORİLERİ</li>
                      <li class="col-md-4" style="text-align: center">FATURA KATEGORİLERİ</li>
                  </ul>
              </div>
              <div class="col-md-12 row">
                  <ul>
                      <li class="col-md-4" >FATURA KATEGORİLERİ</li>
                      <li class="col-md-4" style="text-align: center">FATURA KATEGORİLERİ</li>
                      <li class="col-md-4" style="text-align: center">FATURA KATEGORİLERİ</li>
                  </ul>
              </div>
                        </div>

          <br>
          <br>
          <div class="col-md-12 mt content content-panel">
              <h4>Satışların Dağılımı </h4>

          </div>





          <script type="text/javascript">
              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawChart);

              function drawChart() {

                  var data = google.visualization.arrayToDataTable([
                      ['Effort', 'Amount given'],
                      ['My all',     50],
                      ['My all',     50],
                  ]);

                  var options = {
                      pieHole: 0.5,
                      pieSliceTextStyle: {
                          color: 'black',
                      },
                      legend: 'none'
                  };

                  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                  chart.draw(data, options);
              }
          </script>
          <script type="text/javascript">
              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawChart);

              function drawChart() {

                  var data = google.visualization.arrayToDataTable([
                      ['Effort', 'Amount given'],
                      ['My all',     50],
                      ['My all',     50],
                  ]);

                  var options = {
                      pieHole: 0.5,
                      pieSliceTextStyle: {
                          color: 'black',
                      },
                      legend: 'none'
                  };

                  var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
                  chart.draw(data, options);
              }
          </script>
          <script type="text/javascript">
              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawChart);

              function drawChart() {

                  var data = google.visualization.arrayToDataTable([
                      ['Effort', 'Amount given'],
                      ['My all',     50],
                      ['My all',     50],
                  ]);

                  var options = {
                      pieHole: 0.5,
                      pieSliceTextStyle: {
                          color: 'black',
                      },
                      legend: 'none'
                  };

                  var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
                  chart.draw(data, options);
              }
          </script>

@endsection
