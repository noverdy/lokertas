@extends('template', ['title' => 'FAQ'])

@section('body')
    <div class="bg-light" style="padding: 8rem 0 2rem 0">
        <div class="container text-center">
            <h1 class="display-1 fw-bold montserrat">Pertanyaan Umum</h1>
            <p class="fs-5 mb-5">(Frequently Asked Questions)</p>
        </div>

        <div style="margin: 0 23rem 2rem">
            <div class="d-flex justify-content-between" role="button" data-bs-toggle="collapse" data-bs-target="#description"
                aria-expanded="false" aria-controls="description">
                <span>Apa itu Lokertas?</span>
                <i class="fa-solid fa-caret-down"></i>
            </div>
            <hr>
            <div class="collapse" id="description">
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac nunc in quam vehicula pellentesque id
                    ut purus. Mauris lobortis erat a felis pharetra, ut blandit lacus euismod. Aenean sed ornare dolor.
                    Morbi dictum leo id nulla pellentesque elementum vel sit amet nisi. Etiam iaculis tortor vitae varius
                    gravida. In aliquam accumsan congue. Duis sed mi eu felis interdum consequat. Fusce tincidunt mattis
                    feugiat. Integer rutrum lacus vel lectus commodo tristique. Quisque rutrum urna libero, a iaculis libero
                    placerat quis. Aliquam porta tristique libero et cursus. Ut hendrerit nec purus non semper.</div>
            </div>
        </div>

        <div style="margin: 0 23rem 2rem">
            <div class="d-flex justify-content-between" role="button" data-bs-toggle="collapse" data-bs-target="#cara-kerja"
                aria-expanded="false" aria-controls="cara-kerja">
                <span>Bagaimana cara kerja Lokertas?</span>
                <i class="fa-solid fa-caret-down"></i>
            </div>
            <hr>
            <div class="collapse" id="cara-kerja">
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis vel nunc a condimentum.
                    Mauris vulputate lacinia diam euismod feugiat. Quisque consequat, neque eu laoreet lacinia, nunc dui
                    viverra eros, sed interdum velit lacus in quam. Pellentesque cursus aliquet turpis, quis dictum ante
                    feugiat at. Nullam vitae pharetra arcu. Vestibulum eget rhoncus neque. Praesent eu turpis nulla. Mauris
                    euismod turpis eu viverra tempor. Suspendisse faucibus, purus at mollis ullamcorper, ipsum diam
                    efficitur eros, non euismod lorem massa finibus nisi. Aliquam nec finibus mi, a feugiat ipsum. Nulla
                    commodo lacus vel dolor vestibulum, et pretium lorem malesuada. Sed vestibulum tincidunt turpis, nec
                    accumsan est rutrum in. Nam eu purus vehicula, molestie dui nec, mollis quam. Praesent eget eros
                    sagittis, placerat lectus at, convallis nibh. Mauris accumsan dapibus ante id varius. Donec tempor
                    blandit arcu ut gravida.</div>
            </div>
        </div>

        <div style="margin: 0 23rem 2rem">
            <div class="d-flex justify-content-between" role="button" data-bs-toggle="collapse" data-bs-target="#fitur"
                aria-expanded="false" aria-controls="fitur">
                <span>Apa saja fitur Lokertas?</span>
                <i class="fa-solid fa-caret-down"></i>
            </div>
            <hr>
            <div class="collapse" id="fitur">
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia odio eget vehicula ultricies.
                    Sed rutrum dui a risus sollicitudin, ut interdum eros interdum. Donec volutpat mollis dictum. Aenean
                    volutpat molestie magna nec efficitur. Nam rutrum, diam ut maximus posuere, magna eros tincidunt nunc,
                    vel cursus orci nisi sed elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus mus. Mauris pellentesque finibus quam. Sed neque libero, rutrum at sapien eget, cursus
                    volutpat lorem. Curabitur purus elit, fermentum vitae neque ac, rutrum tristique lorem. Nunc ut sem nec
                    leo ornare fringilla eget quis dui. Quisque dictum vitae purus sed bibendum. In sed lectus tincidunt,
                    vestibulum erat a, mollis ligula.</div>
            </div>
        </div>

        <div style="margin: 0 23rem 2rem">
            <div class="d-flex justify-content-between" role="button" data-bs-toggle="collapse" data-bs-target="#kontak"
                aria-expanded="false" aria-controls="kontak">
                <span>Bagaimana cara menghubungi Lokertas?</span>
                <i class="fa-solid fa-caret-down"></i>
            </div>
            <hr>
            <div class="collapse" id="kontak">
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in arcu eget ipsum ornare varius ut sed
                    neque. Cras placerat iaculis turpis in molestie. Integer laoreet, diam malesuada consectetur iaculis, mi
                    turpis rutrum lacus, nec laoreet nunc urna quis libero. Integer quis dui eget nulla viverra pulvinar.
                    Fusce laoreet ac eros eu commodo. Nulla consectetur tellus id eros ullamcorper venenatis. Aliquam et
                    risus ut sem ornare hendrerit. Morbi est justo, suscipit a sem in, blandit rutrum elit. Suspendisse
                    fringilla nisi eget urna tincidunt porta. Suspendisse ac ex eu arcu luctus efficitur. Vestibulum
                    dignissim in tellus eu congue. Ut non lacus vel lectus lacinia varius in nec tortor.</div>
            </div>
        </div>
    </div>

    <script>
        window.onload = () => {
            const question = document.querySelector(window.location.hash)
            if (question !== null) question.classList.add('show')
        }
    </script>
@endsection
