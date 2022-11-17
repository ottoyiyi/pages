<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air quality monitor</title>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="air quality monitor pc.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!----===== 幻燈片 ===== -->
    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="css/slick-theme.css"/>
	<script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
	<script type="text/javascript" src="js/web.js"></script>
	<script type="text/javascript">
		function MM_popupMsg(msg) { //v1.0

            //訊息框送出
            msg=msg+"Thanks for your opinion!"
          alert(msg);
            }
			$(document).ready(function(){
                
                
                //表單初始化為隱藏，當點擊訊息框會出現，點擊x會關閉
                
                   $('#Thumbnail').click(function(){
                       $('#container').fadeIn().animate({bottom:"0"});
                   });
              
                   $('.submit,.close,.home').click(function(){
                    $('#container').animate({bottom:"-600px"});
                   });


		        setTimeout(function () {   
					$(".animation").fadeOut();
					$("*").css({"overflow":"visible"});
				}, 2000); 

                    const body = document.querySelector('body'),
                    sidebar = body.querySelector('nav'),
                    toggle = body.querySelector(".toggle"),
                    searchBtn = body.querySelector(".search-box"),
                    modeSwitch = body.querySelector(".toggle-switch"),
                    modeText = body.querySelector(".mode-text");
              
              
              toggle.addEventListener("click" , () =>{
                  sidebar.classList.toggle("close");
              })
              
              searchBtn.addEventListener("click" , () =>{
                  sidebar.classList.remove("close");
              })
              
              modeSwitch.addEventListener("click" , () =>{
                  body.classList.toggle("dark");
                  
                  if(body.classList.contains("dark")){
                      modeText.innerText = "Light mode";
                  }else{
                      modeText.innerText = "Dark mode";
                      
                  }
              
              });

              
              
                             

			/*toggle(function(){
			document.getElementById('nav-container').classList.toggle('is-active');
			document.getElementById('btn-menu').classList.toggle('is-active');
		  });*/
	
			/*
			$('.shadow').hide();
			if (jQuery(window).width() < 640) {
				$('.shadow').show();
			}
			else {
				$('.shadow').hide();
			}*/
			
			/*
			$('.sidebar header .toggle').click(function(){
				coun++;
				if(coun %2==0){
					$('.shadow').show();
				} else{
				   $('.shadow').hide();
				   }
			});*/

            /*$('.bx bx-chevron-right toggle').click(function(){
                $('.shadow').hide();
                });*/


		});
	</script>
	
	
</head>
<body onload="weborphone()">
			<!--<div class="shadow"></div>-->
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="img/logo2.png" alt="">
                </span>
				
				<!-- logo旁邊的字
                <div class="text logo-text">
                    <span class="name">BUBU</span>
                    <span class="profession">AI Distract Detection</span>
                </div>-->
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>
		
		
        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="air quality monitor pc.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Website</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="air quality monitor2.php">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">phone</span>
                        </a>
                    </li>
					

					<li class="nav-link">
                        <div id="toggle">
							<button class="button"><img id="img2" src="img/sun.ico"><button/>
							<script src="js/toggle.js"></script>
						</div>
                    </li>
                </ul>
            </div>
            </div>
        </div>

    </nav>
    <section class="home">
        <div class="text"> </div>
        <section class="bars">
        <div class="charts">
            <li id="download">
                <p>Export recent data</p>
                <div><a href="https://thingspeak.com/channels/1802606/feed.csv">CSV</a>
                <a href="https://thingspeak.com/channels/1802606/feed.xml">XML</a>
                </div>
            </li>
            <ul>
            

        <li>Dashboard</li>
            <iframe style="border: none;" width="300" height="250" src="https://thingspeak.com/channels/1802606/widgets/543653"></iframe>
            <iframe style="border: none;" width="300" height="250" src="https://thingspeak.com/channels/1802606/widgets/543657"></iframe>
            <iframe style="border: none;" width="300" height="250" src="https://thingspeak.com/channels/1802606/widgets/543654"></iframe>
            <iframe style="border: none;" width="300" height="250" src="https://thingspeak.com/channels/1802606/widgets/543656"></iframe>
        

        
        <!----======== Distract ======== -->
        <li>低頭</li>
        <iframe width="350" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/channels/1802606/widgets/510977"></iframe>
        <iframe width="450" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/channels/1802606/charts/7?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
        <iframe width="450" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/apps/matlab_visualizations/483806"></iframe>
        <!----======== CO ======== -->
        <li>一氧化碳 </li>
        <iframe width="350" height="230" style="border: 0px solid #cccccc;" src="https://thingspeak.com/channels/1802606/widgets/501843"></iframe>
        <iframe width="450" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/channels/1802606/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line"></iframe>
        <iframe width="450" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/apps/matlab_visualizations/483790"></iframe>        <!----======== CO2 ======== -->
        <li>二氧化碳 </li>
        <iframe width="350" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/channels/1802606/widgets/537568"></iframe>
        <iframe width="450" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/channels/1802606/charts/8?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
        <iframe width="450" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/apps/matlab_visualizations/483792"></iframe>       
         <!----======== Alcohol ======== -->
        <li>酒精 </li>
        <iframe width="350" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/channels/1802606/widgets/501844"></iframe>
        <iframe width="450" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/channels/1802606/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line"></iframe>
        <iframe width="450" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/apps/matlab_visualizations/483795"></iframe>        <!----======== PM10 ======== -->
        <li>PM10 </li>
        <iframe width="350" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/channels/1802606/widgets/504890"></iframe>
        <iframe width="450" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/channels/1802606/charts/6?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
        <iframe width="450" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/apps/matlab_visualizations/483797"></iframe>       
    </ul>
        <style>
        .bars{
            font-size: 25px;
        }
        </style>
        </div>
        
        
        </section>

        
    </section>
    
    
<div class="animation">
	<div class="circles">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
    <div class="circle5"></div>
    <div class="circle6"></div>
    <div class="circle7"></div>
    <div class="circle8"></div>
    <div class="circle9"></div>
    <div class="circle10"></div>
    <div class="circle11"></div>
    <div class="circle12"></div>
    <div class="circle13"></div>
    <div class="circle14"></div>
    <div class="circle15"></div>
</div>
		</div>

        <div id="Thumbnail"></div>
        <div id="container">
            
            <h1> &bull; CONTACT US &bull;</h1>
            <div class="underline"></div>
            <img src="img/close.png" width="10%" class="close">
            <form action="#" method="post" id="contact_form">
              <div class="name">
                <label for="name"></label>
                <input type="text" placeholder="My name is" name="name" id="name_input" required>
              </div>
              <div class="email">
                <label for="email"></label>
                <input type="email" placeholder="My e-mail is" name="email" id="email_input" required>
              </div>
              <div class="telephone">
                <label for="name"></label>
                <input type="text" placeholder="My number is" name="telephone" id="telephone_input" required>
              </div>
              <div class="subject">
                <label for="subject"></label>
                
              </div>
              <div class="message">
                <label for="message"></label>
                <textarea name="message" placeholder="I'd like to chat about" id="message_input" cols="30" rows="5" required></textarea>
              </div>
              <div class="submit">
                <input type="button" value="Send Message" id="form_button"  onClick="MM_popupMsg('')" >
              </div>
            </form><!-- // End form -->
          </div><!-- // End #container -->

          

</body>
</html>