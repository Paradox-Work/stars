let a = 0; // Declare the variable 'a' and initialize it to 0.
let b = 0; // Declare the variable 'b' and initialize it to 0.

// Function to handle click event for the first button
function handleClick() {
    a = a + 1; // Increment the value of 'a' by 1.
    document.getElementById("count").textContent = a; // Update the content of an HTML element with id 'count' to display the value of 'a'.
    document.getElementById("input").value = a;
}

// Attach an event listener to the second button with id 'btnCount1'
document.getElementById("btnCount1").addEventListener("click", () => {
    b = b + 1; // Increment the counter by 1
    document.getElementById("count1").textContent = b; // Update the displayed value for the second counter
});
