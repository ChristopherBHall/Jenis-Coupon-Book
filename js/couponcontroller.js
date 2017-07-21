var coupon = document.getElementById("slider");

// create a simple instance
// by default, it only adds horizontal recognizers
var couponwindow = new Hammer(coupon);

// listen to events...
couponwindow.on("panleft", function(ev) {
    coupon.textContent = ev.type +" gesture detected.";
});
couponwindow.on("panright", function(ev) {
    coupon.textContent = ev.type +" gesture detected.";
});
couponwindow.on("tap press", function(ev) {
    coupon.textContent = ev.type +" gesture detected.";
});
