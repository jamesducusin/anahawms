// const second = 1000,
//     minute = second * 60,
//     hour = minute * 60,
//     day = hour * 24;

// let countDown = new Date('Sep 30, 2021 00:00:00').getTime(),
//     x = setInterval(function() {

//         let now = new Date().getTime(),
//             distance = countDown - now;

//         document.getElementById('days').innerText = Math.floor(distance / (day)),
//             document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
//             document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
//             document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

//         //do something later when date is reached
//         //if (distance < 0) {
//         //  clearInterval(x);
//         //  'IT'S MY BIRTHDAY!;
//         //}

//     }, second)
const second = 1000,
minute = second * 60,
hour = minute * 60,
day = hour * 24;

// Get the expiration date from the data attribute
const timerElement = document.querySelector('.timer');
const expirationDateAttribute = timerElement.getAttribute('data-expiration');
const expirationDate = new Date(expirationDateAttribute).getTime();

// Update the countdown timer
function updateCountdown() {
const now = new Date().getTime();
const distance = expirationDate - now;

// Calculate days, hours, minutes, and seconds
const daysRemaining = Math.floor(distance / day);
const hoursRemaining = Math.floor((distance % day) / hour);
const minutesRemaining = Math.floor((distance % hour) / minute);
const secondsRemaining = Math.floor((distance % minute) / second);

// Update the corresponding span elements
document.getElementById('days').innerText = daysRemaining;
document.getElementById('hours').innerText = hoursRemaining;
document.getElementById('minutes').innerText = minutesRemaining;
document.getElementById('seconds').innerText = secondsRemaining;

// Check if the promo has expired
if (distance <= 0) {
    clearInterval(countdownInterval);
    timerElement.innerText = 'Promo has ended';
}
}

// Initial call to set up the timer
updateCountdown();

// Update the timer every second
const countdownInterval = setInterval(updateCountdown, second);