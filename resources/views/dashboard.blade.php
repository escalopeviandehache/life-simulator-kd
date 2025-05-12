<x-app-layout>
  <x-slot name="header">
    <div class="header">
      <h2 class="title">
        {{ __('Life Simulator') }}
      </h2>
    </div>
    <style>
      .header {
        background-color:rgb(255, 255, 255); /* Couleur de fond verte */
        color: white; /* Texte blanc */
        padding: 10px;
        text-align: left;
      }

      .title {
        font-size: 2rem; /* Taille de police plus grande */
        font-weight: bold;
        margin: 0;
        color: #000;
      }
    </style>
  </x-slot>

  <div class="py-12">
    {{-- Mounting point Vue --}}
    <div id="app" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <!-- {{ __("Bienvenue sur Life Simulator !") }} -->
          <chapter-player />
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

