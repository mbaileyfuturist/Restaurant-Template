<?php

$errors = array('name' => '', 'email' => '', 'phone_number' => '', 'message' => '');

  if(isset($_POST['submit'])){
      
      //Database connection.
      include('config/db_connect.php');

      //Protection from SQLInjection.
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $phoneNumber = mysqli_real_escape_string($conn, $_POST['phone_number']);
      $message = mysqli_real_escape_string($conn, $_POST['message']);

      //Form Validation for empty input.
      if(empty($_POST['name'])){
        $errors['name'] = 'Please enter a valid name.';
      }
      if(empty($_POST['email'])){
        $errors['email'] = 'Please enter a valid email.';
      }
      if(empty($_POST['phone_number'])){
        $errors['phone_number'] = 'Please enter a valid phone number.';
      }
      if(empty($_POST['message'])){
        $errors['message'] = 'Please enter a valid message.';
      }

      if(!$empty){
        //SQL insert query
        $sql = "INSERT INTO experiances(name, email, number, message) VALUES('$name', '$email', '$phoneNumber', '$message')";
      
        //Insert value.
        mysqli_query($conn, $sql);
      }
     
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css"/>
  <title>Restaurant Template</title>
  <link rel = "icon" href="images/tab-logo.png"/>
</head>

<body>

<section class="header">
  <div>
    <div id="logo-header-container" class="logo-header mb-5">
        <img class="logo" src="images/logo.svg">
    </div>

    <nav id="navbar" class="navbar navbar-dark navbar-expand-md">
        <!--Mobile menu-->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <!-- FILL & JUSTIFY -->
          <ul class="nav nav-fill nav-pills nav-list">
            <li class="nav-item">
                <a class="nav-link h4" href="#what-we-beleive">What we Beleive</a>
            </li>
            <li class="nav-item">
                <a class="nav-link h4" href="#meal-times">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link h4" href="#locations">Locations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link h4" href="#contact-us">Contact us</a>
            </li>
          </ul>
      </div>
    </nav>

    <div class="header-phrase row ml-5">
      <h4 class="header-text text-white font-italic font-weight-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit praesentium esse a harum explicabo rerum, quis fugit nostrum, reiciendis magnam provident saepe. Voluptatem qui soluta pariatur quo ab facere culpa.</h4>
    </div>

    <div class="header-buttons row ml-5">
        <a href="#what-we-beleive" class="text-white"><button type="button" class=" mt-5 mr-5 btn btn-lg btn-outline-warning text-white">What we belevie</button></a>
        <a href="#meal-times" class="text-white"><button type="button" class="mt-5 btn btn-lg btn-outline-warning text-white">Menu</button></a>
    </div>
  </div>
</section>

  <!--What we beleive-->
  <section id="what-we-beleive" class="what-we-beleive m-auto">

    <div class = "what-we-beleive-container row">
      <div class="col span-1-of-2">
        <h3 class="section-title text-center">What we beleive</h3>
        <p class="what-we-beleive-text text-center">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor sint ea esse cumque. Et aliquid asperiores, 
          illum explicabo at quas fugit soluta nobis suscipit harum enim minima accusamus aut reiciendis? Lorem, ipsum
          dolor sit amet consectetur adipisicing elit. Consequuntur inventore quo porro distinctio, quam nesciunt 
          molestias molestiae quas sed vitae. 
        </p>
      </div>

      <div class="chef-img-container col span-1-of-2 mt-5">
        <img src="images/chef.jpg" class="chef-img m-auto">
      </div>
    </div>
  </section>

  <!--Meal Times-->
  <section id="meal-times" class="meal-times m-auto bg-dark">
    <div class="meal-times-container m-auto">
      <!-- ACCORDION -->
    <div id="accordion">
        <div class="card m-auto">
          <div class="brunch-card-header" href="#brunch-collapse" data-parent="#accordion" data-toggle="collapse">
            <h5>
              <!--Brunch-->
              <a href="#brunch-collapse" data-parent="#accordion" data-toggle="collapse" id="meal-time-title" class="meal-time-title display-4">
                Brunch
              </a>
            </h5>
          </div>
  
          <div id="brunch-collapse" class="collapse">
            <div class="card-body">
                <table class="table table-secondary">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">price</th>
                        <th scope="col">Calorie Intake</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>eggs benedict</td>
                        <td>25</td>
                        <td>480</td>
                      </tr>
                      <tr>
                        <td>Item2</td>
                        <td>x</td>
                        <td>x</td>
                      </tr>
                      <tr>
                        <td>Item3</td>
                        <td>x</td>
                        <td>x</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
        
        <!--Mid-day-->
        <div class="card m-auto">
          <div class="mid-day-card-header" href="#mid-day-collapse" data-parent="#accordion" data-toggle="collapse">
            <h5 class="text-right">
              <a id="meal-time-title" href="#mid-day-collapse" data-parent="#accordion" data-toggle="collapse" class="meal-time-title display-4">
                Mid-day
              </a>
            </h5>
          </div>
  
          <div id="mid-day-collapse" class="collapse">
            <div class="card-body">
                <div id="brunch-collapse" class="collapse show">
                    <div class="card-body">
                        <table class="table table-secondary">
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">price</th>
                                <th scope="col">Calorie Intake</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Signature Salad</td>
                                <td>20</td>
                                <td>380</td>
                              </tr>
                              <tr>
                                <td>Item2</td>
                                <td>x</td>
                                <td>x</td>
                              </tr>
                              <tr>
                                <td>Item3</td>
                                <td>x</td>
                                <td>x</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                  </div>
            </div>
          </div>
        </div>
  
        <!--Dinner-->
        <div class="card m-auto">
          <div class="dinner-card-header" href="#dinner-collapse" data-parent="#accordion" data-toggle="collapse">
            <h5>
              <a id="meal-time-title" href="#dinner-collapse" data-parent="#accordion" data-toggle="collapse" class="meal-time-title display-4">
                Dinner
              </a>
            </h5>
          </div>
  
          <div id="dinner-collapse" class="collapse">
            <div class="card-body">
                <div id="brunch-collapse" class="collapse show">
                    <div class="card-body">
                        <table class="table table-secondary">
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">price</th>
                                <th scope="col">Calorie Intake</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Fillet Mignon</td>
                                <td>45</td>
                                <td>700</td>
                              </tr>
                              <tr>
                                <td>Item2</td>
                                <td>x</td>
                                <td>x</td>
                              </tr>
                              <tr>
                                <td>Item3</td>
                                <td>x</td>
                                <td>x</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                  </div>
            </div>
          </div>
          
          <!--Deserts-->
          <div class="card">
              <div class="desserts-card-header" href="#dessert-collapse" data-parent="#accordion" data-toggle="collapse">
                <h5 class="text-right">
                  <a id="meal-time-title" href="#dessert-collapse" data-parent="#accordion" data-toggle="collapse" class="meal-time-title display-4"> 
                    Desserts
                  </a>
                </h5>
              </div>
      
              <div id="dessert-collapse" class="collapse">
                <div class="card-body">
                    <div id="brunch-collapse" class="collapse show">
                        <div class="card-body">
                            <table class="table table-secondary">
                                <thead>
                                  <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">price</th>
                                    <th scope="col">Calorie Intake</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Chees Cake</td>
                                    <td>15</td>
                                    <td>250</td>
                                  </tr>
                                  <tr>
                                    <td>Item2</td>
                                    <td>x</td>
                                    <td>x</td>
                                  </tr>
                                  <tr>
                                    <td>Item3</td>
                                    <td>x</td>
                                    <td>x</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                      </div>
                </div>
              </div>
            </div>

            <!--Happy Hour-->
            <div class="card">
                <div class="happy-hour-card-header" href="#happy-hour-collapse" data-parent="#accordion" data-toggle="collapse">
                  <h5>
                    <a id="meal-time-title" href="#happy-hour-collapse" data-parent="#accordion" data-toggle="collapse" class="meal-time-title display-4">
                      Happy Hour
                    </a>
                  </h5>
                </div>
        
                <div id="happy-hour-collapse" class="collapse">
                  <div class="card-body">
                      <div id="brunch-collapse" class="collapse show">
                          <div class="card-body">
                              <table class="table table-secondary">
                                  <thead>
                                    <tr>
                                      <th scope="col">Name</th>
                                      <th scope="col">price</th>
                                      <th scope="col">Calorie Intake</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>cheese slidders</td>
                                      <td>10</td>
                                      <td>250</td>
                                    </tr>
                                    <tr>
                                      <td>Item2</td>
                                      <td>x</td>
                                      <td>x</td>
                                    </tr>
                                    <tr>
                                      <td>Item3</td>
                                      <td>x</td>
                                      <td>x</td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>
                  </div>
                </div>
             </div>

             <!--Beverages-->
             <div class="card">
                <div class="beverages-card-header" href="#beverages-collapse" data-parent="#accordion" data-toggle="collapse">
                  <h5 class="text-right">
                    <a id="meal-time-title" href="#beverages-collapse" data-parent="#accordion" data-toggle="collapse" class="meal-time-title display-4">
                      Beverages
                    </a>
                  </h5>
                </div>
        
                <div id="beverages-collapse" class="collapse">
                  <div class="card-body">
                    
                    <!--Beverage Types-->
                    <div id="accordion">
                        <div class="card">
                          <div class="non-alcohol-card-header">
                              <h5>
                                  <!--non alcoholic-->
                                  <a href="#beverages-collapse" data-parent="#accordion" data-toggle="collapse" class="">
                                    Non-Alcoholic
                                  </a>
                              </h5>
                          </div>
                        </div>
                        
                          <div class="card">
                              <div class="wine-card-header">
                              <h5>
                                  <!--wine-->
                                  <a href="#brunch-collapse" data-parent="#accordion" data-toggle="collapse" class="">
                                    wine
                                  </a>
                              </h5>
                            </div>
                          </div>
                          
                          <div class="card">
                              <div class="beer-card-header">
                              <h5>
                                <!--Beer-->
                                      <a href="#brunch-collapse" data-parent="#accordion" data-toggle="collapse" class="">
                                        Beer
                                      </a>
                              </h5>
                            </div>
                          </div>

                          
                          <div class="card">
                              <div class="beer-card-header">
                              <h5>
                                  <!--Liquor-->
                                  <a href="#brunch-collapse" data-parent="#accordion" data-toggle="collapse" class="">
                                    Liquor
                                  </a>
                              </h5>
                          </div>
                        </div>
                      </div>
            </div>
        </div>
    </div>
  </div>
  </section>

  <!-- Show location using google maps API-->
<section id="locations" class="location m-auto">

    <div id = "location-contents" class="location-contents row">
  
      <div id = "location-information" class="location-information col span-1-of-2">
        <h3 class="location-title text-center">Our Locations</h3>
        <p id="location-description"class="location-description text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo hic
           excepturi aperiam rerum. Earum porro repellendus cumque. Nisi voluptates, obcaecati repudiandae 
           ipsa illo animi iste dolor dolores similique placeat maiores! Lorem ipsum dolor sit amet, consectetur 
           adipisicing elit. Quo, corporis. Ipsam maxime magni ullam vero repellat, suscipit iure, quibusdam dignissimos 
           voluptatem quod at sed fugit inventore. Inventore quis expedita rerum.</p>
      </div>
      
      <div class="map-container col span-1-of-2 mr-3">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24802.30495846947!2d-77.03539693827904!3d39.008740582575456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7cf4e666ae927%3A0x8433a865b29adf!2sSilver%20Spring%2C%20MD!5e0!3m2!1sen!2sus!4v1597330702191!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </section>

  <!--Contact us-->
  <section id="contact-us" class="contact-us m-auto bg-dark">
      <div class="contact-us-contents m-auto row">
  
          <div class="share-your-experiance-text col span-1-of-2">
            <h3 class="contact-title text-white text-center">Share your experiance with us</h3>
            <p id="location-description"class="text-center experiance-description text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo hic
               excepturi aperiam rerum. Earum porro repellendus cumque. Nisi voluptates, obcaecati repudiandae 
               ipsa illo animi iste dolor dolores similique placeat maiores! Lorem ipsum dolor sit amet, consectetur 
               adipisicing elit. Quo, corporis. Ipsam maxime magni ullam vero repellat, suscipit iure, quibusdam dignissimos 
               voluptatem quod at sed fugit inventore. Inventore quis expedita rerum.</p>
          </div>
          
          <div class="contact-us-form m-auto col span-2-of-2">
              <div class="card card-form contact-card border-warning bg-secondary text-center card-form max-width:18rem">
                <div class="card-body">
                  <form action="index.php" method="POST">
                      <div class="form-title text-left">
                          <label class="text-white">Name <p class="text-danger"><?php echo $errors['name'] ?></p></label>
                        </div>
                    <div class="form-group">
                      <input type="text" class="form-control border-warning form-control-md" name="name">
                    </div>
  
                    <div class="form-title text-left">
                        <label class="text-white">email<p class="text-danger"><?php echo $errors['email'] ?></label>
                      </div>
                    <div class="form-group">
                      <input type="email" class="form-control border-warning form-control-md" name="email">
                    </div>
  
                    <div class="form-title text-left">
                        <label class="text-white">Phone number<p class="text-danger"><?php echo $errors['phone_number'] ?></label>
                      </div>

                    <div class="form-group">
                      <input type="text" class="form-control border-warning form-control-md" name="phone_number">
                    </div>
                    
                    <div class="form-title text-left">
                      <label class="text-white">Message<p class="text-danger"><?php echo $errors['message'] ?></label>
                    </div>

                    <div class="form-group ext-left">
                      <textarea rows="4" cols="55" class="form-control border-warning" name="message"></textarea>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-warning ">Submit</button>
                  </form>
                </div>
              </div>
        </div>
    </div>

  </section>

  <!--In the footer put the Social Media Links, address and location.-->
<footer>
    <div class="footer-header m-auto bg-warning">
              
      </div>
      <div class="bottom-footer bg-secondary">
              <div class="row mt-0">
                  <ul class="col span-1-of-2 nav navbar footer-list ml-4 mt-2">
                      <li><h5 class="text-white footer-text">Company Name:</h5></li>
                      <li><p class="text-white footer-text">Current Address</p></li>
                      <li><p class="text-white footer-text">City, State, Zip</p></li>
                      <li><h5 class="text-white footer-text">Company Phone Number:</h5></li>
                      <li><p class="text-white footer-text">Mon - Fri: 10:00am - 11:30pm</p></li>
                  </ul>

                  <ul class="col span-1-of-2 nav navbar footer-nav mt-2 mr-5">
                      <li><a href="#"><ion-icon name="logo-facebook" class="social-logo"></ion-icon></a></li>
                      <li><a href="#"><ion-icon name="logo-twitter" class="social-logo"></ion-icon></a></li>
                      <li><a href="#"><ion-icon name="logo-instagram" class="social-logo"></ion-icon></a></li>
                  </ul>
              </div>
          </div>
          <h6 class="copywrite text-center text-white bg-dark font-weight-light"><a class="footer-link" href="#">&copy; Designed by Micheal Bailey</a></h6>
      </div>
      <div class="footer-header m-auto bg-warning">
              
        </div>
  </footer>


  <!--In House JS-->
  <script src="js/navbar.js"></script>

  <!--Ion Icons-->
  <script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>

  <!--Maps-->
  <script src="js/location.js"></script>
  <!--API KEY GOES HERE-->

  <!--Bootstrap-->
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
</body>

</html>
