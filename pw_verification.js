function verifyPasswords() {
    var pw1 = document.getElementById("password1").value;
    var pw2 = document.getElementById("password2").value;
    var resultEl = document.getElementById("result");

    // Clear previous result
    resultEl.textContent = "";
    resultEl.className = "result-msg";

    if (pw1.length < 8) {
        alert("Password must be at least 8 characters long.");
        resultEl.textContent = "Error: Password must be at least 8 characters long.";
        resultEl.classList.add("error");
        return;
    }

    if (pw1 !== pw2) {
        alert("Passwords do not match. Please try again.");
        resultEl.textContent = "Error: Passwords do not match.";
        resultEl.classList.add("error");
        return;
    }

    resultEl.textContent = "Success: The two passwords match!";
    resultEl.classList.add("success");
}