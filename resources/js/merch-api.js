async function fetchMerchsData() {
  try {
    const response = await fetch('http://127.0.0.1:8000/api/v1/records/merchs');
    const data = await response.json();
    return data.records;
  } catch (error) {
    console.error('Error fetching merchs data:', error);
    throw error;
  }
}

function formatNumber(number) {
  if (isNaN(number)) {
    return "Invalid price";
  }

  const parts = number.toString().split("-");
  
  parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  return parts.join("-");
}

// update UI
function updateMerchsUI(merchsData) {
  // Assuming artistData is an array containing artists data
  const merchsContainer = document.getElementById("merchData");

  merchsData.forEach(async (merch) => {
    const price = formatNumber(merch.harga);

    const merchHTML = `
    <div class="col-span-4 sm:col-span-6 md:col-span-4 lg:col-span-3 bg-galseid-blur rounded-2xl border border-solid">
      <div class="flex flex-col p-6 gap-3">
        <div class="flex items-center h-40">
          <img src="${merch.gambar}" alt="${merch.nama}" class="w-full h-full rounded-xl object-cover">
        </div>
        <h3 class="text-galseid-dark text-l font-bold font-display truncate">
          ${merch.nama}
        </h3>
        <p class="text-galseid-dark text-2xl font-display">
          Rp${price}
        </p>
        <a href='/merch/${merch.id}' class="flex flex-row items-center justify-center btn-galseid-red gap-2 rounded-xl font-bold py-3 px-8 text-lg text-white hover:bg-slate-700 font-display">
          Beli
          <i class="fas fa-shopping-cart"></i>
        </a>
      </div>
    </div>
    `;

    merchsContainer.innerHTML += merchHTML;
  });
}

async function init() {
  try {
    const merchsData = await fetchMerchsData();
    updateMerchsUI(merchsData);
  } catch (error) {
    console.error('Error initializing merch data:', error);
  }
}

init();
