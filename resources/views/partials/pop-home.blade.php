<section class="pop-home" aria-labelledby="welcome-title">
    <div class="pop-marquee">Create · Learn · Build · Repeat</div>
    <div class="pop-hero">
        <p class="text-uppercase fw-bold mb-3">Sirilak's Web Space</p>
        <h1 id="welcome-title">ยินดีต้อนรับสู่เว็บไซต์ของเรา</h1>
        <p><strong>คิดให้ชัด สร้างให้สนุก</strong> พื้นที่รวมงานทดลอง โค้ด และโปรเจกต์ Laravel ในสไตล์ที่สดใสและตรงไปตรงมา</p>
    </div>
    <nav class="pop-side" aria-label="ทางลัดหน้าแรก">
        @if (Route::has('author.blog'))
            <a class="pop-tile" href="{{ route('author.blog') }}">บทความของฉัน</a>
        @elseif (Route::has('blog'))
            <a class="pop-tile" href="{{ route('blog') }}">บทความของฉัน</a>
        @else
            <div class="pop-tile">{{ config('student.full_name_th') }}</div>
        @endif
        @if (Route::has('products.index'))
            <a class="pop-tile" href="{{ route('products.index') }}">Product Lab</a>
        @elseif (Route::has('about'))
            <a class="pop-tile" href="{{ route('about') }}">About Me</a>
        @else
            <div class="pop-tile">{{ config('student.student_id') }}</div>
        @endif
        @if (Route::has('books.index'))
            <a class="pop-tile" href="{{ route('books.index') }}">Book Shelf</a>
        @elseif (Route::has('student.profile'))
            <a class="pop-tile" href="{{ route('student.profile', config('student.student_id')) }}">My Profile</a>
        @else
            <div class="pop-tile">Laravel Course</div>
        @endif
    </nav>
</section>
