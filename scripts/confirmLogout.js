
function confirmLogout() {
    var confirmation = confirm("Are you sure you want to log out?");
    if (confirmation) {
        window.location.href = "../php/logout.php"; 
    }
}
