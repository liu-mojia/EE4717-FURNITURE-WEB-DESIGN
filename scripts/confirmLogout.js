
function confirmLogout() {
    var confirmation = confirm("Are you sure you want to log out?");
    if (confirmation) {
        // User confirmed, log them out and redirect
        window.location.href = "logout.php"; // Replace with your logout script
    }
}
