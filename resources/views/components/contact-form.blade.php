

<div class="setcontent horizontal" id="contact-container"> 
  <div>
  <div class="content-card" id="chat">
          <div class="card" id="chat">
            <div class="info info-top">
              <h2>  DISCOVER OUR BEST SELLERS</h2>
            </div>
            <section>
              <p>
              Dont have time to decide what is best for you? Our experts will recommend you best best option to fit your needs
              </p>


              <p>Ask us anything</p>
              <div class="card-pic"></div>
            </section>{{ $slot }}
          </div>
      
        </div>
  </div>
  <div class="container">
                     
                <div class="login-box">
                    <form>
                      <div class="user-box">
                        <input type="text" name="" required="">
                        <label>Name</label>
                      </div>
                      <div class="user-box">
                        <input type="password" name="" required="">
                        <label>E-mail</label>
                        
                      </div>
                      <div class="user-box">
                        <br>Your message</span>
                        <textarea rows="5" cols="40" name="Description" spellcheck="false">
                            </textarea>
                        
                        
                      </div>

                      <div class="user-box">
                          <a href="#"> <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Submit
                      </a>
                      </div>
                      
                      
                      
                      
                    </form>
                  </div>
              </div>
</div>




<style>

  #chat {
    max-width: 700px;
    background: none;
  }
    /**Form**/
#form{
    margin-top: 100px;
}

textarea {
    background-color: transparent;
    max-width: 95%;
    margin: 0 auto;  color: white;margin-top: 20px;
    padding: 20px; 
}
#contact-container{
  justify-content: space-around;
  background-color: #fce7b6;
}
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .login-box {
    width: 400px;
    padding: 40px;
    background: rgba(230, 84, 11,.4);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(230, 84, 11,.2);
    border-radius: 10px;
    margin: auto;
  }
  
  
  .login-box .user-box {
    position: relative;
  }
  
  .login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #000;
    margin-bottom: 30px;
    border: none;
    border-bottom: 2px solid #000;
    outline: none;
    background: transparent;
  }
  
  .login-box .user-box label {
    position: absolute;
    top:0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #000;
    pointer-events: none;
    transition: .5s;
  }

  .login-box .user-box input:focus ~ label,
  .login-box .user-box input:valid ~ label {
    top: -20px;
    left: 0;
    color: #FFA500;
    font-size: 12px;
  }
  
  .login-box form a {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: rgb(230, 84, 11);
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px
  }
  
  .login-box a:hover {
    background: #FFA500;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 100px #03e9f4;
  }
  
  .login-box a span {
    position: absolute;
    display: block;
  }
  
  .login-box a span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #FA7532);
    animation: btn-anim1 1s linear infinite;
  }
  
  @keyframes btn-anim1 {
    0% {
      left: -100%;
    }
    50%,100% {
      left: 100%;
    }
  }
  
  
  .login-box a span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #FDA500);
    animation: btn-anim2 1s linear infinite;
    animation-delay: .25s
  }
  
  @keyframes btn-anim2 {
    0% {
      top: -100%;
    }
    50%,100% {
      top: 100%;
    }
  }
  
  .login-box a span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, rgba(230, 84, 119));
    animation: btn-anim3 1s linear infinite;
    animation-delay: .5s
  }
  
  @keyframes btn-anim3 {
    0% {
      right: -100%;
    }
    50%,100% {
      right: 100%;
    }
  }
  
  .login-box a span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, rgba(230, 84, 11));
    animation: btn-anim4 1s linear infinite;
    animation-delay: .75s
  }
  
  @keyframes btn-anim4 {
    0% {
      bottom: -100%;
    }
    50%,100% {
      bottom: 100%;
    }
  }

  #chat, #chat section, h2 {
    background-color: transparent;
    
  }
  
</style>