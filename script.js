function validateForm() {
    const message = document.getElementById('message').value;

    if (message.trim() === "") {
        alert("Message is required!");
        return false;
    }

    return true;
}

document.addEventListener("DOMContentLoaded", function() {
    fetch('feedback.txt')
        .then(response => response.text())
        .then(data => {
            const feedbackList = data.trim().split('\n').map(item => `<div>${item}</div>`).join('');
            document.getElementById('feedback-list').innerHTML = feedbackList;
        });
});
