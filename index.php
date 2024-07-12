<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/35609295e7.js" crossorigin="anonymous"></script>
    <script src="form.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="row">
        <div class="col-lg-6 col-sm-12 col-10 child test2"></div>
        <div class="col-lg-3 col-sm-6 col-10 child test2"></div>
        <div class="col-lg-3 col-sm-6 col-10 child test2"></div>
      </div>

   <div id="header">
        <div class="container">
            <nav>
                <img src="images/muzlogo.jpg" class="logo">
                <ul>
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#Contact">Contact</a></li>
                </ul>
            </nav>
            <section class="home">
            <div class="header-text">
                <h3>Interactive And Digital Media</h3><br>
                <h1>Hi, I'am <img src="images/muzg.jpg" width="270" height="40"> <br>Furreedun from Mauritius</h1><br>
                <h3>A student of Polytechnic Mauritius</h3>
                </div>
                <span class="header-imghover"></span>
               </section>
            </div>
        </div>
   </div> 

<!-- -----------about----------- -->
<div id="about">
<div class="container">
<div class="row">
  <div class="about-col-1">
	  <img src="images/foto.jpg">
  </div>
  
  <div class="about-col-2">
	  <br><h1 class="sub-title">About Me</h1>
	  <p>🎓 Student at Polytechnic Mauritius<br>😄 Funny | 💼 Hard Working<br>I am a dynamic and versatile student at Polytechnic Mauritius with a passion for creativity and innovation. With expertise in graphic design, 3D modeling, animation, and web development, I am dedicated to pushing the boundaries of what's possible. Known for my sense of humor and strong work ethic, I bring enthusiasm and excellence to every project I undertake. Ready to bring my skills and creativity to new challenges and opportunities.</p>
	  <div class="tab-tiles">
		  <p class="tab-links active link" onclick="opentab('skills')">Skills</p>
		  <p class="tab-links" onclick="opentab('experiance')">Experiance</p>
		  <p class="tab-links" onclick="opentab('education')">Education</p>
	  </div>

	  <div class="tab-contents active-tab" id="skills">
		  <ul>
			  <li><span>Web Devloper</span><br>Frontend Designer</li>
			  <li><span>Digital Compositing</span><br>Pre/Post Production</li>
		  </ul>
	  </div>

	  <div class="tab-contents" id="experiance">
		  <ul>
			  <li><span>2022 - current</span><br>Avacor Security Officer</li>
			  <li><span>2018 - 2021</span><br>Airport Security Officer</li>
		  </ul>
	  </div>
	  
	  <div class="tab-contents" id="education">
		  <ul>
			  <li><span>2021 - current</span><br>Interactive and Digital Media at Polytechnics</li>
			  <li><span>2011 - 2017</span><br>Higher Shool Certificate at Hamilton College</li>
		  </ul>
	  </div>
  </div>
</div>
</div>
</div>
   
<!-- -----------services----------- -->
<div id="services">
    <div class="container">
        <h1 class="sub-title">My Services</h1>
        <div class="services-list">
            <div>
                <h2>Web Developer</h2>
                <p>Frontend Design</p>
            </div>
            <div>
                <h2>Adobe  Photoshop</h2>
                <p>Photo Manipulation</p>
            </div>
            <div>
                <h2>Artist</h2>
                <p>Digital Portrait/Landscape</p>
            </div>
        </div>
    </div>
</div>

<!-- -----------portfolio----------- -->
<div id="portfolio">
    <div class="container">
        <h1 class="sub-title">My work</h1>
        <div class="work-list">
            <div class="work">
                <img src="images/1.png">
                <div class="layer">
                    <h3>Adobe Photoshop</h3>
                    <p>Photo Manipulation</p>
                </div>
            </div>
            <div class="work">
                <img src="images/3.png">
                <div class="layer">
                    <h3>Portrait</h3>
                    <p>Geometric Shape Composition<</p>
                </div>
            </div>
            <div class="work">
                <img src="images/55.png">
                <div class="layer">
                    <h3>Portrait</h3>
                    <p>Digital Art</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- -----------contact----------- -->
<div id="Contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fa-sharp fa-solid fa-paper-plane"></i>ffurreedun@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i>57786002</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://twitter.com/"><i class="fa-brands fa-twitter-square"></i></a>
                    <a href="https://www.instagram.com/mugi_wara_no_luffyy/?hl=en"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <a href="images/Muzammil CV.pdf" download class="btn">Download CV</a>
            </div>
            <div class="contact-right">
                <div class="container">
                    <form id="portfolio" action="connect.php" method="post">

                <form>
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="text" name="email" placeholder="Your Email" required>
                    <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>2024 Copyright © Muzammil.</p>
    </div>
</div>


<script>
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");
    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }
</script>

<!-- Include Bootstrap JS (optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>