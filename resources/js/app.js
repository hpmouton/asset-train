import './bootstrap';
// Check if it's the user's first login (you need to implement this logic)
// const isFirstLogin = checkIfFirstLogin();

// Get references to the welcome component and dismiss button
const welcomeComponent = document.getElementById('welcomeComponent');
const dismissButton = document.getElementById('dismissWelcome');

// Show the welcome component if it's the first login
// if (isFirstLogin) {
//     welcomeComponent.style.display = 'block';
// }

// Add an event listener to the dismiss button
dismissButton.addEventListener('click', () => {
    welcomeComponent.style.display = 'none'; // Hide the welcome component
    // Optionally, update the user's status to indicate that they've seen the welcome message
    // This ensures it doesn't appear again on subsequent logins
});
