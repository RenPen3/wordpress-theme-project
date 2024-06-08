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
              <a class="button" href="#works" type="button">LISTEN NOW</a>
            </div>
          </div>
        </section>
        <section class="cards" id="services">
          <div class="stripe stripe1" id="stripe1"></div>
              <div class="cards__content" id="cards_content">
                <div class="cards__content-box">
                    <div class="cards__content-inner">
                      <h2><img src="https://i.ibb.co/HnVV981/web.png" alt="web icon"> Shopify Development</h2>
                      <p>Empower your online presence with my expert Shopify development services. I create responsive, user-friendly, and visually stunning Shopify stores that engage your audience and drive business growth</p>
                    </div>
                </div>
                <div class="cards__content-box">
                    <div class="cards__content-inner">
                      <h2><img src="https://i.ibb.co/6n1kHVh/email.png" alt="email icon">  Email Development</h2>
                      <p>Elevate your email marketing game with my professional email development services. I design and code engaging, personalized and mobile-friendly emails that convert leads into loyal customers</p>
                    </div>
                </div>
                <div class="cards__content-box">
                    <div class="cards__content-inner">
                      <h2><img src="https://i.ibb.co/3FdRrzQ/responsive.png" alt="responsive icon">  Responsive Design</h2>
                      <p>Ensure your email looks great on any device with my responsive design services. I create functional designs that adapt seamlessly to all screen sizes, boosting user experience and engagement</p>
                    </div>
                </div>
              </div>
        </section>  
        <section id="works">
          <div class="works">
            <div class="works__title">
              <h2><span>Streamlined</span> Shopify and Email Development Journey</h2>
              <p>Follow these four steps to witness the evolution of your digital footprint:</p>
              <!-- <p>Embark on a seamless journey with my Web and Email Development Service, designed to transform your online presence and communication strategy. Follow these four steps to witness the evolution of your digital footprint.</p> -->
            </div>
              <div class="works__content">
                <div class="works__inner">
                    <div class="works__inner-card">
                      <h3>Step 1</h3>
                      <h2>Discovery Session</h2>
                      <p>Begin your journey by scheduling a comprehensive discovery session with me. I'll delve into your business goals, target audience, and unique requirements to gain a deep understanding of your vision.</p>
                    </div>
                    <div class="works__inner-card">
                      <h3>Step 2</h3>
                      <h2>Proposal & Planning</h2>
                      <p>Once the discovery phase is complete, I'll craft a detailed proposal outlining the recommended solutions. I emphasize transparency, ensuring you have a clear understanding of the proposed strategies, timelines, and costs.</p>
                    </div>
                    <div class="works__inner-card">
                      <h3>Step 3</h3>
                      <h2>Development & Design</h2>
                      <p>With a solid plan in place, I'll implement my skills in design to bring your vision to life. This phase involves the creation of a visually stunning and highly functional Shopify store, coupled with a customized email infrastructure that enhances your communication capabilities.</p>
                    </div>
                    <div class="works__inner-card">
                      <h3>Step 4</h3>
                      <h2>Testing & Support</h2>
                      <p>Before unveiling your new web and email assets to the world, I rigorously test every aspect to guarantee a flawless user experience. Once satisfied with the results, I'll launch your Shopify store and email campaigns, closely monitoring performance.</p>
                    </div>
                </div>
              </div>
          </div>

        </section>
        <section class="about" id="about">
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
                    <p>My coding journey began with web development courses, and I found direction with CodingPhase, discovering a passion for Shopify and email development. Through meetings and workshops, I built my portfolio, gaining Shopify store creation experience. Networking on LinkedIn led to a breakthrough role. Grateful for mentorship, I'm excited for my career's future. <br><br>Beyond my professional skills, I'm an art lover, a skilled guitarist, and a passionate traveler who immerses in diverse cultures. I find joy in exploring new places and learning new things.</p>
                    <a href="https://www.instagram.com/distantonedesigns/" target="_blank" aria-label="Instagram icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://twitter.com/distant1designs" target="_blank" aria-label="Twitter icon">
                      <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://www.tiktok.com/@distantonedesigns" target="_blank" aria-label="Tik Tok icon">
                      <i class="fa-brands fa-tiktok"></i>
                    </a>
                </div>
              </div>
        </section>
        <section  class="testimonial_container"  id="testimonials">

          <div class="testimonial_title">
            <h4>What do my <br> <span>clients say?</span></h4>
          </div>
          
          <div class="box">

            <div id="jm" class="testimonial_content">
              <div class="testimonial_content-left">
                  <img src="https://i.ibb.co/mGLrrh6/jocelyn.jpg" alt="woman1-Opt" border="0">
              </div>
              <div class="testimonial_content-right">
                  <h2>Jocelyn M.</h2>
                  <h3>CEO | Curvee Brows</h3>
                  <p><i class="fa-solid fa-quote-left"></i> I highly recommend René to anyone looking for top-notch development services. He is the best in the business! <i class="fa-solid fa-quote-right"></i></p>
              </div>
              <div class="divider"></div>
            </div>
  
            <div id="doorways" class="testimonial_content">
              <div class="testimonial_content-left">
                  <img src="https://i.ibb.co/crNS7LX/jessica-hale.jpg" alt="Jessica-Hale" border="0">
              </div>
              <div class="testimonial_content-right">
                  <h2>Jessica Hale</h2>
                  <h3>Comms. Manager | The Doorways</h3>
                  <p><i class="fa-solid fa-quote-left"></i> René goes to great lengths to understand your company’s values & audiences to ensure the content created will be well received. <i class="fa-solid fa-quote-right"></i></p>
              </div>
              <div class="divider"></div>
            </div>

            <div id="propipeteks" class="testimonial_content">
              <div class="testimonial_content-left">
                  <img src="https://i.ibb.co/pn98v9Y/pro-pipe.jpg" alt="Pro Pipe Teks Inc logo" border="0">
              </div>
              <div class="testimonial_content-right">
                  <h2>Jan V.</h2>
                  <h3>CEO | ProPipeTeks, Inc.</h3>
                  <p><i class="fa-solid fa-quote-left"></i> This was my best business experience ever. I believe there are people who really knows their stuff. René is one of them! <i class="fa-solid fa-quote-right"></i></p>
              </div>
              <div class="divider"></div>
            </div>
          </div>
        </section>
        <section class="bad">
          <div class="bad-content">
            <quote> "Not having a website can result in limited online visibility, missed marketing opportunities, and concerns about credibility. It hampers information sharing, reduces customer engagement, and puts businesses at a competitive disadvantage."</quote>
            <p>- The News</p>
          </div>
        </section>
        <section id="customer" class="customer">
          <div class="customer__title">
            <h2> <span>10 Benefits</span> for having a Shopify store</h2>
            <p>Having a Shopify store can provide numerous benefits for a company in today's digital age. Here are ten advantages of having a Shopify store:</p>
          </div>
          <div class="customer-content">
            <div class="customer-content__inner customer-content__inner-reverse">
              <div class="customer-content__left">
                <p><i class="fa-solid fa-square-check"></i> Online Presence</p>
                <p><i class="fa-solid fa-square-check"></i> Increased Visibility</p>
                <p><i class="fa-solid fa-square-check"></i> Credibility and Trust</p>
                <p><i class="fa-solid fa-square-check"></i> Marketing and Branding</p>
                <p><i class="fa-solid fa-square-check"></i> Customer Information</p>
              </div>
               <div class="customer-content__right">
                  <img src="https://i.ibb.co/GTnywNK/basic-plan-1.png" alt="AI Image 1">
              </div>
            </div>
          </div>

          <div class="customer-content">
            <div class="customer-content__inner">
              <div class="customer-content__right">
                <img src="https://i.ibb.co/ggkDN4f/basic-plan-3.png" alt="AI Image 2">
              </div>
                <div class="customer-content__left">
                <p><i class="fa-solid fa-square-check"></i> E-commerce Opportunities</p>
                <p><i class="fa-solid fa-square-check"></i> Cost-Effective Marketing</p>
                <p><i class="fa-solid fa-square-check"></i> Customer Support</p>
                <p><i class="fa-solid fa-square-check"></i> Global Reach</p>
                <p><i class="fa-solid fa-square-check"></i> Competitive Advantage</p>
                </div>
          </div>
            
          </div>

        </section>
        <!-- <section class="portfolio" id='portfolio'>
              <h2>My Portfolio</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita doloremque soluta tenetur quo architecto assumenda accusamus...</p>
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
        </section> -->
        <section class="price_container" id="prices">
          <div class="prices_container__title">
            <h2>Plans</h2>
            <p>For Seamless Shopify and Email Development Solutions</p>
          </div>
          <div class="price_content">
              <div class="price_cards card1">
                <article class="price">
                    <h2 class="text">Basic Plan</h2>
                    <h3>Email Services</h3>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Link your Existing Email Service Provider (ESP) to your Shopify store</p>e"> -->
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Email Design</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Email Template</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i>  Email Automations</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Fill-In Images</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Customize Color, & Font</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Mobile Responsive Design</p>

                </article>
              </div>

              <div id="middle" class="price_cards card2">
                <div class="tag">Most Popular</div>

                <article class="price">
                    <h2 class="text">Premium Plan</h2>
                    <h3>Shopify Store + Email Services</h3>
                    <p><i class="fa-sharp fa-solid fa-check"></i> Set-Up your Shopfiy Store</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Everything in the Basic Plan</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> 5 - 10 Products a Month</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> 5 - 7 Emails a Month</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Stock Photos</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Personalized Consultation</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Ongoing Support for your Shopify Store & Email Template</p>
                </article>
              </div>

              <div class="price_cards card3">
                <article class="price">
                    <h2 class="text">Elite Plan</h2>
                    <h3>Shopify Store + Email Services</h3>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Everything in the Basic Plan</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Inital Shopify Store Set-Up with 1 - 3 Products</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> 3 - 5 Emails</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Stock Photos</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Personalized Consultation</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Fully Tailored Shopify Store & Email Template to Match your Brand</p>
                    <p><i class="fa-sharp fa-solid fa-check" ></i> Ongoing Support for Your Shopify Store & Email Template</p>
                </article>
              </div>
          </div>

        </section>
    </main>


  <?php get_footer(); ?>



    