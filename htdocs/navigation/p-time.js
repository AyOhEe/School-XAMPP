function startClock() {
    //get time string
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    m = padTime(m);
    s = padTime(s);
    timeStr = h + ":" + m + ":" + s;

    //get day of the week
    weekdays = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
    ];
    weekday = weekdays[today.getDay()];

    //set clock
    document.getElementById('clock').innerHTML =  "It is currently " + timeStr + " on a " + weekday + ".";
    setTimeout(startClock, 1000);
}

function padTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

startClock();