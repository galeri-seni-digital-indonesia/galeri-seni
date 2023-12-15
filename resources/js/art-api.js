async function fetchArtsData() {
  try {
    const response = await fetch('https://www.galseid.wip.la/api/v1/records/arts');
    const data = await response.json();
    return data.records;
  } catch (error) {
    console.error('Error fetching arts data:', error);
    throw error;
  }
}

async function fetchArtistDetails(artistId) {
  try {
    const response = await fetch(`https://www.galseid.wip.la/api/v1/records/artists/${artistId}`);
    const data = await response.json();
    return data;
  } catch (error) {
    console.error(`Error fetching artist details for artistId ${artistId}:`, error);
    throw error;
  }
}

function redirectToArtDetailPage(artId) {
  // Assuming your art detail page URL follows the pattern '/art/{artId}'
  const artDetailPageUrl = `/art/${artId}`;
  window.location.href = artDetailPageUrl;
}

// update UI
function updateArtsUI(artsData) {
  // Assuming artsData is an array containing arts data
  const artsContainer = document.getElementById("artData");

  artsData.forEach(async (art) => {
    const artistDetails = await fetchArtistDetails(art.artistId);
    const artHTML = `
    <div class="relative col-span-4 sm:col-span-6 lg:col-span-4 m-4">
      <svg viewBox="0 0 62 57" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute h-[70px] w-[70px] z-[-10] mt-[-16px] ms-[-12px]">
        <path id="Rectangle 29" d="M0 8C0 3.58172 3.58172 0 8 0H53.0113C60.3609 0 63.8212 9.0784 58.3363 13.9704L13.3249 54.1156C8.16866 58.7144 0 55.0544 0 48.1452V8Z" fill="url(#paint0_linear_84_321)"/>
        <defs>
        <linearGradient id="paint0_linear_84_321" x1="2.06754e-07" y1="33" x2="74" y2="33" gradientUnits="userSpaceOnUse">
        <stop stop-color="#0E0E0E"/>
        <stop offset="1" stop-color="#272727"/>
        </linearGradient>
        </defs>
      </svg>
      <svg viewBox="0 0 62 57" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 h-[70px] w-[70px] z-[-10] mb-[-16px] ms-[-12px]">
        <path id="Rectangle 31" d="M0 49C0 53.4183 3.58172 57 8 57H53.0113C60.3609 57 63.8212 47.9216 58.3363 43.0296L13.3249 2.88438C8.16866 -1.71444 0 1.94562 0 8.85475V49Z" fill="url(#paint0_linear_84_327)"/>
        <defs>
        <linearGradient id="paint0_linear_84_327" x1="37" y1="57" x2="37" y2="-9" gradientUnits="userSpaceOnUse">
        <stop stop-color="#E65C00"/>
        <stop offset="1" stop-color="#F9D423"/>
        </linearGradient>
        </defs>
      </svg>
      <svg viewBox="0 0 62 57" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute right-0 h-[70px] w-[70px] z-[-10] mt-[-16px] me-[-12px]">
        <path id="Rectangle 30" d="M62 8C62 3.58172 58.4183 0 54 0H8.98866C1.63911 0 -1.82119 9.0784 3.66374 13.9704L48.6751 54.1156C53.8313 58.7144 62 55.0544 62 48.1452V8Z" fill="url(#paint0_linear_84_333)"/>
        <defs>
        <linearGradient id="paint0_linear_84_333" x1="25" y1="0" x2="25" y2="66" gradientUnits="userSpaceOnUse">
        <stop stop-color="#E65C00"/>
        <stop offset="1" stop-color="#F9D423"/>
        </linearGradient>
        </defs>
      </svg>
      <svg viewBox="0 0 62 57" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 right-0 h-[70px] w-[70px] z-[-10] mb-[-16px] me-[-12px]">
        <path id="Rectangle 32" d="M62 49C62 53.4183 58.4183 57 54 57H8.98866C1.63911 57 -1.82119 47.9216 3.66374 43.0296L48.6751 2.88438C53.8313 -1.71444 62 1.94562 62 8.85475V49Z" fill="url(#paint0_linear_84_339)"/>
        <defs>
        <linearGradient id="paint0_linear_84_339" x1="62" y1="24" x2="-12" y2="24" gradientUnits="userSpaceOnUse">
        <stop stop-color="#0E0E0E"/>
        <stop offset="1" stop-color="#272727"/>
        </linearGradient>
        </defs>
      </svg>
      <div class="flex flex-col p-6 gap-2 bg-galseid-blur">
        <div class="flex items-center h-64 mb-2">
          <img src="/assets/img/Image-placeholder.png" data-src="${art.gambar}" alt="${art.nama}" class="lazyload w-full h-full rounded-xl object-cover">
        </div>
        <div class="flex flex-row gap-2 items-center font-bold bg-gradient-to-t from-galseid-red-dark to-galseid-red-light bg-clip-text text-transparent">
          <i class="fas fa-paint-brush"></i>
          <p class="text-lg font-header truncate">${artistDetails.nama}</p>
        </div>
        <h3 class="text-galseid-dark text-2xl font-bold font-display mb-2 truncate">${art.nama}</h3>
        <a href='/galeri/${art.id}' class="btn-galseid-red text-center" onclick="redirectToArtDetailPage(${art.id})">
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
