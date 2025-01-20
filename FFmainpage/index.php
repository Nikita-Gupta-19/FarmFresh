<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmFresh</title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- header section starts  -->

    <header class="header">
      <img src="farmfresh.jpeg" 
     height="100px" width="100px" alt="" style="border-radius: 70%;">

      <a href="#" class="logo">
        <i class="fas fa-seedling"></i> FarmFresh
      </a>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#categories">categories</a>
        <a href="#products">products</a>
        <a href="#learn">Learn</a>
        <a href="#about">Team</a>
        
      </nav>

       <div class="">
        <div class="fas fa-bars" id="menu-btn" style="display: none; background-color: rgb(255, 255, 255); padding: 20px; text-align: center;"></div>
        <div class="fas fa-search" id="search-btn" style="display: none; background-color: rgb(255, 255, 255); padding: 20px; text-align: center;"></div>
        <div class="fas fa-shopping-cart" id="cart-btn" style="display: none; background-color: rgb(255, 255, 255); padding: 20px; text-align: center;"></div>
        <div class="fas fa-user" id="login-btn" style="display: none; background-color: rgb(255, 255, 255); padding: 20px; text-align: center;"></div>
       </div>

       <div> <button onclick="openFarmFresh()">Login/SignUp</button></div>
       
      </div>
      

      
    </header>

  
 

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="content">
        <h3><span>fresh</span> and <span>organic</span> products for you</h3>
        <p>
          From our Farm to your Home without any intermediaries
        </p>
        
      </div>
    </section>

    <!-- home section ends -->
    
    

    <!-- features section starts  -->

    <section class="features" id="features">
      <h1 class="heading">our <span>features</span></h1>

      <div class="box-container">
        <div class="box">
          <img src="https://images.unsplash.com/photo-1461354464878-ad92f492a5a0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" />
          <h3>fresh and organic</h3>
          <p>
            Here,we sell all the fresh and organic products
          </p>
        </div>

        <div class="box">
          <img src="https://images.unsplash.com/photo-1595246140625-573b715d11dc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" />
          <h3>fast delivery</h3>
          <p>
            All the organic products to your doorstep
          </p>
            
          </div>

        <div class="box">
          <img src="https://images.unsplash.com/photo-1628527304948-06157ee3c8a6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" />
          <h3>Guidance</h3>
          <p>
            Learn and Earn...
          </p>
            
          </div>
      </div>
    </section>

    <!-- features section ends -->
    
    <!-- categories section starts  -->

    <section class="categories" id="categories">
      <h1 class="heading">product <span>categories</span></h1>

      <div class="box-container">
        <div class="box">
          <img src="https://images.healthshots.com/healthshots/en/uploads/2024/05/15135824/vegetables-for-breakfast-1-1.jpg" alt="" />
          <h3>vegetables</h3>
          <p>organically harvested veggies</p>
        </div>

        <div class="box">
          <img src="https://nurserylive.com/cdn/shop/articles/assortment-of-colorful-ripe-tropical-fruits-top-royalty-free-image-995518546-1564092355-816049.jpg?v=1679747958" alt="" />
          <h3>fresh fruits</h3>
          <p>naturally produced fruits</p>
        </div>

        <div class="box">
          <img src="https://hips.hearstapps.com/hmg-prod/images/gettyimages-611609590-6627de2d8c0bb.jpg" alt="" />
          <h3>Grains</h3>
          <p>freshly produced grains from our farms to your table</p>
        </div>
      </div>
    </section>

    <!-- categories section ends -->

    <!-- products section starts  -->

    <section class="products" id="products">
      <h1 class="heading">Market<span>Prices</span></h1>

      <div class="swiper product-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="https://insanelygoodrecipes.com/wp-content/uploads/2023/01/Fresh_Organic_Tangerine_Oranges_with_Leaves-500x375.jpg" alt="" />
            <h3>fresh orange</h3>
            <div class="price">₹70/- 169.99/-</div>
            <div class="stars">
             
            </div>
           
          </div>

          <div class="swiper-slide box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR72ctIeVztN5l6MODTQsV6SplFKCJKOFb1gg&s" alt="" />
            <h3>fresh onion</h3>
            <div class="price">₹24/- 69.99/-</div>
            <div class="stars">
              
            </div>
            
          </div>

          

          <div class="swiper-slide box">
            <img src="https://www.growingproduce.com/wp-content/uploads/2024/09/3610-Cabbage-Bejo_gallery-849x576.jpg" alt="" />
            <h3>fresh cabbage</h3>
            <div class="price">₹54/- 80/-</div>
            <div class="stars">
             
            </div>
           
          </div>
        </div>
      </div>

      <div class="swiper product-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="https://www.jiomart.com/images/product/original/590003516/potato-1-kg-product-images-o590003516-p590003516-0-202408070949.jpg?im=Resize=(420,420)" alt="" />
            <h3>fresh potato</h3>
            <div class="price">₹14/- 30.99/-</div>
            <div class="stars">
              
            </div>
            
          </div>

          

          <div class="swiper-slide box">
            <img src="https://www.bhg.com/thmb/rCjM-NJphWls3OAOJXSyjmkodnQ=/1244x0/filters:no_upscale():strip_icc()/static.onecms.io__wp-content__uploads__sites__37__2020__04__30__carrots-106dce5c-74aa64b81c184bffb80b7381b72615a1.jpg" alt="" />
            <h3>fresh carrot</h3>
            <div class="price">₹25/- 55/-</div>
            <div class="stars">
             
            </div>
            
          </div>

          <div class="swiper-slide box">
            <img src="https://www.pixcrafter.com/wp-content/uploads/2023/12/natural-fresh-green-lemons.jpg" alt="" />
            <h3>green lemon</h3>
            <div class="price">₹4/-14/-</div>
            <div class="stars">
              
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <!-- products section ends -->
    
    <style>
      /* Container styling */
      .container {
        flex: 1; /* Make the input grow to fill space */
        padding: 18px 20px;
        font-size: 18px;
        font-family: 'Arial', sans-serif;
        border: 2px solid #ccc;
        border-radius: 50px; /* Large rounded edges */
        outline: none;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Soft shadow for floating effect */
        width: 100%; /* Ensure it resizes properly on smaller screens */
      }
    
      
      /* Input field styling */
      #city {
        flex: 1; /* Make the input grow to fill space */
        padding: 18px 20px;
        font-size: 18px;
        font-family: 'Arial', sans-serif;
        border: 2px solid #ccc;
        border-radius: 50px; /* Large rounded edges */
        outline: none;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Soft shadow for floating effect */
        width: 70%; /* Ensure it resizes properly on smaller screens */
      }

      #videoTitle {
        flex: 1; /* Make the input grow to fill space */
        padding: 18px 20px;
        font-size: 18px;
        font-family: 'Arial', sans-serif;
        border: 2px solid #ccc;
        border-radius: 50px; /* Large rounded edges */
        outline: none;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Soft shadow for floating effect */
        width: 70%; /* Ensure it resizes properly on smaller screens */
      }

    
      #city:focus {
        border-color: #4caf50; /* Highlight border on focus */
        box-shadow: 0 0 10px rgba(76, 175, 80, 0.5);
      }
    
      /* Button styling */
      button {
        padding: 18px 30px;
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        background-color: #4caf50;
        border: none;
        border-radius: 50px; /* Matches the input style */
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
      }
    
      button:hover {
        background-color: #45a049; /* Slightly darker green on hover */
        transform: scale(1.05); /* Slight increase in size on hover */
      }
    
      button:active {
        background-color: #3e8e41; /* Darker green on click */
        transform: scale(1); /* Reset scale when clicked */
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2); /* Reduced shadow on click */
      }
    
      /* Weather output styling */
      #weather {
        margin-top: 30px;
        text-align: center;
        font-size: 20px;
        font-family: 'Arial', sans-serif;
        color: #555;
      }
    
      /* Responsive Design */
      @media (max-width: 768px) {
        .container {
          flex-direction: column; /* Stack items vertically */
          gap: 20px;
        }
    
        #city {
          width: 100%; /* Full width on smaller screens */
        }
    
        button {
          width: 100%; /* Full width for consistency */
        }
      }
    </style>
    
    <!--learn section starts-->
    <section class="learn" id="learn">
      <h1 class="heading">Visit & <span>Learn</span></h1>

      <div class="box-container">
        <div class="box">

          <h3>Search and Watch</h3>
          <div class="container">
            <div class="box">
              <img src="https://eu-images.contentstack.com/v3/assets/bltdd43779342bd9107/blt1645b96b020bdced/64380d5d8d2c523d0da7467d/543212762.jpg?width=1280&auto=webp&quality=95&format=jpg&disable=upscale" alt ="">
                <h1>Video Search</h1>
                <input type="text" id="videoTitle" placeholder="Enter YouTube video title">
                <button onclick="searchVideo()">Search Video</button>

                <div id="videoDetails">
                
                </div>
        </div>
        <script>
          const apiKey = "AIzaSyACjNRrSH7sz-zGqOOvnSf_6VoHjwucPQA"; // Replace with your YouTube API key
        
          function searchVideo() {
            const title = document.getElementById("videoTitle").value.trim();
            if (!title) {
              alert("Please enter keywords related to agriculture or sustainability.");
              return;
            }
        
            // Add agriculture and sustainability filters
            const keywords = `${title} agriculture sustainability`;
            const url = `https://www.googleapis.com/youtube/v3/search?part=snippet&q=${encodeURIComponent(keywords)}&type=video&maxResults=5&key=${apiKey}`;
        
            fetch(url)
              .then(response => response.json())
              .then(data => {
                if (data.items && data.items.length > 0) {
                  let videoContent = '';
                  data.items.forEach(video => {
                    const videoId = video.id.videoId;
                    const videoTitle = video.snippet.title;
                    const videoDescription = video.snippet.description;
        
                    videoContent += `
                      <div class="video">
                        <h3>${videoTitle}</h3>
                        <iframe src="https://www.youtube.com/embed/${videoId}" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p>${videoDescription}</p>
                      </div>
                    `;
                  });
        
                  document.getElementById("videoDetails").innerHTML = videoContent;
                } else {
                  document.getElementById("videoDetails").innerHTML = "<p class='error'>No videos found. Please try different keywords.</p>";
                }
              })
              .catch(error => {
                console.error("Error fetching video data:", error);
                document.getElementById("videoDetails").innerHTML = "<p class='error'>There was an error fetching video details. Please try again later.</p>";
              });
          }
        </script>
