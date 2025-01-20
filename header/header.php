 <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/FlatLogo.png" height="60px" width="60px"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">HomeEEE</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Properties</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Agents</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Slider Section -->
	<!------new Slider-->
	<div id="propertySlider" class="carousel slide hero-slider" data-bs-ride="carousel">
        <div class="carousel-inner hero-slider">
            <div class="carousel-item active">
                <img src="images/real_1.jpg" class="d-block w-100" alt="Property 1">
            </div>
            <div class="carousel-item">
                <img src="images/real_2.jpg" class="d-block w-100" alt="Property 2">
            </div>
            <div class="carousel-item">
                <img src="images/real_3.jpg" class="d-block w-100" alt="Property 3">
            </div>
			  <div class="carousel-item">
                <img src="images/real_5.jpg" class="d-block w-100" alt="Property 4">
            </div>
			
            <!--<div class="carousel-item">
                <img src="images/real_4.jpg" class="d-block w-100" alt="Property 4">
            </div>-->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#propertySlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#propertySlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <!-- Search Box -->
        <div class="search-container">
            <div class="top-buttons">
                <button class="btn btn-primary">Buy</button>
                <button class="btn btn-secondary">Rent</button>
                <button class="btn btn-info">Commercial</button>
                <button class="btn btn-success">PG-Coliving</button>
                <button class="btn btn-warning">Plots</button>
            </div>
            <form action="/search" method="GET">
                <input type="text" name="location" class="form-control" placeholder="Enter location" required>
                <div class="d-flex gap-2">
                    <select name="type" class="form-select" required>
                        <option value="" disabled selected>Property Type</option>
                        <option value="flat">Flat</option>
                        <option value="land">Land</option>
                        <option value="villa">Villa</option>
                    </select>
                    <input type="number" name="min_price" class="form-control" placeholder="Min Price" required>
                    <input type="number" name="max_price" class="form-control" placeholder="Max Price" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-2">Search</button>
            </form>
        </div>
    </div>