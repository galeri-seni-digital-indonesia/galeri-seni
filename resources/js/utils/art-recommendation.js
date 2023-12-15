import API_ENDPOINTS from "../globals/api-endpoints";

import ContentBasedRecommender from "../lib/ContentBasedRecommender";
// import translate from "translate";
import translate from "translate";


const recExample1 = document.getElementById('recExample1');
recExample1.addEventListener("click", () => {
   document.getElementById("input-recommendation").value = recExample1.innerText;
});

const recExample2 = document.getElementById('recExample2');
recExample2.addEventListener("click", () => {
   document.getElementById("input-recommendation").value = recExample2.innerText;
});

const recExample3 = document.getElementById('recExample3');
recExample3.addEventListener("click", () => {
   document.getElementById("input-recommendation").value = recExample3.innerText;
});


async function getIdRecommendations(artsData, recQuery) {
   translate.engine = "google";

   const arts = [];

   const englishQuery = await translate(recQuery, {
       from: "id",
       to: "en",
   });

   for (const artData of artsData) {
      // translate(artData.deskripsi, {
      //       from: "id",
      //       to: "en",
      // }).then(response => {
      //    const art = {
      //        id: artData.id,
      //        nama: artData.nama,
      //      //   content: artData.deskripsi,
      //        content: response,
      //       };
      //    arts.push(art);
      // });

      const englishDesc = await translate(artData.deskripsi, {
          from: "id",
          to: "en",
      });
      const art = {
          id: artData.id,
          nama: artData.nama,
            content: englishDesc,
      };
      arts.push(art);

      // const art = {
      //     id: artData.id,
      //     nama: artData.nama,
      //       content: artData.deskripsi,
      // };
      // arts.push(art);
   }

   // arts.unshift({ id: 0, nama: "(USER KEYWORD)", content: "makna kehidupan" });
   arts.unshift({ id: 0, nama: "(USER KEYWORD)", content: englishQuery });

   console.log(arts);

   const recommender = new ContentBasedRecommender({
       minScore: 0.0001,
       maxSimilarDocuments: 100,
   });

   // start training
   recommender.train(arts);

   //get top 10 similar items to document 1000002
   const similarDocuments = recommender.getSimilarDocuments("0", 0, 6);

   console.log(similarDocuments);

   const idRecs = [];
   similarDocuments.forEach(async (sd) => {
       idRecs.push(sd.id);
   });

   return idRecs;
}

async function fetchArtsData() {
    try {
        const response = await fetch(API_ENDPOINTS.ART);
        const data = await response.json();
        return data.records;
    } catch (error) {
        console.error("Error fetching arts data:", error);
        throw error;
    }
}

async function fetchArtistDetails(artistId) {
    try {
        const response = await fetch(`${API_ENDPOINTS.ARTIST}/${artistId}`);
        const data = await response.json();
        return data;
    } catch (error) {
        console.error(
            `Error fetching artist details for artistId ${artistId}:`,
            error
        );
        throw error;
    }
}

function redirectToArtDetailPage(artId) {
    // Assuming your art detail page URL follows the pattern '/art/{artId}'
    const artDetailPageUrl = `/art/${artId}`;
    window.location.href = artDetailPageUrl;
}



// update UI
async function updateArtsUI(artsData, recQuery) {
   const recSpinner = document.getElementById("recSpinner");
   recSpinner.classList.remove("hidden");

   // Assuming artsData is an array containing arts data
   const artsContainer = document.getElementById("artRec");
   const queryContainer = document.getElementById("queryContainer");
   const emptyMessage = document.getElementById("emptyMessage");

   artsContainer.innerHTML = '';
   queryContainer.innerHTML = '';
   emptyMessage.innerHTML = '';

   queryContainer.innerHTML += '<div class="w-fit text-white text-lg bg-galseid-dark mx-auto mb-1 px-3 pb-1 rounded-md">Rekomendasi untuk :</div>' + recQuery;

   const idRecs = await getIdRecommendations(artsData, recQuery);

   artsData.forEach(async (art) => {
      if (idRecs.length == 0) {
         emptyMessage.classList.remove('hidden');
         emptyMessage.classList.add('block');
         emptyMessage.innerHTML = "Maaf, tidak ada rekomendasi untuk kueri ini.";
      }

      if (idRecs.includes(art.id) === true) {
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
                  <a href='/galeri/${art.id}' class="btn-galseid-red text-center" onclick="redirectToArtDetailPage(${art.id})">
                     Detail&nbsp;
                     <i class="fas fa-external-link-alt"></i>
                  </a>
               </div>
            </div>
            `;

         artsContainer.innerHTML += artHTML;
      }
   });

   recSpinner.classList.add("hidden");
}

async function init() {
    try {
      const artsData = await fetchArtsData();

      const btnRec = document.getElementById("btn-recommendation");
      btnRec.addEventListener("click", async () => {
         const recQuery = document.getElementById("input-recommendation").value;
         console.log(recQuery);
         await updateArtsUI(artsData, recQuery);
      });

      const inputRec = document.getElementById("input-recommendation");
      inputRec.addEventListener("keypress", async (event) => {
         if (event.key === "Enter") {
            btnRec.click();
         }
      });

    } catch (error) {
        console.error("Error initializing arts data:", error);
    }
}

init();
