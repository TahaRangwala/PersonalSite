<!DOCTYPE html>
<html>

    <head>
        <title> Taha Rangwala </title>
        <link href = "css/main.css" rel = "stylesheet" type = "text/css">
        <link rel="icon" href="img/icon.png">
    </head>


    <body>
        
        <div id = "backgrounddiv1"> </div>

        <script src = "js/main_back.js"> </script>
        <script src = "js/net.js"> </script>
        

        <script>
            VANTA.NET({
                el: "#backgrounddiv1",
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200.00,
                minWidth: 200.00,
                scale: 1.00,
                scaleMobile: 1.00,
                color: 0x000080,
                backgroundColor: 0xadd8e6
            });
        </script>

        <div class = "home-area">
            <?php
                require "header.php";
            ?>
            <p id = "home" style = "visibility: hidden;">test </p>
            <p style = "visibility: hidden;">test </p>
            <p style = "visibility: hidden;">test </p>
            
            <div class = "home-wrap">
                <div class = "card">
                    <div class = "card_part card_part-one">
                    </div>

                    <div class = "card_part card_part-two">
                    </div>

                    <div class = "card_part card_part-three">
                    </div>

                    <div class = "card_part card_part-four">
                    </div>
                </div>
                <div class = "intro-paragraph">
                   Hello, my name is Taha Rangwala. I am currently a Computer Engineering Major at Virginia Tech. Software engineering is my passion, especially the design process. Scroll down to find out more about me and the projects I have worked on. If you have any questions or want to get into contact with me, feel free to send me an email or call my phone number shown below. 
                </div>
            </div>

        </div>
        
        <div class = "projects-area" id = "projects">
            <h2> projects </h2>
            <div class = "seniorinfo">
                <h3 style = "text-align: center;"> Universal PA Test Controller </h3>
                <p style = "text-align: justify;"> Developed a Universal Power Amplifier Test Controller for Radio Frequency Testing Equipment using a Raspberry Pi and the VISA API  </p>
            </div>
            <div class = "embeddedinfo">
                <h3 style = "text-align: center;"> The Grabby Bot </h3>
                <p style = "text-align: justify;"> Designed and implemented the movement of a two-motor rover (Zumo) when interacting with a larger tri-wheeled rover and robotic arm in an engineering design team </p>
            </div>
            <a href = "https://shipfit.net/" id = "shiplink" target="_blank"> 
                <div class = "shipfitinfo">
                    <h3 style = "text-align: center;"> ShipFit </h3>
                    <p style = "text-align: justify;"> Designed and developed packaging software that calculates the most efficient way to put items in a package. This project can be found at <u> https://shipfit.net/ </u>. </p>
                </div>
            </a>
            <div class = "calcinfo">
                <h3 style = "text-align: center;"> QT Calculator Application </h3>
                <p style = "text-align: justify;"> Composed a calculator application in C++ for large integers using QT and multithreading </p>
            </div>
            <div class = "simoninfo">
                <h3 style = "text-align: center;"> Simon Game </h3>
                <p style = "text-align: justify;"> Devised an electronic Simon Game on a Microcontroller with pushbuttons, LEDs, joysticks, and light sensors using C </p>
            </div>
        </div>

        <div class = "skills-area" id = "skills">
            <h2> Skills </h2>
            <div class = "skill-list-class">
                <ul class="skill-list">
                    <li>C++</li>
                    <li>Java</li>
                    <li>Python</li>
                    <li>C</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>AJAX</li>
                    <li>OpenGL/WebGL</li>
                    <li>MATLAB</li>
                    <li>Node.js</li>
                    <li>QT</li>
                    <li>Assembly Language</li>
                    <li>Visual Basic</li>
                </ul>
            </div>
        </div>

        <div class = "education-area" id = "education">
            <h2> Education </h2>
            <div class = "univinfo">
                <h3 style = "text-align: center;"> Virginia Polytechnic Institute and State University</h3>
                <p style = "text-align: center;"> <b> Major: Computer Engineering (Machine Learning Focus) <b> </p>
            </div>
            <div class = "coursework">
            <h4 style = "text-align: center; font-size: 1.5vw;"> Relevant Coursework <h4>
                <ul class="course-list">
                    <li> Senior Design Project </li>
                    <li> Embedded System Design </li>
                    <li> Real-Time Systems </li>
                    <li> Introduction to Computer Vision</li>
                    <li> Machine Learning</li>
                    <li> Applied Software Design</li>
                    <li> Microcontroller Programming and Interfacing</li>
                    <li> Artificial Intelligence and Engineering Applications</li>
                    <li> Digital Image Processing</li>
                    <li> Network Application Design</li>
                    <li> Data Structures and Algorithms</li>
                    <li> Signals and Systems</li>
                    <li> Electric Circuit Analysis</li>
                    <li> Electronics</li>
                    <li> Introduction to Discrete Math</li>
                    <li> Differential Equations</li>
                </ul>
            </div>
        </div>

        <div class = "awards-area" id = "awards">
            <h2> Awards </h2>
            <div class = "deaninfo">
                <h3 style = "text-align: center;"> Deans List </h3>
                <p> December 2017 </p>
                <p style = "text-align: justify;"> Awarded for achieving at least a 3.4 GPA while maintaining at least 12 credits in Fall Semester of 2017  </p>
            </div>
            <div class = "hornadayinfo">
                <h3 style = "text-align: center;"> William T. Hornaday Badge </h3>
                <p> June 2015 </p>
                <p style = "text-align: justify;"> Award presented by the Boy Scouts of America for service in conservation and ecology  </p>
            </div>
            <div class = "eagleinfo">
                <h3 style = "text-align: center;"> Eagle Scout </h3>
                <p> January 2014 </p>
                <p style = "text-align: justify;"> Completed Eagle Scout Service Project designing and heading construction of 14' boardwalk for Westford Public Schools  </p>
            </div>
            
        </div>

        <div class = "resume-area" id = "resume">
            <h2> Resume </h2>
            <embed src="pdf/Rangwala_Taha_Resume.pdf" width="800px" height="800px" style = "display: block; margin-left: auto; margin-right: auto"/>
        </div>

        <div class = "contact-area" id = "contact">
            <h2> Contact </h2>
            <div class = "contact-box">
                <p style = "text-align: center;"> <b> Feel free to contact me by my email or phone number: </b> </p>
                <p style = "text-align: center;"> <b> Email: tahamrangwala@gmail.com </b> </p>
                <p style = "text-align: center;"> <b> Phone Number: (978) 850-2170 </b> </p>
            </div>
        </div>
        
    </body>


</html>