<div class="col-md-4">
    <a href="/vacancy/{{ $vacancy->id }}" class="text-reset text-decoration-none">
        <div class="d-flex flex-column justify-content-between hover-rise h-100 p-4 bg-white shadow rounded">
            <div class="d-flex">
                <img src="https://source.unsplash.com/random?sig={{ crc32($vacancy->id) % 1000 }}" width="50"
                    height="50" class="rounded-circle me-2">
                <div>
                    <div class="fw-semibold">{{ $vacancy->company->name }}</div>
                    <div class="text-secondary" style="font-size: 0.9rem">{{ $vacancy->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
            <div class="fw-semibold fs-5 mt-4">
                {{ $vacancy->title }}
            </div>
            <div class="fw-light fs-6 mb-4">
                {{ Str::words($vacancy->description, 10) }}
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <span class="px-2 py-1 rounded me-2" style="background: #F8ECE8; color: #F36532; font-size: 0.8rem">
                    <i class="fa-solid fa-location-dot"></i> {{ $vacancy->city }}
                </span>
                <span class="px-2 py-1 rounded me-2" style="background: #F8F7FE; color: #838383; font-size: 0.8rem">
                    {{ $vacancy->salary }}
                </span>
            </div>
        </div>
    </a>
</div>
