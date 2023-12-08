import moment from "moment/moment";

async function fetchEventsData() {
  try {
    const response = await fetch('http://127.0.0.1:8000/api/v1/records/events');
    const data = await response.json();
    return data.records;
  } catch (error) {
    console.error('Error fetching events data:', error);
    throw error;
  }
}

// update UI
function updateEventsUI(eventsData) {
  // Assuming eventsData is an array containing events data
  const eventsContainer = document.getElementById("eventData");
  moment.locale("id");

  eventsData.forEach(async (event) => {
    const formattedDate = moment(event.tanggal).format("D MMMM YYYY");
    const formattedTime = moment(event.tanggal).format("HH:mm");

    const eventHTML = `
    <div class="relative col-span-4 sm:col-span-12 lg:col-span-6 h-full">
      <div class="flex flex-wrap flex-row-reverse p-6 items-center sm:justify-between bg-galseid-blur rounded-2xl h-full">
        <div class="flex mb-4 sm:mb-0">
          <img src="${event.gambar}" alt="${event.nama}" class="h-40 w-40 object-cover rounded-2xl">
        </div>
        <div class="flex flex-col gap-2 my-2 w-full sm:w-1/2 min-[530px]:w-1/2">
          <a href="${event.linkEvent}" class="text-galseid-dark text-2xl font-bold font-display truncate">
            ${event.nama}
          </a>
          <div class="grid grid-template gap-x-2 gap-y-1 me-6">
            <div class="flex justify-center items-center">
              <i class="fas fa-scroll bg-gradient-to-tr from-galseid-orange to-galseid-yellow bg-clip-text text-transparent"></i>
            </div>
            <p class="text-base font-display truncate">${event.namaPenyelenggara}</p>
            <div class="flex justify-center items-center">
              <i class="fas fa-map-marker-alt bg-gradient-to-tr from-galseid-orange to-galseid-yellow bg-clip-text text-transparent"></i>
            </div>
            <p class="font-display">${event.lokasi}</p>
            <div class="flex justify-center items-center ">
              <i class="far fa-calendar bg-gradient-to-tr from-galseid-orange to-galseid-yellow bg-clip-text text-transparent"></i>
            </div>
            <p class="font-display">${formattedDate}</p>
            <div></div>
            <p class="font-bold font-display">${formattedTime} WIB</p>
          </div>
        </div>
      </div>
    </div>
    `;

    eventsContainer.innerHTML += eventHTML;
  });
}

async function init() {
  try {
    const eventsData = await fetchEventsData();
    updateEventsUI(eventsData);
  } catch (error) {
    console.error('Error initializing events data:', error);
  }
}

init();
