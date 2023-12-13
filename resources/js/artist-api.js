async function fetchArtistsData() {
  try {
    const response = await fetch('https://www.galseid.wip.la/api/v1/records/artists');
    const data = await response.json();
    return data.records;
  } catch (error) {
    console.error('Error fetching artists data:', error);
    throw error;
  }
}

// update UI
function updateArtistsUI(artistsData) {
  // Assuming artistData is an array containing artists data
  const artistsContainer = document.getElementById("artistData");

  artistsData.forEach(async (artist) => {
    const artistHTML = `
      <div class="flex flex-col col-span-4 sm:col-span-6 lg:col-span-4 items-center m-3">
        <div class="flex items-center p-4 bg-galseid-blur border-4 border-galseid-yellow rounded-full">
          <img src="${artist.gambar}" alt="${artist.nama}" class="h-56 w-56 rounded-full object-cover mx-auto">
        </div>
        <a href="/seniman/${artist.id}" class="w-full mt-[-16px] bg-gradient-to-b from-galseid-red-dark to-galseid-red-light  text-white text-2xl font-semibold font-display rounded-t-[90px] rounded-b-[36px] text-center truncate py-4 px-7">
          ${artist.nama}
        </a>
        <div class="w-[80%] h-3 bg-gradient-to-r from-galseid-orange to-galseid-yellow rounded-b-full"></div>
      </div>
    `;

    artistsContainer.innerHTML += artistHTML;
  });
}

async function init() {
  try {
    const artistsData = await fetchArtistsData();
    updateArtistsUI(artistsData);
  } catch (error) {
    console.error('Error initializing artists data:', error);
  }
}

init();
