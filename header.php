<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LMS</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- <div id="header"> -->
         <div class="container">
            <nav>
                <img src="" >
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
                </ul>
                <i class="fa-solid fa-bars" onclick="openmenu()"></i>
            </nav>
        </div> 
    <!-- </div>     -->
     
    <script>
        var sidemenu = document.getElementById("sidemenu");
        var menu = document.querySelector(".fa-solid.fa-bars");

        function openmenu(){
            sidemenu.style.right = "0";
            menu.style.display= "none"; 
        }
        function closemenu(){
            sidemenu.style.right = "-200px";
            menu.style.display= "block";
        }
    </script>