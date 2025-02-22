
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ url('/') }}">POS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-wh" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/category/food-beverage') }}">Food & Beverage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/category/beauty-health') }}">Beauty & Health</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/category/home-care') }}">Home Care</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/category/baby-kid') }}">Baby & Kid</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/sales') }}">Sales</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
