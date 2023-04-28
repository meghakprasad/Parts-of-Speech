var start_time = Date.now();
var timer_element = document.getElementById("timer_time");

// Update the timer every second
setInterval(function() {
    var current_time = Date.now();
    var elapsed_time = current_time - start_time;
    timer_element.value = elapsed_time / 1000;
}, 1000);