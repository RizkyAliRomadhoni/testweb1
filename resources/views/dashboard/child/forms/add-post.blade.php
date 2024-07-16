<main class="dash-content-form">
    <div class="container-fluid">
        <div class="row mt-4" id="addPostForm">
            <div class="col-xl-12">
                <div class="card spur-card">
                    <div class="card-header">
                        <div class="spur-card-icon">
                            <i class="fa-solid fa-newspaper"></i>
                        </div>
                        <div class="spur-card-title"> Form Tambah Berita </div>
                    </div>
                    <div class="card-form">
                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                            {{-- MULTIPART FORM DATA UNTUK MENERIMA SELAIN DATA TEKSTUAL --}}
                            @csrf
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul">
                            </div>
                            <div class="form-group">
                                <label for="content">Konten</label>
                                <textarea class="form-control" id="content" rows="15" name="content" placeholder="Masukkan isi berita"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Gambar Berita</label>
                                <br>
                                <label for="file-picture">File</label>
                                <input type="radio" name="type-chosen" id="file-picture" value="file" checked>

                                <label for="url-picture">URL</label>
                                <input type="radio" name="type-chosen" id="url-picture" value="url">
                            
                                <input type="file" name="image" class="form-control" id="file-input" placeholder="image">
                                <input type="text" name="image" class="form-control d-none" id="url-input" placeholder="https://picsum.photos/id/1/200/300">
                            </div>
                            <div class="buttons">
                                <button type="submit" class="btn btn-primary">Post</button>
                                <a href="{{ url()->previous() }}" class="btn btn-danger button-spacing"> Kembali </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@push('script')
<script src="{{ asset('js/posts.js') }}"></script>
@endpush