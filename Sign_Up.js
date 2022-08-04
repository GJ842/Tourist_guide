

function fnamechk() {
    var fname = document.getElementById("fname").value;
    var regfn = /^[a-zA-Z]+$/;
    if (regfn.test(fname)) {
        document.getElementById("fname").classList.add("r");
        return true;
    }
    else {
        document.getElementById("fname").classList.add("w");
        return false;
    }
}

function lnamechk() {
    var lname = document.getElementById("lname").value;
    var regln = /^[a-zA-Z]+$/;
    if (regln.test(lname)) {
        document.getElementById("lname").classList.add("r");
        return true;
    }
    else {
        document.getElementById("lname").classList.add("w");
        return false;
    }
}

function emailchk() {
    var email = document.getElementById("email").value;
    var regem = /^[a-z0-9\.]+@[a-z]+\.[a-z]{2,3}/;
    if (regem.test(email)) {
        document.getElementById("email").classList.add("r");
        return true;
    }
    else {
        document.getElementById("email").classList.add("w");
        return false;
    }
}

function numberchk() {
    var num = document.getElementById("num").value;
    var regnu = /^[0-9]{10}$/;
    if (regnu.test(num)) {
        document.getElementById("num").classList.add("r");
        return true;
    }
    else {
        document.getElementById("num").classList.add("w");
        return false;
    }
}

function datecheck() {
    var cdate = new Date();
    var cyear = cdate.getFullYear();
    console.log(cyear);
    var idate = new Date($("#dob").val());
    var iyear = idate.getFullYear();
    console.log(iyear);
    if ((cyear - iyear) >= 18 && (cyear - iyear) <= 128) {
        document.getElementById("dob").classList.add("r");
        return true;
    }
    else {
        document.getElementById("dob").classList.add("w");
        return false;
    }
}



var submit = document.getElementById("submit");
submit.addEventListener("click", function () {
    document.getElementById("fname").classList.remove("r");
    document.getElementById("fname").classList.remove("w");
    document.getElementById("lname").classList.remove("r");
    document.getElementById("lname").classList.remove("w");
    document.getElementById("email").classList.remove("r");
    document.getElementById("email").classList.remove("w");
    document.getElementById("num").classList.remove("r");
    document.getElementById("num").classList.remove("w");
    document.getElementById("dob").classList.remove("r");
    document.getElementById("dob").classList.remove("w");
    fnamechk();
    lnamechk();
    emailchk();
    numberchk();
    datecheck();
    if (fnamechk() && lnamechk() && emailchk() && numberchk() && datecheck()) {
        var template=`
        <input type="submit" value="submit" class="submit">
        `;
        document.getElementById("submitdiv").innerHTML=template;
    }
    else {
        alert("Check Values")
    }
})
