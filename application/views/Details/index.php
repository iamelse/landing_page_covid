<section class="bg-white m-0 p-0 m-md-5 p-md-5">

    <div class="container">
      <div class="col-lg-12 col-md-12 pt-5 mt-5">
          <div class="card card-inverse border-light shadow-lg rounded" data-aos-duration="1500" data-aos="fade-up">
            
            <div class="row justify-content-center mt-5">

              <div class="col-md-3 p-3 m-md-0 p-md-0">
                <div class="text text-center">
                    <div class="text h1 text-red fw-bold"><?= $arrayOfData[7]; ?></div>
                    <div class="text fw-light">Affected Country</div>
                </div>
              </div>

              <div class="col-md-3 p-3 m-md-0 p-md-0">
                <div class="text text-center">
                    <div class="text h1 text-red fw-bold"><?= $arrayOfData[1]; ?></div>
                    <div class="text text-red mb-2">
                      <small class="light">+<?= $arrayOfData[2]; ?></small>
                    </div>
                    <div class="text fw-light">Confirmed Cases</div>
                </div>
              </div>

              <div class="col-md-3 p-3 m-md-0 p-md-0">
                <div class="text text-center">
                    <div class="text h1 text-green fw-bold"><?= $arrayOfData[5]; ?></div>
                    <div class="text text-green mb-2">
                      <small class="light">+<?= $arrayOfData[6]; ?></small>
                    </div>
                    <div class="text fw-light">Recovered Cases</div>
                </div>
              </div>

              <div class="col-md-3 p-3 m-md-0 p-md-0">
                <div class="text text-center">
                    <div class="text h1 text-red fw-bold"><?= $arrayOfData[3]; ?>
                    </div>
                    <div class="text text-red mb-2">
                      <small class="light">+<?= $arrayOfData[4]; ?></small>
                    </div>
                    <div class="text fw-light">Worldwide Death</div>
                </div>
              </div>

              <div class="text text-center mt-4 pt-4 mb-2 pb-2">
                <div class="text text-dark fw-lighter">
                  <small>*** Updated
                  <?php 
                      date_default_timezone_set('Asia/Jakarta');
                      $date_start = time();
                      $date_end   = $arrayOfData[0];
                      $format_date_start = date("Y-m-d H:i:s", $date_start);
                      $format_date_end = date("Y-m-d H:i:s", round($date_end/1000));

                      $awal  = date_create($format_date_end);
                      $akhir = date_create($format_date_start);
                      $diff  = date_diff( $awal, $akhir );

                      echo $diff->i.' mins ago,';
                  ?>
                    Source: <span class="text text-danger">CoronaNinja</span>
                  </small>
                </div>
              </div>

            </div>
            
          </div>
      </div>
    </div>

</section>

<section class="bg-white mt-5 pt-5 mt-sm-5 pt-sm-5">
    <?php 
        foreach ($historicalC as $key => $value) {
          $label[] = $key;
          $cs[]    = $value;
        }

        foreach ($historicalD as $key => $value) {
          $dt[]    = $value;
        }

        foreach ($historicalR as $key => $value) {
          $rc[]    = $value;
        }
    ?>
    <div class="container">
      <div class="col-lg-12 col-md-12">
          <div class="card card-inverse border-light shadow-lg rounded" data-aos-duration="1500" data-aos="fade-up">
          <div class="text text-center m-3">
            <h3 class="text-banner">Historical Global Data</h3>
          </div>            
          <canvas id="myChart"></canvas>
          <script>
          var ctx = document.getElementById('myChart');
          var myChart = new Chart(ctx, {
              type: 'line',
              data: {
              labels: <?= json_encode($label); ?>,
              datasets: [{
                  label: "Cases",
                  data: <?= json_encode($cs); ?>,
                  borderColor: [
                      'blue'
                  ],
                  borderWidth: 1,
                  fill: false
              },{
                  label: "Death",
                  data: <?= json_encode($dt); ?>,
                  borderColor: [
                      'red'
                  ],
                  borderWidth: 1,
                  fill: false
              },{
                  label: "Recovered",
                  data: <?= json_encode($rc); ?>,
                  borderColor: [
                      'green'
                  ],
                  borderWidth: 1,
                  fill: false
              }]
          },
              options: {
                  scales: {
                      xAxes: [{
                        gridLines: {
                            display: false
                        }
                      }],
                      yAxes: [{
                        gridLines: {
                        display: false
                    },
                          ticks: {
                              beginAtZero: true
                          }
                      }]
                  }
              }
          });
          </script>
            
          </div>
      </div>
    </div>

</section>

<div class="container mt-5 pt-5 mt-sm-5 pt-sm-5">
  <div class="shadow-lg bg-white">
      <div class="table-responsive">
        <table class="table table-borderless p-5 m-5">
          <thead class="text text-center">
            <tr>
              <th>Flags</th>
              <th>Country Name</th>
              <th>Cases</th>
              <th>Today Cases</th>
              <th>Death</th>
              <th>Today Death</th>
              <th>Recovered</th>
              <th>Today Recovered</th>
              <th>Populations</th>
              <th>Continent</th>
            </tr>
          </thead>
          <tbody class="text text-center">
            <?php foreach ($country as $c) : ?>
                <tr>
                  <td>
                    <img src="<?= $c['countryInfo']['flag']; ?>" style="max-width:30px" alt="">
                  </td>
                  <td>
                    <?= $c['country']; ?>
                  </td>
                  <td>
                    <?= $c['cases']; ?>
                  </td>
                  <td>
                    <?= $c['todayCases']; ?>
                  </td>
                  <td>
                    <?= $c['deaths']; ?>
                  </td>
                  <td>
                    <?= $c['todayDeaths']; ?>
                  </td>
                  <td>
                    <?= $c['recovered']; ?>
                  </td>
                  <td>
                    <?= $c['todayRecovered']; ?>
                  </td>
                  <td>
                    <?= $c['population']; ?>
                  </td>
                  <td>
                    <?= $c['continent']; ?>
                  </td>
                </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
  </div>
</div>

<div class="m-3 p-3"></div>