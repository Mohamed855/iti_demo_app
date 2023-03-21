// task 1
function getUsrData() {
    do {
        var favColor = prompt("What is your favorit color (red, blue, green)");
        console.log(favColor.toLowerCase());
    } while (!favColor.toLowerCase().trim() == "red"
    || !favColor.toLowerCase().trim() == "blue"
    || !favColor.toLowerCase().trim() == "green");
    do {
        var usrName = prompt("Enter your name");
    } while (!usrName.match(/^[A-Z]+$/ig) || usrName.length <= 2);
    document.write("Welcome dear guest " + "<span style='color:" + favColor + "'>" + usrName + "</span>");
    document.write("<br>");
    do {
        var PhNum = prompt("Enter your phone number");
    } while (!PhNum.match(/^[0-9]{8}$/g) || PhNum.length != 8);
    document.write("Your phone number is " + "<span style='color:" + favColor + "'>" + PhNum + "</span>");
    document.write("<br>");
    do {
        var mobNum = prompt("Enter your mobile number");
    } while (!mobNum.match(/^[010,011,012]+[0-9]{8}$/ig) || mobNum.length != 11);
    document.write("Your mobile number is " + "<span style='color:" + favColor + "'>" + mobNum + "</span>");
    document.write("<br>");
    do {
        var email = prompt("Enter your email");
    } while (!email.match(/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]/ig));
    document.write("Your email is " + "<span style='color:" + favColor + "'>" + email + "</span>");
}


// task 2
function getLonggestWord() {
    let str = prompt("Enter text you want to check (ex) 'this is a javascript string demo'");
    let strWords = str.split(" ");
    let wordLength = [];
    strWords.forEach(element => {
        wordLength.push(element.length);
    });
    let longgestWord = "";
    for (let i = 0; i < strWords.length; i++) {
        if (strWords[i].length === wordLength.sort((a,b)=>a-b)[strWords.length - 1]) {
            document.write("The longgest word is " + strWords[i]);
            break;
        }
    }   
} 

// task 3
function sortNums() {
    var arr = [];
    for (let i = 1; i <= 5; i++) {
        do {
            var enteredNum = prompt("Enter number " + i);
        } while (!enteredNum.match(/^\d+$/));
       arr.push(Number(enteredNum));
    }
    document.write("Entered numbers are " + arr);
    document.write("<br>");
    document.write("Ascending Sort " + arr.sort((a,b)=> a-b));
    document.write("<br>");
    document.write("Descending Sort " + arr.sort((a,b)=> b-a));
}

// task 4
function mathExamples(){
    do {
      var cr = prompt("Enter a value of a circle raduis");  
    } while (!cr.match(/^\d+$/));
    alert("Total area of the circle is " + cr*cr*Math.PI);
    do {
      var sqr = prompt("Enter a number to calculate its square root");  
    } while (!sqr.match(/^\d+$/));
    alert("Square root of " + sqr + " is " + Math.sqrt(sqr));
    do {
        var ang = prompt("Enter a value of angle");  
      } while (!ang.match(/^\d+$/) || ang < -360 || ang > 360);
      console.log(90/180*Math.PI);
      console.log(Math.cos(90/180*Math.PI));
      console.log(Math.cos(1.5707963267948966));
    document.write("cos " + ang + "<sup>°</sup>" + " is " + Math.cos(ang/180*Math.PI));
}