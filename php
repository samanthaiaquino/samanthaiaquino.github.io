<?php

session_start();
if (!isset($_SESSION['form_submitted'])) {
    header('Location: https://www.samanthaaquino.com/');

    exit();
}
    unset($_SESSION['form_submitted']);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&display=swap"
      rel="stylesheet"
    />
    
    <link rel="stylesheet" href="style.css" />
    <style>
    body{
        padding-bottom: 0px !important;
    }
        .wrapper-1{
  width:100%;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding :30px;
  text-align:center;
}
.go-home{
  color:#fff;
  background: hsl(190, 74%, 58%);
  border:none;
  padding:10px 50px;
  margin:30px 0;
  border-radius:30px;
  text-transform:capitalize;
  text-decoration: none;
  position: relative;
  top:10px;
}
.go-home:hover{
    color: white !important;
}

@media (max-width:1000px){
 .content{
     position: relative;
    top: 30px;
 }
}


@media (min-width:360px){
  h1{
    font-size:4em;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .content{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: 350px;
  max-width:620px;
  margin:0 auto;
  box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
}
  
}
    </style>
    <title>Samantha Aquino's Portfolio</title>
  </head>
  <body>
    <header class="header">
      <h2 class="visually-hidden">Header</h2>
      <div class="wrapper">
        <nav class="header__nav">
          <h2 class="visually-hidden">Navigation</h2>
          <a href="/" class="header__home">
            samanthaaquino
            <span class="visually-hidden">(to home page)</span>
          </a>
          <a href="" class="header__social">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="25"
              height="24"
              aria-labelledby="socialGitHub"
              role="img"
            >
              <title id="socialGitHub">GitHub</title>
              <a href="https://github.com/samanthaiaquino" target="_blank">
              <path
                fill="#FFF"
                fill-rule="evenodd"
                d="M12.304 0C5.506 0 0 5.506 0 12.304c0 5.444 3.522 10.042 8.413 11.672.615.108.845-.261.845-.584 0-.292-.015-1.261-.015-2.291-3.091.569-3.891-.754-4.137-1.446-.138-.354-.738-1.446-1.261-1.738-.43-.23-1.046-.8-.016-.815.97-.015 1.661.892 1.892 1.261 1.107 1.86 2.876 1.338 3.584 1.015.107-.8.43-1.338.784-1.646-2.738-.307-5.598-1.368-5.598-6.074 0-1.338.477-2.446 1.26-3.307-.122-.308-.553-1.569.124-3.26 0 0 1.03-.323 3.383 1.26.985-.276 2.03-.415 3.076-.415 1.046 0 2.092.139 3.076.416 2.353-1.6 3.384-1.261 3.384-1.261.676 1.691.246 2.952.123 3.26.784.861 1.26 1.953 1.26 3.307 0 4.721-2.875 5.767-5.613 6.074.446.385.83 1.123.83 2.277 0 1.645-.015 2.968-.015 3.383 0 .323.231.708.846.584a12.324 12.324 0 0 0 8.382-11.672C24.607 5.506 19.101 0 12.304 0Z"
              />
            </svg>
          </a>
          <a href="" class="header__social">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="26"
              height="23"
              aria-labelledby="socialFrontendMentor"
              role="img"
            >
              <title id="socialFrontendMentor">Frontend Mentor</title>
          <a href="https://frontendmentor.io/profile/samanthaiaquino" target</a>
              <path
                fill="#FFF"
                d="M13.084.23a.751.751 0 0 0-.736.75v14.267a.75.75 0 1 0 1.5 0V.98a.75.75 0 0 0-.763-.75ZM24.44 4.504a.752.752 0 0 0-.284.064l-6.44 2.875a.752.752 0 0 0 0 1.37l6.44 2.884a.75.75 0 0 0 .612-1.369L19.861 8.13l4.907-2.191a.753.753 0 0 0 .38-.99.752.752 0 0 0-.708-.444ZM1.371 9.663a.752.752 0 0 0-.74.938C2.41 17.447 8.603 22.23 15.685 22.23a.75.75 0 1 0 0-1.501A14.053 14.053 0 0 1 2.083 10.225a.75.75 0 0 0-.712-.561v-.001Z"
              />
            </svg>
          </a>
          <a href="" class="header__social">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="25"
              height="24"
              aria-labelledby="socialLinkedIn"
              role="img"
            >
              <title id="socialLinkedIn">LinkedIn</title>
              <a href="https://linkedin.com/in/samantha-aquino-698128264" target="_blank">
              <path
                fill="#FFF"
                fill-rule="evenodd"
                d="M5.551 3.304c-1.14 0-2.067.926-2.067 2.064 0 1.14.928 2.066 2.067 2.066a2.066 2.066 0 0 0 0-4.13ZM3.767 8.998v11.453h3.562L7.33 8.998H3.767Zm5.798 0V20.45l3.554.002.002-5.668c0-1.454.253-2.941 2.132-2.941 1.851 0 1.851 1.755 1.851 3.036v5.571l3.559-.001v-6.28c0-2.834-.517-5.457-4.27-5.457-1.763 0-2.916.997-3.368 1.85h-.05V8.997h-3.41ZM22.435 24H1.982c-.976 0-1.77-.777-1.77-1.732V1.731C.212.776 1.006 0 1.982 0h20.453c.98 0 1.777.776 1.777 1.73v20.538c0 .955-.797 1.732-1.777 1.732Z"
              />
            </svg>
          </a>
              <a href="" class="header__social">

		  <svg xmlns="http://www.w3.org/2000/svg" 
              height="25"
		  viewBox="-35.20005 -41.33325 305.0671 247.9995">
		   <title id="socialYoutube">Youtube</title>
        <a href="https://youtube.com/channel/UCIGefzUM27S5WEPJb383ZxQ" target="_blank">
		  <path d="M93.333 117.559V47.775l61.334 34.893zm136.43-91.742c-2.699-10.162-10.651-18.165-20.747-20.881C190.716 0 117.333 0 117.333 0S43.951 0 25.651 4.936C15.555 7.652 7.603 15.655 4.904 25.817 0 44.236 0 82.667 0 82.667s0 38.429 4.904 56.849c2.699 10.163 10.65 18.165 20.747 20.883 18.3 4.934 91.682 4.934 91.682 4.934s73.383 0 91.683-4.934c10.096-2.718 18.048-10.72 20.747-20.883 4.904-18.42 4.904-56.85 4.904-56.85s0-38.43-4.904-56.849" fill="#fff"/>
		  </svg>
		  
		  </a>
         

        </nav>
      </div>
    </header>
    <main id="main">
      
      
      <section class="hero">
        <div class="wrapper hero__wrapper">
          <div class="hero__content">
            
            <img class="hero__rings" src="assets/images/pattern-rings.svg" alt="" width="530" height="129">
<div class=content>
  <div class="wrapper-1">
    <div class="wrapper-2">
      <h1>Thank you!</h1>
      <p>Thank you for contacting!  </p>
      <p>I will be in touch with you shortly.</p>
      <div>
      <a href="./" class="go-home">
      Go home
      </a>
      </div>
    </div>

</div>
</div>
        </div>
      </section>
      
      
      
      
      
      
      
      
      
    </main>
 <footer class="footer bg-less-dark">
      <h2 class="visually-hidden">Footer</h2>
      <div class="wrapper">
        <nav class="header__nav">
          <h2 class="visually-hidden">Navigation</h2>
          <a href="/" class="header__home">
            samanthaaquino
            <span class="visually-hidden">(to home page)</span>
          </a>
          <a href="" class="header__social">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="25"
              height="24"
              aria-labelledby="socialGitHub"
              role="img"
            >
           <title id="socialGitHub">GitHub</title>
              <a href="https://github.com/samanthaiaquino" target="_blank">
              <path
                fill="#FFF"
                fill-rule="evenodd"
                d="M12.304 0C5.506 0 0 5.506 0 12.304c0 5.444 3.522 10.042 8.413 11.672.615.108.845-.261.845-.584 0-.292-.015-1.261-.015-2.291-3.091.569-3.891-.754-4.137-1.446-.138-.354-.738-1.446-1.261-1.738-.43-.23-1.046-.8-.016-.815.97-.015 1.661.892 1.892 1.261 1.107 1.86 2.876 1.338 3.584 1.015.107-.8.43-1.338.784-1.646-2.738-.307-5.598-1.368-5.598-6.074 0-1.338.477-2.446 1.26-3.307-.122-.308-.553-1.569.124-3.26 0 0 1.03-.323 3.383 1.26.985-.276 2.03-.415 3.076-.415 1.046 0 2.092.139 3.076.416 2.353-1.6 3.384-1.261 3.384-1.261.676 1.691.246 2.952.123 3.26.784.861 1.26 1.953 1.26 3.307 0 4.721-2.875 5.767-5.613 6.074.446.385.83 1.123.83 2.277 0 1.645-.015 2.968-.015 3.383 0 .323.231.708.846.584a12.324 12.324 0 0 0 8.382-11.672C24.607 5.506 19.101 0 12.304 0Z"
              />
            </svg>
          </a>
          <a href="" class="header__social">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="26"
              height="23"
              aria-labelledby="socialFrontendMentor"
              role="img"
            >
              <title id="socialFrontendMentor">Frontend Mentor</title>
          <a href="https://frontendmentor.io/profile/samanthaiaquino" target</a>
              <path
                fill="#FFF"
                d="M13.084.23a.751.751 0 0 0-.736.75v14.267a.75.75 0 1 0 1.5 0V.98a.75.75 0 0 0-.763-.75ZM24.44 4.504a.752.752 0 0 0-.284.064l-6.44 2.875a.752.752 0 0 0 0 1.37l6.44 2.884a.75.75 0 0 0 .612-1.369L19.861 8.13l4.907-2.191a.753.753 0 0 0 .38-.99.752.752 0 0 0-.708-.444ZM1.371 9.663a.752.752 0 0 0-.74.938C2.41 17.447 8.603 22.23 15.685 22.23a.75.75 0 1 0 0-1.501A14.053 14.053 0 0 1 2.083 10.225a.75.75 0 0 0-.712-.561v-.001Z"
              />
            </svg>
          </a>
          <a href="" class="header__social">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="25"
              height="24"
              aria-labelledby="socialLinkedIn"
              role="img"
            >
              <title id="socialLinkedIn">LinkedIn</title>
              <a href="https://linkedin.com/in/samantha-aquino-698128264" target="_blank">
              <path
                fill="#FFF"
                fill-rule="evenodd"
                d="M5.551 3.304c-1.14 0-2.067.926-2.067 2.064 0 1.14.928 2.066 2.067 2.066a2.066 2.066 0 0 0 0-4.13ZM3.767 8.998v11.453h3.562L7.33 8.998H3.767Zm5.798 0V20.45l3.554.002.002-5.668c0-1.454.253-2.941 2.132-2.941 1.851 0 1.851 1.755 1.851 3.036v5.571l3.559-.001v-6.28c0-2.834-.517-5.457-4.27-5.457-1.763 0-2.916.997-3.368 1.85h-.05V8.997h-3.41ZM22.435 24H1.982c-.976 0-1.77-.777-1.77-1.732V1.731C.212.776 1.006 0 1.982 0h20.453c.98 0 1.777.776 1.777 1.73v20.538c0 .955-.797 1.732-1.777 1.732Z"
              />
            </svg>
          </a>
              <a href="" class="header__social">

		  <svg xmlns="http://www.w3.org/2000/svg" 
              height="25"
		  viewBox="-35.20005 -41.33325 305.0671 247.9995">
		   <title id="socialYoutube">Youtube</title>
        <a href="https://youtube.com/channel/UCIGefzUM27S5WEPJb383ZxQ" target="_blank">
		  <path d="M93.333 117.559V47.775l61.334 34.893zm136.43-91.742c-2.699-10.162-10.651-18.165-20.747-20.881C190.716 0 117.333 0 117.333 0S43.951 0 25.651 4.936C15.555 7.652 7.603 15.655 4.904 25.817 0 44.236 0 82.667 0 82.667s0 38.429 4.904 56.849c2.699 10.163 10.65 18.165 20.747 20.883 18.3 4.934 91.682 4.934 91.682 4.934s73.383 0 91.683-4.934c10.096-2.718 18.048-10.72 20.747-20.883 4.904-18.42 4.904-56.85 4.904-56.85s0-38.43-4.904-56.849" fill="#fff"/>
		  </svg>
		  
		  </a>
         

        </nav>
      </div>
    </footer>
  </body>
</html>
