<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>QWords</title>

        <!-- LINK FILES -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/new.css') }}">
        <link rel="stylesheet" href="{{ asset('css/switchtheme.css') }}">



    </head> 
    <!-- MADE BY RAHUL ROY, VIX QWORDS-->
    <body class="antialiased night">
    <div class="parent">
  <img src="https://i.ibb.co/zmypVYz/rocket-up.png" alt="Rocket" class="rocket">
      <x-navbar/>
    <div class="main-container">
    <x-header> 
    <x-discount-box />
  </x-header>
   <x-grid-services>
   <x-wheel-discount /><x-user-counter />
</x-grid-services>
<x-contact-form>
<x-social-media />
</x-contact-form>
    <x-footer> <x-social-media />
</x-footer> 
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      //____ DARK MODE TOGGLE ____

      function myFunction() {
        var element = document.body;
        var mode = document.getElementById("switch");
        var header = document.getElementById("header");
        var overlay = document.getElementById("overlay");
        var div1 = document.getElementById("div1");
        element.classList.toggle("dark-theme");
      }

      mode.addEventListener("click", () => {
        if (mode.innerText === "DARK MODE") {
          mode.innerText = "LIGHT MODE";
          overlay.style.filter = "brightness(0.3)";
          div1.style.visibility = "hidden";
          div2.style.visibility = "hidden";
        } else {
          mode.innerText = "DARK MODE";
          header.style.filter = "grayscale(0)";

          div1.style.visibility = "visible";
          div2.style.visibility = "visible";
        }
      });

      var checkbox = document.querySelector("input[name=mode]");

      function myFunction() {
        if (mode.innerText === "DARK MODE") {
          trans();
          document.documentElement.setAttribute("data-theme", "dark");
          mode.innerText = "LIGHT MODE";
          header.style.filter = "brightness(0.5)";
          overlay.style.filter = "brightness(0.35)";
          div1.style.visibility = "hidden";
          div2.style.visibility = "hidden";
        } else {
          trans();
          document.documentElement.setAttribute("data-theme", "light");
          mode.innerText = "DARK MODE";
          header.style.filter = "grayscale(0)";
          overlay.style.filter = "brightness(1)";
          div1.style.visibility = "visible";
          div2.style.visibility = "visible";
        }
      }

      let trans = () => {
        document.documentElement.classList.add("transition");
        window.setTimeout(() => {
          document.documentElement.classList.remove("transition");
        }, 1000);
      };
      $("#switch").click(function () {
        $("body").toggleClass("night day");
      });


    </script>          
<script>
const promoBtn = document.querySelector('.promo-btn');
const circle = document.querySelector('.circle');
const result = document.querySelector('.result');

let spinning = false;

promoBtn.addEventListener('click', () => {
  if (!spinning) {
    spinning = true;
    circle.style.animationPlayState = 'running';
    result.textContent = '';
    setTimeout(() => {
      spinning = false;
      circle.style.animationPlayState = 'paused';
      result.textContent = 'LUCKY10';
    }, 3000);
  }
});
</script>
</div>
    </body>
</html>
