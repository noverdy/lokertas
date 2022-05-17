<div class="col">
    <div class="py-4 bg-light shadow rounded">
        <div class="py-4">
            <i class="fa-solid {{ $icon }} p-4 rounded-circle fs-3"
                style="background: #{{ $bg }}; color: #{{ $fg }}"></i>
        </div>
        <h6 class="fs-4">{{ $title }}</h6>
        <p>{{ $slot }}</p>
    </div>
</div>
