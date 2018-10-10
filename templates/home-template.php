<header class="showcase">
      <div class="content">
        <img src="images/TS94.JPG" class="logo-top" alt="">
        <div class="title">
            Coming<br>Soon
            <hr>
        </div>
        <div class="timer">
            <p id="timer" style="font-size:30px"></p>
            <hr>
        </div>
        <div class="text">
            <p>DJ Teeshow &copy;<br>Bookteeshow@gmail.com</p>
        </div>
        <img src="images/TeeshowLogo.png" class="logo-bottom" alt="">
      </div>
</header>

<script>
// Set the date we're counting down to
let countDownDate = new Date("Nov 9, 2018 09:00:00").getTime();

// Update the count down every 1 second
let countdownfunction = setInterval(function() {

    // Get todays date and time
    let now = new Date().getTime();
    
    // Find the distance between now an the count down date
    let distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="timer"
    document.getElementById("timer").innerHTML = days + "D " + hours + "H "
    + minutes + "M " + seconds + "S ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("timer").innerHTML = "EXPIRED";
    }
}, 1000);
</script>