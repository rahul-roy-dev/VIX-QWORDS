<div class="nav-container ">
        <div class="navbar setcontent horizontal">
      <div> <button id="open-menu"><i class="fas fa-bars"></i> MENU</button>
      <button onclick="myFunction()" id="mode">DARK MODE</button>

      <div onclick="myFunction()" id="switch"></div></div>
     <div id="logo"></div>

    </div>

   
        </div>

<style>
    .navbar {
    z-index: 1;
    overflow: hidden;
    background-color: var(--base);
    position: fixed;
    top: 0px;
    width: 100%;
    height: 50px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 20px;
    justify-content: space-between;
    position: relative;
   

    box-shadow: 0 15px 25px rgba(230, 84, 11,.1);
   

}

.navbar #logo{
    position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  background-image: url('https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/dbf46b10382fa638ac532ad12f1aefb5.png');
  height: 100%;
  width: 100%;
  background-size: 5%;
  padding: 20px;
    background-repeat: no-repeat;
    background-position: center;
}

.navbar a {
    float: left;
    line-height: 1.7em;
    display: block;
    color: var(--accent-dark);
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.navbar a:hover {
    color: var(--black);
}
.main {
    margin-top: 50px;
}
#body-overlay {
    width: 100vw;
    height: 100vh;
    display: none;
    position: fixed;
    z-index: 1;
    top: 0;
    overflow: hidden;
    background: rgba(255, 157, 44, 0.5);
    -webkit-backdrop-filter: grayscale(1);
    backdrop-filter: grayscale(1);
}
.real-menu {
    position: fixed;
    top: 0;
    left: -300px;
    z-index: 4;
    width: 300px;
    height: 100%;
    padding: .5rem 1rem;
    -webkit-box-shadow: 0 3px 12px rgba(173, 162, 162, .3);
    box-shadow: 0 3px 12px rgba(173, 162, 162, .3);
    background-color: var(--contrastmenu);
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: ease .2s all;
    transition: ease .2s all;
}
.real-menu ul {
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    justify-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.real-menu ul li a {
    color: var(--contast);
    text-transform: uppercase;
    font-size: 20px;
    line-height: 1.7em;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
.real-menu li p {
    color: var(--contast);
    font-size: 21px;
    text-align: center;
}
.real-menu li p+h3 a {
    color: var(--accent);
    font-weight: bold;
}
nav.real-menu ul li a, .real-menu h3 {
    color: var(--contrast) !important;
}
#open-menu {
    color: var(--contrast);
    font-weight: bold;
    background: none;
    border: none;
    height: 100%;
    font-size: 15px;
    padding: 0;
}
body.menu-open #body-overlay {
    display: block;
}
body.menu-open .real-menu {
    left: 0;
}
</style>