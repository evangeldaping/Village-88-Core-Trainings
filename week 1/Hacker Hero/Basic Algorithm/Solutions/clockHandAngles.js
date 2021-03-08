function clockHandAngles(seconds) {
    var hours, minutes, seconds, days, weeks;
    hours = seconds/3600;
    minutes = (seconds - (3600*Math.trunc(hours)))/60;
    seconds = seconds - (3600*Math.trunc(hours)) - (60*Math.trunc(minutes));
    days = 0;
    weeks = 0;
    while (hours >= 12) {
        hours -= 12;
        days++;
        if (days == 14) {
        weeks++;
        days = 0;
        }
    }
    hours = hours*30;
    minutes = minutes*6;
    seconds = seconds*6;
    if (weeks > 0) {
        console.log("[" + hours + "," + minutes + "," + seconds + "]");
    } else {
        console.log(("[" + hours.toFixed(0) + "," + minutes + "," + seconds + "]"));
    }
}

clockHandAngles(3600);
clockHandAngles(10800);
clockHandAngles(5000);
clockHandAngles(8000);
clockHandAngles(50000);