    <!--HOME START-->      
    <div class="container pt-5">
      
        <div class="row min-vh-100 align-items-center align-content-center">
          
          <div class="col-md-6 mt-5 text-center text-sm-start mt-md-0" data-aos="fade-right" data-aos-duration="2000">
            <span class="badge rounded-pill bg-pink mb-3">
              <div class="text text-danger m-1 fw-lighter">
                <i class="fas fa-info-circle mx-1"></i>Covid-19 Alert
              </div>
            </span>
            <div class="home-text">
              <h1 class="text-banner fw-bold display-3">Save yourself <br> Save the world.</h1>
              <p class="mt-4 text-muted fs-5">Coronavirus disease (COVID-19) is an infectious disease caused by a new virus.</p>
              <a class="btn btn-danger btn-lg mt-3 px-3 rounded-pill fs-6 shadow-lg" href="#">
                <div class="text m-2">Check Symptomps</div>
              </a>
            </div>
          </div>

          <div class="col-md-6 mt-5 mt-md-0" data-aos="fade-left" data-aos-duration="1000">
            <div class="home-img text-center">
              <img class="mw-100" src="<?= base_url(('assets/')) ?>img/hero1_people.png" alt="">
            </div>
          </div>

        </div>

    </div>      
    <!--HOME END-->

    <!--FLOATING CARD 1 START-->
    <section id="floating" class="m-0 p-0 m-md-5 p-md-5">

      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-11 mt-5">
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
                  
                  <div class="text text-dark m-2"><a class="text text-danger fw-bold" style="text-decoration: none;" href="<?= base_url('Details');?>">More details</a>
                  </div>
                </div>
              </div>

            </div>
            
          </div>
      </div>
      </div>
  
    </section>   
    <!--FLOATING CARD 1 END-->

  <section class="about mt-5 pt-5">
    <div class="container">
      <div class="row">
        
        <div class="col-sm-12 col-md-5 mt-5 mt-md-0 mb-5" data-aos="fade-right" data-aos-duration="1500">
          <div class="home-img text-center">
            <img class="mw-100" src="<?= base_url('assets/'); ?>img/virus-conc.png" alt="">
          </div>
        </div>

        <div class="col-sm-12 col-md-7 p-md-0 pt-5 text-center text-sm-start" data-aos="fade-left" data-aos-duration="1500">
          <div class="p-sm-5">
            <span class="badge rounded-pill bg-pink mb-3">
              <div class="text text-danger m-1 mx-1 fw-lighter">
               Covid-19 About
              </div>
            </span>

            <div class="home-text">
              <h1 class="text-banner fw-bold display-6">What is novel coronavirus?</h1>
              <p class="mt-4 text-muted fs-5">
                Coronavirus disease (COVID-19) is an infectious disease caused by a new virus. The disease causes respiratory 
                illness (like the flu) with symptoms such as a cough, fever, and in more severe cases, difficulty breathing.
              </p>
              <p class="mt-4 text-muted fs-5">
                You can protect yourself by washing your hands frequently, avoiding touching your face, 
                and avoiding close contact (1 meter or 3 feet) distances with who are unwell.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="symptomps mt-5 pt-5 bg-light">
    <div class="container">
      <div class="row">
        
        <div class="col-md-6 p-md-0 pt-5 text-center text-sm-start" data-aos="fade-right" data-aos-duration="1500">
          <div class="p-sm-5">
            <span class="badge rounded-pill bg-pink mb-3">
              <div class="text text-danger m-1 fw-lighter">
               Covid-19 Symptomps
              </div>
            </span>

            <div class="home-text">
              <h1 class="text-banner fw-bold display-6">What are the symptoms?</h1>
              <p class="mt-4 text-muted fs-5">
                COVID-19 symptoms range from mild to severe. It takes 2-14 days after exposure 
                for symptoms to develop. Symptoms may include:
              </p>

              <div class="text text-start">
                <div class="row mt-4 text-muted fs-5">
                  <div class="col-md-5 col-12">
  
                    <ul class="list-group">
                      <li class="list-group-item bg-light" style="border: none;"><i class="fas fa-check-circle mx-1 text-green"></i>
                        Hard Cough
                      </li>
                      <li class="list-group-item bg-light" style="border: none;"><i class="fas fa-check-circle mx-1 text-green"></i>
                        Fever
                      </li>
                      <li class="list-group-item bg-light" style="border: none;"><i class="fas fa-check-circle mx-1 text-green"></i>
                        Headache
                      </li>
                    </ul>
  
                  </div>
  
                  <div class="col-md-7 col-12">
                    <ul class="list-group">
                      <li class="list-group-item bg-light" style="border: none;"><i class="fas fa-check-circle mx-1 text-green"></i>
                        Respiratory Distress
                      </li>
                      <li class="list-group-item bg-light" style="border: none;"><i class="fas fa-check-circle mx-1 text-green"></i>
                        Shortness of Breath
                      </li>
                      <li class="list-group-item bg-light" style="border: none;"><i class="fas fa-check-circle mx-1 text-green"></i>
                        Kidney Failure
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-6 mt-5 mb-5" data-aos="fade-left" data-aos-duration="1500">
          <div class="home-img text-center">
            <img class="mw-100" src="<?= base_url('assets/'); ?>img/symptoms.png" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

    <!--MAPS SATRT-->
    <div class="container">

      <div class="col-sm-12 col-md-12 p-md-0 pt-5 text-center justify-content-center" data-aos="fade-left" data-aos-duration="1500">
        <div class="p-sm-5">
          <span class="badge rounded-pill bg-pink mb-3">
            <div class="text text-danger m-1 mx-1 fw-lighter">
              Covid-19 Threat
            </div>
          </span>

          <div class="home-text">
            <h1 class="text-banner fw-bold display-6">More than 59k died in Covid-19</h1>
            <p class="mt-4 text-muted fs-5">
              There are no medications specifically approved for coronavirus. Most people with mild coronavirus :
            </p>
          </div>

         <div class="img col-12 pt-5 mt-5">
          <img class="img-fluid" src="<?= base_url('assets/'); ?>img/map1.svg" alt="">
         </div>
          
        </div>
      </div>

    </div>    
    <!--MAPS END-->

    <!--CONTAGION START-->
    <section class="bg-light mb-5 pb-5">
      <div class="container">
      
        <div class="pt-5"></div>

        <div class="row ms-0 me-0 md-ms-5 md-me-5 md-ps-5 md-pe-5 ps-0 pe-0">
          
            <div class="col-md-6">
                <div class="row">
                
                    <div class="col-sm-12 col-md-6 mt-md-2 mt-4">
                            <div class="card shadow">
                            
                                <div class="image mt-4 pt-4 text-center mw-100">
                                    <img src="<?= base_url('assets/'); ?>img/contagion1.png" alt="">
                                </div>

                                <div class="text text-center text-banner fw-bold m-3">
                                    Animal Contact
                                </div>

                                <div class="text text-center text-banner">
                                    <p><small>Stay at home if you begin to <br> feel unwell, even with mild <br> symptoms nose.</small></p>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 mt-md-4 mt-4">
                            <div class="card shadow">
                            
                                <div class="image mt-4 pt-4 text-center mw-100">
                                    <img src="<?= base_url('assets/'); ?>img/contagion3.png" alt="">
                                </div>

                                <div class="text text-center fw-bold m-3 text-banner">
                                    Air Transmission
                                </div>

                                <div class="text text-center text-banner">
                                    <p><small>Via respiratory droplets <br> produced when infected <br> person coughs or sneezes.</small></p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-sm-12 col-md-6 mt-md-2 mt-4">
                        <div class="card shadow">
                        
                            <div class="image mt-2 pt-4 text-center mw-100">
                                <img src="<?= base_url('assets/'); ?>img/contagion2.png" alt="">
                            </div>

                            <div class="text text-center fw-bold m-3 text-banner">
                                Personal Contact
                            </div>

                            <div class="text text-center text-banner">
                                <p><small>Avoiding contact with others <br> and visits to medical <br> facilities will allow.</small></p>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 mt-md-4 mt-4">
                        <div class="card shadow mb-5">
                        
                            <div class="image mt-4 pt-4 text-center mw-100">
                                <img src="<?= base_url('assets/'); ?>img/contagion4.png" alt="">
                            </div>

                            <div class="text text-center fw-bold m-3 text-banner">
                                Contaminate Object
                            </div>

                            <div class="text text-center text-banner">
                                <p><small>Call in advance and tell your <br> provider of any recent travel <br> or contact.</small></p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

          <div class="col-md-6 p-md-0 pt-5 text-center text-sm-start">
            <div class="p-sm-5">
              <span class="badge rounded-pill bg-pink mb-3">
                <div class="text text-danger m-1 mx-1 fw-lighter">
                  Covid-19 Contagion
                </div>
              </span>
  
              <div class="home-text">
                <h1 class="text-banner fw-bold display-6">How does novel coronavirus spread?</h1>
                <p class="mt-4 text-muted fs-5">
                  Health experts are still learning the details. Currently, it is thought to spread:
                </p>
  
                <div class="text text-start">
                  <div class="row mt-4 text-white fs-5">
                    <div class="col-md col-12">
  
                      <div>
                        <div class="text text-muted m-3">
                          <div><i class="fas fa-check-circle mx-1 text-green"></i> Via respiratory droplets produced when an infected person coughs or sneezes. </div>
                        </div>
  
                        <div class="text text-muted m-3">
                          <div><i class="fas fa-check-circle mx-1 text-green"></i> Between people who are in close contact with one another (within about 6 feet). </div>
                        </div>
                      </div>
    
                    </div>
                  </div>
                </div>
  
              </div>
            </div>
          </div>

        </div>  

      </div>
    </div> 
    </section>   
    <!--CONTAGION END-->

    <!--PREVENTION START-->
    <div class="container">

      <div class="col-sm-12 col-md-12 p-md-0 pt-5 text-center justify-content-center" data-aos="fade-left" data-aos-duration="1500">
        <div class="p-sm-5">
          <span class="badge rounded-pill bg-pink mb-3">
            <div class="text text-danger m-1 mx-1 fw-lighter">
              Covid-19 Preventions
            </div>
          </span>

          <div class="home-text">
            <h1 class="text-banner fw-bold display-6">How can I protect myself from Covid-19?</h1>
            <p class="mt-4 text-muted fs-5">
              If you are traveling overseas (to China but also to other places)
              follow the CDC’s guidance:
            </p>
          </div>

          <div class="row col-sm-12 col-md-12 pt-5 mt-5">
            <div class="col-md-6 mb-5">
              <h5 class="text-start fw-bold">What you <span class="text text-green">should do:</span></h5>

              <div class="pt-5"></div>

              <div class="col-sm-6 col-md-12"> 
                <div class="card shadow-sm border-0 card-1">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <div class="card shadow m-2 rounded-3 border-0" style="width: 6rem; height: 6rem;">
                            <img class="m-3" src="<?= base_url('assets/'); ?>img/service1.png" alt="">
                          </div>
                        </div>
                        <div class="media-body text-start ps-3">
                          <h5 class="judul-card-1 fw-bold">Wear Face Mask</h5>
                          <p class="text-muted">Wash hands often with soap and water. If not available, use hand sanitizer.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="pt-4"></div>

              <div class="col-sm-6 col-md-12"> 
                <div class="card shadow-sm border-0 card-1">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <div class="card shadow m-2 rounded-3 border-0" style="width: 6rem; height: 6rem;">
                            <img class="m-1" src="<?= base_url('assets/'); ?>img/service2.png" alt="">
                          </div>
                        </div>
                        <div class="media-body text-start ps-3">
                          <h5 class="judul-card-1 fw-bold">Cover Face When Coughing</h5>
                          <p class="text-muted">Cover your mouth/nose with a tissue or sleeve when coughing or sneezing.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="pt-4"></div>
          
              <div class="col-sm-6 col-md-12"> 
                <div class="card shadow-sm border-0 card-1">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <div class="card shadow m-2 rounded-3 border-0" style="width: 6rem; height: 6rem;">
                            <img class="m-2" src="<?= base_url('assets/'); ?>img/service3.png" alt="">
                          </div>
                        </div>
                        <div class="media-body text-start ps-3">
                          <h5 class="judul-card-1 fw-bold">Wash Your Hand Frequently</h5>
                          <p class="text-muted">Wash hands often with soap and water. If not available, use hand sanitizer.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>              

            </div>

            <!--WHAT YOU SHOULDN'T DO-->
            <div class="col-md-6 mb-5">
              <h5 class="text-start fw-bold">What you <span class="text text-danger">shouldn't do:</span></h5>

              <div class="pt-5"></div>

              <div class="col-sm-6 col-md-12"> 
                <div class="card shadow-sm border-0 card-1">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <div class="card shadow m-2 rounded-3 border-0" style="width: 6rem; height: 6rem;">
                            <img class="m-2" src="<?= base_url('assets/'); ?>img/service4.png" alt="">
                          </div>
                        </div>
                        <div class="media-body text-start ps-3">
                          <h5 class="judul-card-1 fw-bold">Avoid Animal Contact</h5>
                          <p class="text-muted">Wash hands often with soap and water. If not available, use hand sanitizer.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="pt-4"></div>

              <div class="col-sm-6 col-md-12"> 
                <div class="card shadow-sm border-0 card-1">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <div class="card shadow m-2 rounded-3 border-0" style="width: 6rem; height: 6rem;">
                            <img class="m-3" src="<?= base_url('assets/'); ?>img/service5.png" alt="">
                          </div>
                        </div>
                        <div class="media-body text-start ps-3">
                          <h5 class="judul-card-1 fw-bold">Avoid Markets and Crowd</h5>
                          <p class="text-muted">Cover your mouth/nose with a tissue or sleeve when coughing or sneezing.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="pt-4"></div>
          
              <div class="col-sm-6 col-md-12"> 
                <div class="card shadow-sm border-0 card-1">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <div class="card shadow m-2 rounded-3 border-0" style="width: 6rem; height: 6rem;">
                            <img class="m-3" src="<?= base_url('assets/'); ?>img/service6.png" alt="">
                          </div>
                        </div>
                        <div class="media-body text-start ps-3">
                          <h5 class="judul-card-1 fw-bold">Seek Medical Care</h5>
                          <p class="text-muted">Wash hands often with soap and water. If not available, use hand sanitizer.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>              

            </div>

          </div>            


         </div>
          
        </div>
      </div>
    </div>    
    <!--PREVENTION END-->

    <div class="pb-5 mb-5"></div>
    <div class="pb-5 mb-5"></div>
    <div class="row bg-dark-blue justify-content-center">
        <div id="floating-card" class="col-sm-10 col-md-10">
            <div class="row text-center">
                <div class="col-sm pb-2">
                    <div class="card shadow">
                        <div class="card-body d-flex flex-column align-items-center mb-4">
                            <h1 class="fw-bold mt-3 ms-3 me-3 mb-3">Want to test Covid-19?</h1>
                            <p class="col-sm-8 col-md-7 fs-5 text-muted">Our goal at Our World in Data is to provide testing data over time for many countries around the world.</p>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 mt-3">
                                    <a style="width: 190px;" class="btn btn-lg btn-outline-danger rounded-pill" href="#!" role="button">
                                        <i class="fas fa-phone-alt me-2" style="margin-top: 10px; margin-bottom: 10px;"></i>Call For Test
                                    </a>  
                                </div>
                                <div class="col-sm-12 col-md-6 mt-3">
                                    <a style="width: 190px;" class="btn btn-lg btn-outline-danger rounded-pill" href="#!" role="button">
                                        <i class="fas fa-calendar-check me-2" style="margin-top: 10px; margin-bottom: 10px;"></i></i>Book Doctor
                                    </a>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 pt-5 mt-5">
            <div class="row text-start p-5 m-5">
                <div class="col-md-3">
                    <h4 class="text-white mb-4">CovTrack</h4>
                    <small class="fw-light text-white">Coronavirus disease (COVID-19) is an infectious disease caused by a new virus. The disease causes.</small>
                </div>
        
                <div class="col-md-3">
                    <h4 class="text-white fw-bold mb-4">About Us</h4>
                    <a class="footer-list text-white" style="text-decoration:none;" href="">Home</a> <br>
                    <a class="footer-list text-white" style="text-decoration:none;" href="">About</a> <br>
                    <a class="footer-list text-white" style="text-decoration:none;" href="">Service</a> <br>
                    <a class="footer-list text-white" style="text-decoration:none;" href="">Portofolio</a>  <br>
                    <a class="footer-list text-white" style="text-decoration:none;" href="">News Feed</a>  <br>
                </div>
        
                <div class="col-md-3">
                    <h4 class="text-white fw-bold mb-4">Usefull Links</h4>
                    <a class="footer-list text-white" style="text-decoration:none;" href="">WHO Information</a> <br>
                    <a class="footer-list text-white" style="text-decoration:none;" href="">Covid-19 Wikipedia</a> <br>
                    <a class="footer-list text-white" style="text-decoration:none;" href="">Service</a> <br>
                    <a class="footer-list text-white" style="text-decoration:none;" href="">CNN News</a>  <br>
                    <a class="footer-list text-white" style="text-decoration:none;" href="">Worldometer Info</a>  <br>
                </div>
        
                <div class="col-md-3">
                    <h4 class="text-white fw-bold">Contact Us</h4>
                </div>
            </div>
        </div>

    </div>        