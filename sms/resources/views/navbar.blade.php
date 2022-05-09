<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">Students Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                <a class="nav-link active" aria-current="page" href="{{ url('/create') }}">Create</a>
                <a class="nav-link active" aria-current="page" href="{{ url('/edit') }}">Edit</a>
            </div>
        </div>
    </div>
</nav>
