<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];	

	// Database connection
	$conn = new mysqli('localhost','root','','portfolio');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contactme(id, name, email, message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $id, $name, $email, $cmessage);
		$execval = $stmt->execute();
		echo $execval;
		echo "Thank you for your message!";
		$stmt->close();
		$conn->close();
	}
?>

<?php
	$host = 'localhost';
	$dbname = 'portfolio';
	$id = isset($_POST['id']); 
	$name = isset($_POST['name']);
	$email = isset($_POST['email']);
	$message = isset($_POST['message']);
	

	// Database connection
	$conn = new mysqli('localhost','root','','portfolio');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contactme(id, name, email, message) 
		 values(?, ?, ?, ?)");
		$stmt->bind_param("isss", $id, $name, $email, $message);
		$stmt->execute();
		echo "Message Sent";
		$stmt->close();
		$conn->close();
	}
?>



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
			  <li><span>3D Modeller</span><br></li>
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

#about{
    padding:  80px 0;
    color: #ffffff;
}

.row{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.about-col-1{
    flex-basis: 35%;
}
.about-col-1 img{
    border-radius: 20px;
    margin-left: 100px;
}

.about-col-2{
    flex-basis: 60%;

}

.sub-title{
    font-size: 60px;
    font-weight: 600;
    color: #0eff36;
}

.tab-tiles{
    display: flex;
    margin: 20px 0 40px;
}

.tab-links{
    margin-right: 50px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    position: relative;
}

.tab-links::after{
    content: '';
    width: 0;
    height: 3px;
    background: #0eff36;
    position: absolute;
    left: 0;
    bottom: -8px;
    transition: 0.4s;
}

.tab-links.active-link::after{
    width: 100%;
    }


.tab-contents ul li{
    list-style: none;
    margin: 10px 0;
}

.tab-contents ul li span{
    color: #0eff36;
    font-size: 14px;
}

.tab-contents{
    display: none;
}

.tab-contents.active-tab{
    display:block
}


