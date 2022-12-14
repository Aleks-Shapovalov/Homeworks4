<?php
$name = 'Алeксандр'; // строка
$city = 'Минск, Бeларусь'; // строка
$profi = 'Тeстировщик'; // строка
$email = 'shapovalov.alex.v@gmail.com'; // строка
$phone = 375293323754; // десятичное число
$age = 2022-1990;
$days = (2022-1990)*365;

$skills = [
        'skill_name' => ['3ds Max', 'AutoCad', 'Blender'],
        'level' => [67, 87, 40]
    ]


?>

<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://bgstaff.ru/upload/bgstaff/pages/qa.png" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $name; ?></h2>
            
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $profi; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $city ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone ?></p>
          <p><i class="fa fa-hourglass-half fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $age ?> года (<?php echo $days ?> дней)</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <p><?php echo $skills['skill_name'][0]; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][0]; ?>%"><?php echo $skills['level'][0]; ?>%</div>
          </div>
          <p><?php echo $skills['skill_name'][1]; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][1]; ?>%">
              <div class="w3-center w3-text-white"><?php echo $skills['level'][1]; ?>%</div>
            </div>
          </div>
          <p><?php echo $skills['skill_name'][2]; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][2]; ?>%"><?php echo $skills['level'][2]; ?>%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <div class="w3-container">Head of Development Department OOO "OMA"</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2016 - Apr 2022</h6>
          <p>Duties and functions:
         	 <br>
			- opening and remodeling of the company's stores;
          	<br>
			- strategic planning of the company's development;
            <br>
			- annual budgeting;
            <br>
			- negotiations with key clients and conclusion of annual contracts;
            <br>
			- team management (direct management of 13 people);
            <br>
			- project management.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Team Lead Merchandising Manager</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
          <p>- building and organizing the work of a team of merchandisers in Minsk.
          <br>
			- visiting retail outlets, monitoring and evaluating the work of merchandisers.
            <br>
			- search and development of new ways to control and manage the team.
            <br>
			- training the team on merchandising standards.
            <br>
			- Conducting meetings and trainings with the team in order to improve work efficiency.
            <br>
			- work with photo reports, drawing up routes.
            <br>
			- conducting interviews for the position of merchandisers and induction of new employees.
            <br>
			- internal reporting.</p>
          <hr>
        </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>I am currently growing as a QA Engineer! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>
International university “MITSO”</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2008 - 2012</h6>
          <p>Bachelor Degree on Business Administration and Management</p>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>
