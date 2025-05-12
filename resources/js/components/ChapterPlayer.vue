<template>
  <div id="app" class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 text-gray-900">
        <div class="max-w-2xl mx-auto p-4">
          <!-- Status Bars -->
          <div v-if="!error" class="space-y-4">
            <div v-for="(value, key) in progress" :key="key">
              <label class="block text-sm font-medium capitalize">{{ key }}: {{ value }}</label>
              <div class="w-full bg-gray-200 rounded h-2">
                <div class="h-2 rounded" :style="{ width: value + '%', backgroundColor: '#79aacf' }"></div>
              </div>
            </div>
          </div>

          <!-- Error Message -->
          <div v-if="error" class="text-red-600 mt-4">
            {{ error }}
          </div>

          <!-- Chapter Content -->
          <div v-if="!loading && currentChapter" class="mt-6">
            <h2 class="text-xl font-semibold mb-2" style="color: #79aacf;">{{ currentChapter.title }}</h2>
            <p class="whitespace-pre-line">{{ currentChapter.content }}</p>
            
            <!-- Ending Section with Image Left and Text Right -->
            <div v-if="!loading && currentChapter && (!currentChapter.choices || currentChapter.choices.length === 0)" 
                 class="mt-4 flex flex-col md:flex-row items-center gap-6">
              <!-- Image on Left -->
              <div class="w-full md:w-1/2 order-2 md:order-1">
                <img
                  v-if="getEndingImage()"
                  :src="getEndingImage()"
                  alt="Image de fin"
                  class="w-full rounded shadow"
                />
              </div>
              
              <!-- Text/Button on Right -->
              <div class="w-full md:w-1/2 order-1 md:order-2 flex flex-col justify-center">
                <div class="ending-message mb-4 flex flex-col items-center gap-4">
                  <p>{{ getEndingMessage() }}</p>
                  <button @click="restartGame" class="restartGame">
                    Recommencer l'histoire
                  </button>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Loading Indicator -->
          <div v-if="loading" class="mt-6 text-center text-gray-500">
            Chargement...
          </div>

          <!-- Choices Section -->
          <div v-if="currentChapter?.choices?.length && !loading" class="mt-6">
            <h3 class="text-lg font-medium mb-2">Choix :</h3>
            <div class="space-y-2">
              <button
                v-for="choice in currentChapter.choices"
                :key="choice.id"
                @click="onSelect(choice.id)"
                class="choice-button"
              >
                {{ choice.label }}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'

// Reactive state
const savedProgress = JSON.parse(localStorage.getItem('progress'))
const progress = ref(savedProgress || { 'Votre passion': 0, 'Votre motivation': 0, 'Votre clarté d\'esprit': 0 })
const currentChapter = ref(null)
const loading = ref(false)
const error = ref('')

// CSRF token from meta (Blade / Breeze)
const csrfToken = document
  .querySelector('meta[name="csrf-token"]')
  .getAttribute('content')

// API prefix
const apiPrefix = import.meta.env.VITE_API_BASE_URL || '/api/v1'

// Fetch a chapter by ID
async function fetchChapter(id) {
  loading.value = true
  error.value = ''
  try {
    const res = await fetch(`${apiPrefix}/chapters/${id}`, {
      credentials: 'same-origin',
      headers: {
        'Accept': 'application/json'
      }
    })
    if (!res.ok) throw new Error(`Erreur HTTP ${res.status}`)
    currentChapter.value = await res.json()
    localStorage.setItem('lastChapterId', id)
  } catch (e) {
    error.value = e.message
  } finally {
    loading.value = false
  }
}

// Handle choice selection
async function onSelect(choiceId) {
  loading.value = true
  error.value = ''
  try {
    const res = await fetch(`${apiPrefix}/progress/choose/${choiceId}`, {
      method: 'POST',
      credentials: 'same-origin',
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrfToken
      }
    })
    if (!res.ok) throw new Error(`Erreur HTTP ${res.status}`)
    const data = await res.json()
    // Update stats
    progress.value = {
      'Votre passion': data.progress.passion,
      'Votre motivation': data.progress.motivation,
      'Votre clarté d\'esprit': data.progress.clarity
    }
    localStorage.setItem('progress', JSON.stringify(progress.value))
    // Load next chapter
    currentChapter.value = data.next_chapter
    localStorage.setItem('lastChapterId', data.next_chapter.id)
  } catch (e) {
    error.value = e.message
  } finally {
    loading.value = false
  }
}

