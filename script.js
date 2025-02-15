let history = [];

function addToDisplay(value) {
    document.getElementById("result").value += value;
}

function clearAll() {
    document.getElementById("result").value = "";
}

function deleteDigit() {
    let display = document.getElementById("result");
    display.value = display.value.slice(0, -1);
}

function calculate() {
    let display = document.getElementById("result");
    try {
        let result = eval(display.value);
        history.push(display.value + " = " + result);
        display.value = result;
    } catch (e) {
        alert("Invalid Expression");
    }
}

function showHistory() {
    let historyDiv = document.getElementById("history");
    if (history.length === 0) {
        historyDiv.innerHTML = "No history";
    } else {
        historyDiv.innerHTML = history.join("<br>");
    }
    historyDiv.style.display = "block";
}
