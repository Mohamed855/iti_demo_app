// task 1
alert("Welcome to my site");

function getUsrName() {
    let usrName = prompt("Enter your name");
    while (usrName == null || usrName.trim() == "") {
        usrName = prompt("Enter your name");
    }
    document.write("Hello " + usrName);
}

// task 2
function getTodaysTemp() {
    let temp = prompt("Enter today's temperature");
    document.write("The Weather is " + todaysTemp(Number(temp)) + " today");
}

function todaysTemp(temp) {
    let tempState = "";
    Number(temp) >= 30 ? tempState = "Hot" : tempState = "Cold";
    return tempState;
}

// task 3
function usrInfo() {
    let usrName = prompt("Enter your name");
    while (usrName == null || usrName.trim() == "" || typeof (usrName) != "string") {
        usrName = prompt("Enter your name");
    }
    let usrBirthYear = prompt("Enter your birth year");
    while (usrBirthYear == null
        || usrBirthYear.trim() == ""
        || Number(usrBirthYear) >= 2010
        || /^\d+$/.test(usrBirthYear) === false) {
        usrBirthYear = prompt("Enter your birth year");
    }
    let usrage = 2023 - Number(usrBirthYear);
    document.write("Name: " + usrName + "<br>");
    document.write("Birth Year: " + usrBirthYear + "<br>");
    document.write("Age: " + usrage);
}

// task 4
function printWelcomeHeading() {
    for (let i = 1; i <= 6; i++) {
        document.write("<h" + i + ">Welcome to my page<h" + i + ">");
    }
}
