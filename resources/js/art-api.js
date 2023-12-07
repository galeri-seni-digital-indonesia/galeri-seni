async function fetchArtsData() {
  try {
    const response = await fetch('http://127.0.0.1:8000/api/v1/records/arts');
    const data = await response.json();
    return data.records;
  } catch (error) {
    console.error('Error fetching arts data:', error);
    throw error;
  }
}

async function fetchArtistDetails(artistId) {
  try {
    const response = await fetch(`http://127.0.0.1:8000/api/v1/records/artists/${artistId}`);
    const data = await response.json();
    return data;
  } catch (error) {
    console.error(`Error fetching artist details for artistId ${artistId}:`, error);
    throw error;
  }
}

// update UI
function updateArtsUI(artsData) {
  // Assuming artsData is an array containing your arts data
  const artsContainer = document.getElementById("artData");

  artsData.forEach(async (art) => {
    const artistDetails = await fetchArtistDetails(art.artistId);
    const artHTML = `
      <div class="relative col-span-4 sm:col-span-6 lg:col-span-4 m-4">
        <object data="/assets/img/card-corner-tl.svg" class="absolute h-[70px] w-[70px] z-[-10] mt-[-14px] ms-[-12px]"></object>
        <object data="/assets/img/card-corner-bl.svg" class="absolute bottom-0 h-[70px] w-[70px] z-[-10] mb-[-14px] ms-[-12px]"></object>
        <object data="/assets/img/card-corner-tr.svg" class="absolute right-0 h-[70px] w-[70px] z-[-10] mt-[-14px] me-[-12px]"></object>
        <object data="/assets/img/card-corner-br.svg" class="absolute bottom-0 right-0 h-[70px] w-[70px] z-[-10] mb-[-14px] me-[-12px]"></object>
        <div class="flex flex-col p-6 gap-2 bg-galseid-blur">
          <div class="flex items-center h-64 mb-2">
            <img src="${art.gambar}" alt="${art.nama}" class="w-full h-full rounded-xl object-cover">
          </div>
          <div class="flex flex-row gap-2 items-center font-bold bg-gradient-to-t from-galseid-red-dark to-galseid-red-light bg-clip-text text-transparent">
            <i class="fas fa-paint-brush"></i>
            <p class="text-lg font-header truncate">${artistDetails.nama}</p>
          </div>
          <h3 class="text-galseid-dark text-2xl font-bold font-display mb-2 truncate">${art.nama}</h3>
          <a href='${art.sumber}' class="btn-galseid-red text-center">
            Detail&nbsp;
            <i class="fas fa-external-link-alt"></i>
          </a>
        </div>
      </div>
    `;

    artsContainer.innerHTML += artHTML;
  });
}

async function init() {
  try {
    const artsData = await fetchArtsData();
    updateArtsUI(artsData);
  } catch (error) {
    console.error('Error initializing arts data:', error);
  }
}

init();
