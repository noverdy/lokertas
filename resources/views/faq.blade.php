<x-layout title="FAQ">
    <div class="bg-light" style="padding: 8rem 0 2rem 0">
        <div class="container text-center">
            <h1 class="display-1 fw-bold montserrat">Pertanyaan Umum</h1>
            <p class="fs-5 mb-5">(Frequently Asked Questions)</p>
        </div>

        <div style="margin: 0 23rem 2rem">
            <div class="d-flex justify-content-between" role="button" data-bs-toggle="collapse"
                data-bs-target="#description" aria-expanded="false" aria-controls="description">
                <span>Apa itu Lokertas?</span>
                <i class="fa-solid fa-caret-down"></i>
            </div>
            <hr>
            <div class="collapse" id="description">
                <div>
                    Lokertas adalah sebuah sistem informasi yang dapat mempermudah dan membantu para penyandang
                    disabilitas
                    dalam mencari pekerjaan yang sesuai dengan keterampilan yang dimiliki tanpa perlu mendatangi
                    satu persatu perusahaan secara langsung. Lokertas hadir untuk memastikan para penyandang disabilitas
                    dapat
                    mencari lowongan pekerjaan yang cocok hanya dengan melalui perangkat yang mereka miliki</div>
            </div>
        </div>

        <div style="margin: 0 23rem 2rem">
            <div class="d-flex justify-content-between" role="button" data-bs-toggle="collapse"
                data-bs-target="#cara-kerja" aria-expanded="false" aria-controls="cara-kerja">
                <span>Bagaimana cara kerja Lokertas?</span>
                <i class="fa-solid fa-caret-down"></i>
            </div>
            <hr>
            <div class="collapse" id="cara-kerja">
                <div>Lokertas bekerja dengan menemukan pencari kerja dengan pemberi lowongan kerja.</div>
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia odio eget vehicula
                    ultricies.
                    Sed rutrum dui a risus sollicitudin, ut interdum eros interdum. Donec volutpat mollis dictum. Aenean
                    volutpat molestie magna nec efficitur. Nam rutrum, diam ut maximus posuere, magna eros tincidunt
                    nunc,
                    vel cursus orci nisi sed elit. Orci varius natoque penatibus et magnis dis parturient montes,
                    nascetur
                    ridiculus mus. Mauris pellentesque finibus quam. Sed neque libero, rutrum at sapien eget, cursus
                    volutpat lorem. Curabitur purus elit, fermentum vitae neque ac, rutrum tristique lorem. Nunc ut sem
                    nec
                    leo ornare fringilla eget quis dui. Quisque dictum vitae purus sed bibendum. In sed lectus
                    tincidunt,
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
                    neque. Cras placerat iaculis turpis in molestie. Integer laoreet, diam malesuada consectetur
                    iaculis, mi
                    turpis rutrum lacus, nec laoreet nunc urna quis libero. Integer quis dui eget nulla viverra
                    pulvinar.
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
</x-layout>
