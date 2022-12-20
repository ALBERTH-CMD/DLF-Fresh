<main class="p-10 rounded-lg shadow-2xl bg-white max-w-full">

    <div class="container-box">

        <div class="box box1">
            <img src="{{ secure_asset('img/img1.svg') }}" alt="">
            <h2>{{$config->frase_1}}</h2>

            <div class="container-p"><p>{{$config->frase_1}}</p></div>

            <div class="check">
                <i class="fas fa-check"></i>
            </div>
        </div>

        <div class="box box2">
            <img src="{{ secure_asset('img/img2.svg') }}" alt="">
            <h2>{{$config->frase_2}}</h2>
            <div class="container-p">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos minus non voluptatibus rem harum iste vero magnam voluptate, id laboriosam?...</p>
            </div>

            <div class="check">
                <i class="fas fa-check"></i>
            </div>
        </div>

        <div class="box box3">
            <img src="{{ secure_asset('img/img3.svg') }}" alt="">
            <h2>{{$config->frase_3}}</h2>
            <div class="container-p">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.. Dignissimos minus non voluptatibus rem harum iste vero magnam voluptate, id laboriosam?...</p>
            </div>

            <div class="check">
                <i class="fas fa-check"></i>
            </div>
        </div>

    </div>
</main>
