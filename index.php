<?php
// function dd($data) {
//   echo '<pre>';
//   die(var_dump($data));
//   echo '</pre>';
// }

// $formError = false;

//   try {
//     $pdo = new PDO("mysql:host=127.0.0.1;dbname=distantone_db", "root", "");
//     echo "Connected Successfully";
//   } catch (PDOException $e) {
//     $e->getMessage();
//     echo "Connection Failed";
//   }

//   $statement = $pdo->prepare('select * from sender');
//   $statement->execute();
//   $allEmails = $statement->fetchAll(PDO::FETCH_OBJ);



//   if($_SERVER["REQUEST_METHOD"] == "POST") {
//     if($_POST["email"] != '') {
//     $data = [
//       "name" => $_POST["name"],
//       "email" => $_POST["email"],
//       // "message" => $_POST["message"],
//     ];
//     $statement = $pdo->prepare("INSERT INTO sender (name, email)
//     VALUES (:name, :email)");
//     }    
    
//   }
?>

  <?php get_header(); ?>

    <main>
        <section class="main_container" id="main_con" >
          <div class="content_two" >
            <div class="left">
              <small>WELCOME TO</small>
              <h1>[<span> RDPK</span> VICE ]</h1>
              <h3>CONGRADULATIONS, YOU'RE LOST!</h3>
              <div class="btn-overlay"></div>
              <a class="button" href="#events" type="button">LISTEN NOW</a>
            </div>
          </div>
          <div class="shape shape1" id="shape1"></div>
        </section>

        <section class="music" id="services">
        <h2>[ MUSIC ]</h2>
              <div class="music__content" id="music_content">

                <div class="music__content-box">
                  <div class="music__content-left">
                    <h2>Title 1</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nesciunt voluptate suscipit unde repellendus adipisci officiis itaque tenetur quis ad, sint necessitatibus omnis aspernatur quaerat quos sunt hic, magnam rem.</p>
                    <a class="music__content-btn" href="#">btn 1</a>
                    <a class="music__content-btn music__content-btn2" href="#">btn 2</a>
                  </div>
                  <div class="music__content-right">
                    <img src="https://i.ibb.co/m6hxLqm/device-mockup.jpg" alt="right image">
                  </div>

                </div>

                <div class="music__content-box">
                  <div class="music__content-left">
                    <h2>Title 2</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nesciunt voluptate suscipit unde repellendus adipisci officiis itaque tenetur quis ad, sint necessitatibus omnis aspernatur quaerat quos sunt hic, magnam rem.</p>
                    <a class="music__content-btn" href="#">btn 1</a>
                    <a href="#">btn 2</a>
                  </div>
                  <div class="music__content-right">
                    <img src="https://i.ibb.co/m6hxLqm/device-mockup.jpg" alt="right image">
                  </div>

                </div>
               
              </div>
        <div class="shape shape2" id="shape2"></div>

        </section>  

        <section id="events">
          <div class="events">
            <div class="events__title">
              <h2>[ EVENTS]</h2>
            </div>
              <div class="events__content">
                <div class="events__inner">
                    <div class="events__inner-card">
                      <div class="events__inner-date">
                        <h3>30</h3>
                        <h2>Nov 2024</h2>
                      </div>
                      <div class="events__inner-info">
                      <p>BERGHAIN — BERLIN, GERMANY</p>
                      <h2>TECHNO COMBUSTION</h2>
                      <small>DAN AKROID, JEFF MILLS, ADAM BEYER</small>


                      </div>

                      <div class="">
                        <button>Details</button>
                      </div>
                     
                    </div>
                </div>
              </div>
            <a href="#" class="btn"> button</a>

          </div>

        </section>

        <!-- <section class="about" id="about">
          <div class="about__purple"></div>
              <div class="about__content">
                <div class="about__content-left">
                    <img src="https://i.ibb.co/wQr8wFJ/meme.webp" alt="Rene's image sitting with laptop on desk" alt="Rene D Perez image">
                </div>
                <div class="about__content-right">
                    <div class="about__content-inner">
                      <h2>About me & </h2>
                      <h3>my journey</h3>
                    </div>
                    <p>My coding journey began with web development courses, and I found direction with CodingPhase, discovering a passion for Shopify and email development. Through meetings and eventshops, I built my portfolio, gaining Shopify store creation experience. Networking on LinkedIn led to a breakthrough role. Grateful for mentorship, I'm excited for my career's future. <br><br>Beyond my professional skills, I'm an art lover, a skilled guitarist, and a passionate traveler who immerses in diverse cultures. I find joy in exploring new places and learning new things.</p>
                    <a href="https://www.instagram.com/distantonedesigns/" target="_blank" aria-label="Instagram icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://twitter.com/distant1designs" target="_blank" aria-label="Twitter icon">
                      <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://www.tiktok.com/@distantonedesigns" target="_blank" aria-label="Tik Tok icon">
                      <i class="fa-brands fa-tiktok"></i>
                    </a>
                </div>
              </div>
        </section> -->

        <section  class="podcast_container"  id="podcast">
        <div class="shape shape3" id="shape3"></div>

          <div class="podcast_title">
            <h2>[ PODCAST ]</h2>
          </div>
          
          <div class="box">

            <div id="jm" class="podcast_content">
              <div class="podcast_content-left">
                  <img src="https://i.ibb.co/mGLrrh6/jocelyn.jpg" alt="woman1-Opt" border="0">
              </div>
              <div class="podcast_content-right">
                  <h2>Jocelyn M.</h2>
                  <h3>CEO | Curvee Brows</h3>
                  <p><i class="fa-solid fa-quote-left"></i> I highly recommend René to anyone looking for top-notch development services. He is the best in the business! <i class="fa-solid fa-quote-right"></i></p>
              </div>
              <div class="divider"></div>
            </div>
  
            <div id="doorways" class="podcast_content">
              <div class="podcast_content-left">
                  <img src="https://i.ibb.co/crNS7LX/jessica-hale.jpg" alt="Jessica-Hale" border="0">
              </div>
              <div class="podcast_content-right">
                  <h2>Jessica Hale</h2>
                  <h3>Comms. Manager | The Doorways</h3>
                  <p><i class="fa-solid fa-quote-left"></i> René goes to great lengths to understand your company’s values & audiences to ensure the content created will be well received. <i class="fa-solid fa-quote-right"></i></p>
              </div>
              <div class="divider"></div>
            </div>

            <div id="propipeteks" class="podcast_content">
              <div class="podcast_content-left">
                  <img src="https://i.ibb.co/pn98v9Y/pro-pipe.jpg" alt="Pro Pipe Teks Inc logo" border="0">
              </div>
              <div class="podcast_content-right">
                  <h2>Jan V.</h2>
                  <h3>CEO | ProPipeTeks, Inc.</h3>
                  <p><i class="fa-solid fa-quote-left"></i> This was my best business experience ever. I believe there are people who really knows their stuff. René is one of them! <i class="fa-solid fa-quote-right"></i></p>
              </div>
              <div class="divider"></div>
            </div>
          </div>
        </section>
        
        <section class="portfolio" id='portfolio'>
              <div class="portfolio__content">
                <div class="portfolio__content-project">
                  <img src="https://placehold.co/428x510" alt="placehold">
                </div>
                <div class="portfolio__content-project">
                  <img src="https://placehold.co/428x510" alt="placehold">
                </div>
                <div class="portfolio__content-project">
                  <img src="https://placehold.co/428x510" alt="placehold">
                </div>
                <div class="portfolio__content-project">
                  <img src="https://placehold.co/428x510" alt="placehold">
                </div>
              </div>
        </section>

        <section class="form" id='form'>
              <div class="form__content">
                <h1>Form Section</h1>
              </div>
        </section>
    </main>


  <?php get_footer(); ?>



    