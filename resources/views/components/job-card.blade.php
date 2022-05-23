<div class="col-md-4">
    <a href="/lowongan/{{ $lowongan->slug }}" class="text-reset text-decoration-none">
        <div class="d-flex flex-column justify-content-between hover-rise h-100 p-4 bg-light shadow rounded">
            <div class="d-flex">
                <img src="{{ url('img/review.jpg') }}" width="50" height="50" class="rounded-circle me-2">
                <div>
                    <div class="fw-semibold">{{ $lowongan->perusahaan }}</div>
                    <div class="text-secondary" style="font-size: 0.9rem">{{ $lowongan->created_at }}</div>
                </div>
            </div>
            <div class="fw-semibold fs-5 my-4">
                {{ $lowongan->title }}
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <span class="px-2 py-1 rounded me-2" style="background: #F8ECE8; color: #F36532; font-size: 0.8rem">
                    <i class="fa-solid fa-location-dot"></i> {{ $lowongan->location }}
                </span>
                <button class="btn btn-orange">Daftar</button>
            </div>
        </div>
    </a>
</div>
