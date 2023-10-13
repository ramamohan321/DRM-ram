function togglePasswordVisibility() {
    const password = document.querySelector("#password");
    const togglePassword = document.querySelector("#togglePassword");

    // Toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);

    // Toggle the eye icon based on the password visibility
    if (type === "text") {
        togglePassword.classList.remove("fa-eye");
        togglePassword.classList.toggle("active");
        togglePassword.classList.add("fa-eye-slash");
    } else {
        togglePassword.classList.toggle("active");
        togglePassword.classList.remove("fa-eye-slash");
        togglePassword.classList.add("fa-eye");
    }
}

//----------------------------------------------------------

// Function to adjust the login box height
function adjustLoginBoxHeight() {
    const loginBox = document.querySelector(".loginBox");
    const errorMessage = document.querySelector(".error-message");

    // Check if an error message is displayed
    if (errorMessage && errorMessage.textContent.trim() !== '') {
        // If there is an error message, increase the login box height
        loginBox.style.height = "400px";
    } else {
        // If no error message, use the default height
        loginBox.style.height = "350px"; // Or set it to any default height you prefer
    }
}

// Call the function when the page loads and whenever an error message is displayed
window.onload = adjustLoginBoxHeight;



/* function loginValidate() {
    var userid = document.getElementById("userid").value;
    var password = document.getElementById("password").value;
    if (userid == "admin" && password == "admin@123") {
        window.location.href = "dashboard.html"; // Redirecting to dashboard page.
        alert("Login Successfully!   :-)");
        return false;
    } 
    if (userid == "member" && password == "member@123") {
        window.location.href = "member-dashboard.html"; // Redirecting to member dashboard page.
        alert("Member Login Successfully!   :-)");
        return false;
    }
    else {
        alert("User ID (or) Password doesn't match   :-(");
        window.location.href = "login.html"; // Redirecting to same login page.
    }
} */

/* const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("loginSubmit");
// const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const userid = loginForm.userid.value;
    const password = loginForm.password.value;

    if (userid === "admin" && password === "admin@123") {
        alert("Login Successfully! :-)");
        location.reload();
    } else {
        loginErrorMsg.style.opacity = 1;
    }
}) */
