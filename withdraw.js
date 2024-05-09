document.getElementById("withdrawForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var amount = parseInt(document.getElementById("amount").value);
    if (amount > 0) {
        this.submit();
    } else {
        alert("Please enter a valid amount to withdraw.");
    }
});
