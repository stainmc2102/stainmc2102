// js/donate.js
document.getElementById("method").addEventListener("change", function() {
    document.getElementById("bankFields").style.display = this.value === "bank" ? "block" : "none";
    document.getElementById("cardFields").style.display = this.value === "card" ? "block" : "none";
});

document.getElementById("donateForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    fetch("api/thesieutoc.php", {
            method: "POST",
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            document.getElementById("donateResult").innerHTML = data.message;
        });
});