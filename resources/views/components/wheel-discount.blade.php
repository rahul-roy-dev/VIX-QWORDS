<div class="wheel-container">
<div class="spinner">
  <button class="promo-btn">Get Promo</button>
  <div class="circle"></div>
  <div class="result"></div>
</div>

</div>


<style>
 .wheel-container {
  position: relative;
  margin: 0 auto;
  width: 300px;
  height: 300px;
  text-align: center;
}

.spinner {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 200px;
  width: 200px;
}

.promo-btn {
  position: relative;
  z-index: 1;
  padding: 10px 20px;
  background-color: #e63c15;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 30px;
  cursor: pointer;
}

.circle {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 0;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  border: 10px solid rgba(0, 0, 0, 0.1);
  border-top-color: #e63c15;
  animation: spin 2s linear infinite;
  animation-play-state: paused;
}

.result {
  margin-top: 20px;
  font-size: 24px;
  font-weight: bold;
}

@keyframes spin {
  to {
    transform: rotate(360deg);
  }
}



</style>