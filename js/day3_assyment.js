// task 1
var taskID = 0;

function todoList() {
    todoPageView();
}

function todoPageView() {
    document.write('<!DOCTYPE html><html lang="en"><head><title>To do List</title><link rel="stylesheet" href="../styles/jsAssyments.css"></head><body>');

    document.write('<div id="todoListContainer"><h1>TO DO List</h1><hr>');
    document.write('<div id="addingTasksContainer"><input id="taskTitleInput" type="text" placeholder=" Add your Task here" maxlength="50">');
    document.write('<button class="todoListBtns" onclick="addingTask()">Add</button>');
    document.write('<br><br>');
    document.write('<div id="taskContainer"></div></div></div>');

    document.write('</body></html>');
}

function addingTask() {
    var taskTitleInput = document.getElementById("taskTitleInput"),
        taskContainer = document.getElementById("taskContainer");
    var task, doneTask, deleteTask;
    if (taskTitleInput.value.trim() == "") {
        alert("You must add a task title")
    } else {
        task = document.createElement("div");
        task.id = "task" + taskID;
        task.className = "task";
        task.innerText = taskTitleInput.value;

        doneTask = document.createElement("button");
        doneTask.id = "doneTask" + taskID;
        doneTask.className = "todoListBtns";
        doneTask.innerText = "Done";
        doneTask.setAttribute("onclick", "finishedTask(" + taskID + ")");

        deleteTask = document.createElement("button");
        deleteTask.id = "deleteTask" + taskID;
        deleteTask.className = "todoListBtns";
        deleteTask.innerText = "Delete";
        deleteTask.setAttribute("onclick", "deletedTask(" + taskID + ")");

        taskContainer.appendChild(task);
        taskContainer.appendChild(doneTask);
        taskContainer.appendChild(deleteTask);

        taskID++;
    }
    taskTitleInput.value = "";
}

function finishedTask(taskID) {
    let selectedTask = document.getElementById("task" + taskID);
    selectedTask.style.backgroundColor = "rgb(50, 204, 50)";
    selectedTask.style.border = "1px solid rgb(200, 200, 200)";
    selectedTask.style.color = "white";
}

function deletedTask(taskID) {
    let selectedTask = document.getElementById("task" + taskID),
        selectedTaskDoneBtn = document.getElementById("doneTask" + taskID),
        selectedTaskDeleteBtn = document.getElementById("deleteTask" + taskID);

    selectedTask.remove();
    selectedTaskDoneBtn.remove();
    selectedTaskDeleteBtn.remove();
}

// task 2
function ajaxRequest() {
    ajaxPageView();
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "https://jsonplaceholder.typicode.com/users");
    xhr.send("");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let usersData = document.getElementById("usersData");
            let obj = JSON.parse(xhr.responseText);

            for (let val in obj) {;
                let singleUserData = [
                    obj[val]["id"],
                    obj[val]["name"],
                    obj[val]["username"],
                    obj[val]["email"],
                    obj[val]["address"]["street"],
                    obj[val]["address"]["suite"],
                    obj[val]["address"]["city"],
                    obj[val]["address"]["zipcode"],
                    obj[val]["address"]["geo"]["lat"],
                    obj[val]["address"]["geo"]["lng"],
                    obj[val]["phone"],
                    obj[val]["website"],
                    obj[val]["company"]["name"],
                    obj[val]["company"]["catchPhrase"],
                    obj[val]["company"]["bs"],
                    ];
                usersData.innerHTML += "<tr><td>" + singleUserData[0] + "</td><td>" + singleUserData[1] + "</td><td>" + singleUserData[2] + "</td><td>" + singleUserData[3] + "</td><td>" + singleUserData[4] + "</td><td>" + singleUserData[5] + "</td><td>" + singleUserData[6]+ "</td><td>" + singleUserData[7] + "</td><td>" + singleUserData[8] + "</td><td>" + singleUserData[9] + "</td><td>" + singleUserData[10] + "</td><td><a href='" + singleUserData[11] + "' class='usersWebsiteLink'>" + singleUserData[11] + "</a></td><td>" + singleUserData[12] + "</td><td>" + singleUserData[13] + "</td><td>" + singleUserData[14] + "</td></tr>";
            }
        }
    }
}

function ajaxPageView() {
    document.write('<!DOCTYPE html><html lang="en"><head><title>Users Database</title><link rel="stylesheet" href="../styles/jsAssyments.css"></head><body>');

    document.write('<div id="usersDataContainer"><h1>Users Database View</h1><hr></div>');

    document.write('<table><thead>');
    document.write('<tr><td rowspan="3">ID</td><td rowspan="3">Name</td><td rowspan="3">Username</td><td rowspan="3">Email</td><td colspan="6">Address</td><td rowspan="3">Phone</td><td rowspan="3">Website</td><td colspan="3">Company</td></tr>');
    document.write('<tr><td rowspan="2">Street</td><td rowspan="2">Suite</td><td rowspan="2">City</td><td rowspan="2">Zip Code</td><td colspan="2">GEO</td><td rowspan="2">Name</td><td rowspan="2">Catch Phrase</td><td rowspan="2">BS</td></tr>');
    document.write('<tr><td>LAT</td><td>LNG</td></tr>');
    document.write('</thead><tbody id="usersData"></tbody></table>');

    document.write('</body></html>');
}