// Initial load
onMounted(() => {
  console.log('ChapterPlayer monté !')
  const savedChapterId = localStorage.getItem('lastChapterId')
  fetchChapter(savedChapterId || 1)
})  

function restartGame() {
  localStorage.removeItem('progress')
  localStorage.removeItem('lastChapterId')
  progress.value = { 'Votre passion': 0, 'Votre motivation': 0, 'Votre clarté d\'esprit': 0 }
  fetchChapter(1)
}

function getEndingImage() {
  if (!currentChapter.value || ![23,24,25,26,27,28,29,30,31,32,33].includes(currentChapter.value.id)) return null

  const endingImages = {
    23: 'end-a.png',
    24: 'end-b.png',
    25: 'end-c.png',
    26: 'end-d.png',
    27: 'end-e.png',
    28: 'end-f.png',
    29: 'end-g.png',
    30: 'end-h.png',
    31: 'end-i.png',
    32: 'end-j.png',
    33: 'end-k.png'
  }

  return `/images/ending-img/${endingImages[currentChapter.value.id]}`
}

function getEndingMessage() {
  if (!currentChapter.value) return "Vous avez terminé cette histoire. Recommencez pour explorer d'autres chemins."
  
  const endingMessages = {
    23: "Votre passion a guidé votre parcours et vous a mené au succès authentique. Votre histoire inspire désormais d'autres entrepreneurs. Voulez-vous découvrir d'autres destinées possibles ?",
    24: "Le mensonge peut protéger temporairement, mais à quel prix ? Votre succès apparent cache une prison invisible. D'autres choix auraient-ils mené à une fin différente ?",
    25: "La sécurité peut parfois être la plus douce des prisons. Votre vie confortable cache une âme qui s'est éteinte. Oseriez-vous emprunter un autre chemin cette fois ?",
    26: "Les chiffres ne mentent jamais, mais racontent-ils toute l'histoire ? Votre triomphe professionnel résonne dans un vide personnel. D'autres voies existent-elles ?",
    27: "Parfois, abandonner est la plus grande victoire. Votre courage de quitter un chemin qui n'était plus le vôtre vous a offert une liberté inestimable. Que se serait-il passé si vous étiez resté(e) ?",
    28: "Vous avez trouvé le rare équilibre entre ambition et authenticité. Cette harmonie difficile vous apporte une satisfaction complète. Explorez d'autres fins pour voir où d'autres décisions auraient pu vous mener.",
    29: "Après la tempête, vous avez reconstruit votre vision sur des fondations éthiques solides. Votre renaissance inspire une génération entière. Quels autres destins étaient possibles ?",
    30: "L'échec vous a consumé jusqu'à effacer votre identité. Dans l'anonymat, vous contemplez ce qui aurait pu être. Voulez-vous réécrire cette histoire ?",
    31: "Une fin tragique à ce qui avait commencé comme un rêve brillant. Votre histoire devient un symbole et une mise en garde. Retournez au début pour choisir un autre destin.",
    32: "La liberté dans la fuite s'avère être une autre forme de prison. Loin de tout, vous réfléchissez aux choix qui vous ont mené ici. Êtes-vous prêt à recommencer différemment ?",
    33: "Même dans la contrainte, vous avez trouvé une forme de liberté intérieure et de rédemption. Votre histoire de chute et de renaissance touche désormais les autres. Explorez d'autres fins possibles."
  }
  
  return endingMessages[currentChapter.value.id] || "Vous avez atteint la fin de cette histoire. Recommencez pour explorer d'autres chemins et découvrir d'autres destins possibles."
}
</script>

<style scoped>
.restartGame {
  background-color: #79aacf;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  display: inline-block;
  text-align: center;
  transition: background-color 0.2s ease;
  width: fit-content;
}

.restartGame:hover {
  background-color: #5d8eaf;
}

.choice-button {
  width: 100%;
  text-align: left;
  padding: 0.5rem;
  border: 1px solid #000000;
  border-radius: 0.25rem;
  transition: background-color 0.2s ease;
  height: 55px;
}

.choice-button:hover {
  background-color: #e0f2ff;
}

/* Progress bar animation */
.h-2 {
  transition: width 0.5s ease-in-out;
}

.ending-message {
  color: #333;
  font-size: 1.1rem;
  line-height: 1.5;
  text-align: center;
  background-color: rgba(121, 170, 207, 0.1);
  padding: 1rem;
  border-radius: 6px;
  margin-bottom: 1.5rem;
}
</style>