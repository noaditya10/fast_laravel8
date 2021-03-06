<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">SMA 404</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{($title === 'Home') ? 'active' : ''}}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === 'Info') ? 'active' : ''}}" href="/info-kegiatan">Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === 'Siswa') ? 'active' : ''}}" href="/data-siswa">Siswa</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{($title === 'Gallery') ? 'active' : ''}}" href="/gallery">Gallery</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{($title === 'Blog') ? 'active' : ''}}" href="/blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === 'About') ? 'active' : ''}}" href="/about">About</a>
        </li>
        
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/login">Masuk </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Daftar </a>
        </li>
      </ul>
    </div>
  </div>
</nav>