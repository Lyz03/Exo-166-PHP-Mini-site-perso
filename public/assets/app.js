// admin page : showLastMessage button
const lastMessageButton = document.querySelector('#showLastMessage');
const lastMessageDiv = document.querySelector('#lastMessage');
let a = 0;

if (lastMessageButton) {
    lastMessageButton.addEventListener('click', function () {
        if (a === 0) {
            lastMessageDiv.style.display = 'block';
            a++
        } else if (a === 1) {
            lastMessageDiv.style.display = 'none';
            a--
        }
    })
}