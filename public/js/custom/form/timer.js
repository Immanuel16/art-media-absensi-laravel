document.getElementById("notification-closed").style.display = "none";
document.getElementById("form-pelayanan").style.display = "none";
document.getElementById("notification-opened").style.display = "none";


// Run myfunc every second
var myfunc = setInterval(function () {
    // var endDate = new Date("Feb 25, 2021 18:18:00").getTime();
    document.getElementById("notification-opened").style.display = "block";

    var startDate = new Date().getTime();
    // var startDate = new Date("Feb 25, 2021 18:00:00").getTime();
    var endDate = new Date("Dec 27, 2021 11:00:00").getTime();
    var timeleft = endDate - startDate;

    var startDateOpened = new Date().getTime();
    // var startDate = new Date("Feb 25, 2021 18:00:00").getTime();
    var endDateOpened = new Date("Dec 26, 2021 10:45:00").getTime();
    var timeleftOpened = endDateOpened - startDateOpened;


    // Calculating the days, hours, minutes and seconds left
    var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);


    var daysOpened = Math.floor(timeleftOpened / (1000 * 60 * 60 * 24));
    var hoursOpened = Math.floor((timeleftOpened % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutesOpened = Math.floor((timeleftOpened % (1000 * 60 * 60)) / (1000 * 60));
    var secondsOpened = Math.floor((timeleftOpened % (1000 * 60)) / 1000);

    document.getElementById("daysOpened").innerHTML = daysOpened + " hari "
    document.getElementById("hoursOpened").innerHTML = hoursOpened + " jam "
    document.getElementById("minutesOpened").innerHTML = minutesOpened + " menit "
    document.getElementById("secondsOpened").innerHTML = secondsOpened + " detik "

    // Result is output to the specific element
    document.getElementById("days").innerHTML = days + " hari "
    document.getElementById("hours").innerHTML = hours + " jam "
    document.getElementById("minutes").innerHTML = minutes + " menit "
    document.getElementById("seconds").innerHTML = seconds + " detik "

    // Result is output to the specific element
    document.getElementById("daysOne").innerHTML = days + " hari "
    document.getElementById("hoursOne").innerHTML = hours + " jam "
    document.getElementById("minutesOne").innerHTML = minutes + " menit "
    document.getElementById("secondsOne").innerHTML = seconds + " detik "

    // console.log(days)

    // if(days < 5 ){
    //     // document.getElementById("notification-opened").style.display = "none";
    //     document.getElementById("form-pelayanan").style.display = "block";
    // } else{
    //     document.getElementById("notification-opened").style.display = "block";
    //     // document.getElementById("form-pelayanan").style.display = "none";
    // }

    if (daysOpened <= 0) {
        document.getElementById("daysOpened").style.display = "none";
        if (hoursOpened <= 0) {
            document.getElementById("hoursOpened").style.display = "none";
            if (minutesOpened <= 0) {
                document.getElementById("minutesOpened").style.display = "none";
            }
        }
    }

    if (days <= 0) {
        document.getElementById("days").style.display = "none";
        document.getElementById("daysOne").style.display = "none";
        if (hours <= 0) {
            document.getElementById("hours").style.display = "none";
            document.getElementById("hoursOne").style.display = "none";
            if (minutes <= 0) {
                document.getElementById("minutes").style.display = "none";
                document.getElementById("minutesOne").style.display = "none";
            }
        }
    }

    if (timeleftOpened < 0) {
        // clearInterval(myfunc);
        document.getElementById("notification-closed").style.display = "none";
        document.getElementById("form-pelayanan").style.display = "block";
        document.getElementById("notification-opened").style.display = "none";
    }

    // Display the message when countdown is over
    if (timeleft < 0) {
        clearInterval(myfunc);
        document.getElementById("notification-closed").style.display = "block";
        document.getElementById("form-pelayanan").style.display = "none";
        document.getElementById("notification-opened").style.display = "none";
        // document.getElementById("days").innerHTML = ""
        // document.getElementById("hours").innerHTML = ""
        // document.getElementById("mins").innerHTML = ""
        // document.getElementById("secs").innerHTML = ""
        // document.getElementById("end").innerHTML = "TIME UP!!";
    }
}, 1000);