<br>
<h3>Weather Updates</h3>
        <div class="box">
          
          <img src="https://images.unsplash.com/photo-1592210454359-9043f067919b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" />
          
          
            <br>
            <input type="text" id="city" placeholder="Enter city name">
            <button onclick="getWeather()">Get Weather</button>
    
            <div id="weather"></div>
         
        
        </div>
        <script>
          // Replace with your API key
          const apiKeyy = "10389e0e65af493a70d7d527cc98e0a1";
  
          // Function to fetch weather data
          function getWeather() {
              const city = document.getElementById("city").value;
              if (!city) {
                  alert("Please enter a city name.");
                  return;
              }
  
              const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKeyy}&units=metric`;
  
              fetch(url)
                  .then(response => response.json())
                  .then(data => {
                      // Check if the response is successful
                      if (data.cod === 200) {
                          const weather = `
                              <h3>Weather in ${data.name}</h3>
                              <p>Temperature: ${data.main.temp}°C</p>
                              <p>Weather: ${data.weather[0].description}</p>
                              <p>Humidity: ${data.main.humidity}%</p>
                              <p>Wind Speed: ${data.wind.speed} m/s</p>
                          `;
                          document.getElementById("weather").innerHTML = weather;
                      } else {
                          document.getElementById("weather").innerHTML = "<p class='error'>City not found. Please try again.</p>";
                      }
                  })
                  .catch(error => {
                      console.error("Error fetching weather data:", error);
                      document.getElementById("weather").innerHTML = "<p class='error'>There was an error fetching weather data.</p>";
                  });
          }
      </script>
      <br>
      <div class="container">
        <br>
          <div id="searchResults">
            <iframe id="if1" width="60%" height="500" style="visibility:visible" src="https://www.google.com/search?igu=1"></iframe>
        
          </div>
          
              <script>
              window.addEventListener('load', () => {
    const iframe = document.querySelector('iframe');
    if (iframe) {
        iframe.setAttribute('tabindex', '-1');
    }
});

              </script>

        </div>
        </div>
        </section>
    <!--learn section ends-->
    

    

    <!-- about section starts  -->

    <section class="about" id="about">
      <h1 class="heading">Our <span>Team</span></h1>

      <div class="swiper about-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="https://i0.wp.com/blog.creativeflair.org/wp-content/uploads/images/starry-night-painting.jpeg?fit=1200%2C686&ssl=1" alt="" />
            <p>
              " My goal is to create technology that helps our farmers succeed. We're constantly exploring new ideas and pushing the boundaries of what's possible, because we know that every improvement we make can have a real impact on the lives of farmers and the health of our environment."




            </p>
            <a href="https://www.linkedin.com/in/srikar-tenneti-849522235/">Sushiiii</a>
            
          </div>

          <div class="swiper-slide box">
            <img src="https://mclaren.scene7.com/is/image/mclaren/765lt-3-1200x1200-1:crop-4x3?wid=1920&hei=1440" alt="" />
            <p>
             "I'm committed to ensuring that our customers receive the highest quality products and services. We strive to make our farm-to-table model efficient and sustainable, and are constantly exploring new ways to improve our operations."
            </p>
            <a href="https://www.linkedin.com/in/sriraj-tata-0499b7228/">Nikiii</a>
            
          </div>


          <div class="swiper-slide box">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/049/296/767/small_2x/pink-magenta-fantastic-3d-clouds-on-the-floor-sky-and-landscape-gentle-colors-and-with-bright-lights-free-video.jpg" alt="" />
            <p>
             "I am honored to be part of a team that is dedicated to creating a sustainable and efficient farming ecosystem. Our mission is to revolutionize the way food is grown, distributed and consumed around the world, and to help small-scale farmers thrive in the digital age."
            </p>
            <a href="https://www.linkedin.com/in/sudhish-amiti-491805224/">EJ</a>
            
          </div>


          <div class="swiper-slide box">
            <img src="https://cdn.pixabay.com/photo/2024/08/01/18/20/anime-8937915_640.png" alt="" />
            <p>
             " I am proud to be a part of a team that is committed to creating a positive impact in the agricultural industry. Our goal is to ensure that the farmers we work with have access to the necessary resources and funding to grow their businesses sustainably.
             </p>
            <a href="https://www.linkedin.com/in/himaja-vendra-48581324b/">AJ</a>
            
          </div>
        </div>
      </div>
    </section>

    <!-- review section ends -->


    <!-- footer section starts  -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>FarmFresh <i class="fas fa-seedling"></i></h3>
          <p>
            From our farm to your home without any intermediaries
          </p>
          <div class="share">
            <a href="https://github.com/STRIDER1512/FarmBuddy" class="fab fab fa-github"></a>
            <a href="mailto: farmbuddy2023@gmail.com" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <a href="https://goo.gl/maps/ohjevE4orfM8WPbJ6" class="fas fa-map-marker-alt"></a>
            <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.9802614663467!2d77.36951827429317!3d28.630353675665862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce551491b3ce7%3A0x7335d9fcfd4d9db0!2sJAYPEE%20INSTITUTE%20OF%20INFORMATION%20TECHNOLOGY!5e0!3m2!1sen!2sin!4v1737308604645!5m2!1sen!2sin" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> >
            </div>
          </div>
        </div>

          

        <div class="box">
          <h3>quick links</h3>
          <a href="#home" class="links">
            <i class="fas fa-arrow-right"></i> home
          </a>
          <a href="#features" class="links">
            <i class="fas fa-arrow-right"></i> features
          </a>
          <a href="#categories" class="links">
            <i class="fas fa-arrow-right"></i> categories
          </a>
          <a href="#products" class="links">
            <i class="fas fa-arrow-right"></i> products
          </a>
          <a href="#learn" class="links">
            <i class="fas fa-arrow-right"></i> Learn
          </a>
          <a href="#about" class="links">
            <i class="fas fa-arrow-right"></i> Team
          </a>
          
          
         
          
        </div>

        <div class="box">
          <h3>newsletter</h3>
          <p>subscribe for latest updates</p>
          <input type="email" placeholder="your email" class="email" />
          <input type="submit" value="subscribe" class="btn" />
          <img src="image/payment.png" class="payment-img" alt="" />
        </div>
      </div>
    </section>

    <!-- footer section ends -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1%22%3E"> </script>
<df-messenger intent="WELCOME" chat-title="FarmBuddy"
  agent-id="e1f83922-37a6-488b-9c06-b8cc656319b3"
  language-code="en"
></df-messenger>

<script>
    function openFarmFresh() {
      // Change this to the relative path from FFmainpage to the root directory
      window.location.href = "/FarmFresh/index.php";
    }
  </script>

   
  </body>
</html>