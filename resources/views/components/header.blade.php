<!-- resources/views/components/header.blade.php -->
<header id="header">
    
<div class="horizontal">{{ $slot }}
    

</div>


        <div id="overlay"></div>


</header>










<style>

   




header div {
    display: flex;
    flex-direction: column;
    justify-content: left;
    justify-items: left;
}
header {
    background-color: #fff;
    background-size: 20% auto;
    background-position: right 50%;
    background-repeat: no-repeat;
    background-image: url(../img/bg.svg);
    width: 100%;
    height: 500px;
    font-family: "Montserrat", sans-serif;
    position: relative;
    z-index: 0;
    background-blend-mode: var(--overlay);
}
@media only screen and (min-width: 700px) {
    header {
    height: 480px;
    background-size: 330px auto;
}
}@media only screen and (min-width: 900px) {
    header {
    height: 400px;
    background-size: 600px auto;
    }

}header div.h1 {
    margin-top: 0px;

}
header #overlay {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: none;
    background-position-y: 100%;
    background-size: 100% 100px;
    background-repeat: no-repeat;
    background-image: url(../img/overlay.png);
}
@media only screen and (min-width: 700px) {
    header #overlay {
    background-position-y: 120%;
    background-size: 100% 150px;
}
}

   .header-block {
    padding: 30px;
    display: flex;
    width: 200px;
    margin-left: 50px;
} 
</style>


