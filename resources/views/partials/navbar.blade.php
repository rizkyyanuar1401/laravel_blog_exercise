
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="/">My Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Home") ? 'active' : ''}}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "About") ? 'active' : ''}}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Blogs") ? 'active' : ''}}" href="/blogs">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Categories") ? 'active' : ''}}" href="/categories">Categories</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/signin" class="nav-link {{ ($title === "login") ? 'active' : ''}}"><i class="bi bi-box-arrow-in-right"></i> Sign in</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
