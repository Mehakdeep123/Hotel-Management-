function answer(){
    var a = document.getElementById("rooms").value;
    var b = document.getElementById("no_of_days").value;
    var c = "Total cost is = ₹";
    var d = a*b*2000;
    var e = c.concat(d);
    var final_price = e.concat(" (Inc. of taxes)")
    document.getElementById("value2").innerHTML = final_price;
}