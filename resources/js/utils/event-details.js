import moment from "moment";

function formatDateTime(rawDate) {
    const formattedDate = moment(rawDate).format("D MMMM YYYY");
    const formattedTime = moment(rawDate).format("HH:mm");
    return { formattedDate, formattedTime };
}

// Set formatted date
const dateContainer = document.getElementById('eventDate');
const { formattedDate, formattedTime } = formatDateTime(eventDate);
const dateHTML = `<p class="font-display ms-1 pt-2">${formattedDate}</p>`;
dateContainer.innerHTML = dateHTML;

// Set formatted time
const timeContainer = document.getElementById('eventTime');
const timeHTML = `<p class="font-bold font-display ms-1">${formattedTime} WIB</p>`;
timeContainer.innerHTML = timeHTML;
