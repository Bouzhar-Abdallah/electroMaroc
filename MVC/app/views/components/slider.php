<section class="relative bg-[url(https://economie-entreprises.com/wp-content/uploads/2020/11/Electromenager-Les-promotions-comme-alternative.jpg)] bg-cover bg-center bg-no-repeat">
  <div class="absolute inset-0 bg-white/75 sm:bg-transparent sm:bg-gradient-to-r sm:from-white/95 sm:to-white/25"></div>

  <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
    <div class="max-w-xl text-center sm:text-left">
      <h1 class="text-3xl font-extrabold sm:text-5xl text-black">
        Let us find your

        <strong class="block font-extrabold text-cadeth">
          Forever Home.
        </strong>
      </h1>

      <p class="mt-4 max-w-lg sm:text-xl sm:leading-relaxed text-cadeth">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo
        tenetur fuga ducimus numquam ea!
      </p>

      <div class="mt-8 flex flex-wrap gap-4 text-center">
        <a href="<?= ROOT ?>produits/categories" class="btn-primary sm:w-auto">
          See Products !
        </a>

        <a href="#promotions" class=" btn-secondary sm:w-auto">
          Promotions
        </a>
      </div>
    </div>
  </div>
</section>
<div id="promotions" class="bg-cadethhh hover:bg-cadethh transition-all duration-700 ease-in pb-8 my-8">
  <div class="grid place-items-center my-8 pt-10">
    <h1 class="text-cadet text-3xl font-bold">Proffitez de nos superbes promotions !</h1>
    <h1 class="text-gray-600 text-center text-lg font-light px-4 mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa sapiente incidunt natus similique facere veniam nesciunt, mollitia non quasi saepe necessitatibus. Nemo sit itaque nobis id dolorum et veniam ducimus!</h1>
  </div>
  <section class=" flex items-center justify-around lg:mx-12">
    <button id="left" class=" mx-4 bg-cadet hover:bg-saffron transition-all duration-300 ease-out text-saffron hover:text-cadet w-8 h-8 grid place-items-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path class="w-5 h-5" stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />

      </svg>
    </button>

    <div id="carousel" class="relative overflow-hidden w-full">

      <div id="slider" class="flex absolute transition-all ease-in-out duration-200 cursor-pointer">

        <!-- slider card -->
        <?php foreach ($data as $value) { ?>

          <a href="<?= ROOT ?>product/<?= $value['id'] ?>" class="mx-0.5 relative bg-white">
            <div class="test relative">
              <?php foreach ($value['photo'] as $key => $photo) { ?>

                <?php if ($key === 0) { ?>
                  <img class="absolute " src="data:image/jpeg;base64,<?= base64_encode($photo['photo']) ?>" alt="" srcset="">
                <?php } else if ($key === 1) { ?>

                  <img class="seocnd_image absolute z-10 hidden" src="data:image/jpeg;base64,<?= base64_encode($photo['photo']) ?>" alt="" srcset="">
                <?php }; ?>

              <?php } ?>
            </div>
            <!-- <img class="absolute " src="./src/images/first.webp" alt="" srcset=""> -->

            <div class="flex flex-col items-center capitalize my-2 gap-0.5 relative py-2">
              <div class="font-thin mb-2 text-sm text-center text-gray-600 flex justify-between items-center w-full px-10">
                <h1 class="text-cadet font-extrabold text-2xl py-1 px-2">$
                  <?= $value['prix_offre']; ?>
                </h1>
                <h1 class="text-gray-400 font-bold line-through text-xl  py-1 px-3">
                  $ <?= $value['prix_final']; ?>
                </h1>
              </div>
              <h1 class="font-medium text-lg text-center relative text-gray-900"><?= $value['libelle'] ?></h1>
              <div class="hidden">
                <?= $value['prix_vente'] ?> MAD
              </div>
            </div>
          </a>
        <?php }; ?>
        <!-- slider card -->

      </div>
    </div>


    <button id="right" class="mx-4 bg-cadet hover:bg-saffron transition-all duration-300 ease-out text-saffron hover:text-cadet w-8 h-8 grid place-items-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path class="w-5 h-5" stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
      </svg>
    </button>
  </section>
  <script src="<?= ROOT ?>assets/js/slider.js"></script>
</div>
