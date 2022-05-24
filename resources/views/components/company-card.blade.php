<div class="row align-items-center p-2 p-md-4 bg-white rounded shadow hover-rise mb-4">
    <div class="col-3 col-md-1 py-3 py-sm-0">
        <svg width="100%" viewBox="0 0 87 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M68.3571 25C68.3571 38.8086 57.2297 50 43.5 50C29.7703 50 18.6429 38.8086 18.6429 25C18.6429 11.1934 29.7703 0 43.5 0C57.2297 0 68.3571 11.1934 68.3571 25ZM40.6065 70.1562L34.1786 59.375H52.8214L46.3935 70.1562L52.8603 94.3555L60.531 62.8711C75.523 65.2148 87 78.2617 87 94.0039C87 97.3047 84.3201 100 81.0382 100H5.96571C2.6702 100 0 97.3047 0 94.0039C0 78.2617 11.4751 65.2148 26.469 62.8711L34.1397 94.3555L40.6065 70.1562Z"
                fill="black" />
        </svg>
    </div>
    <div class="col col-md-6">
        <h2 class="fs-4 fw-bold montserrat">{{ $company->name }}</h2>
        <span class="px-2 py-1 rounded me-2" style="background: #F8ECE8; color: #F36532; font-size: 0.8rem">
            <i class="fa-solid fa-location-dot"></i> {{ $company->address }}
        </span>
    </div>
    <div class="col-12 col-md-5 d-flex justify-content-center justify-content-md-end">
        <a href="/company/{{ $company->id }}" class="btn btn-orange rounded-pill me-3">Lihat Detail</a>
    </div>
</div>
