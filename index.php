<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-slider img {
            height: 70vh;
            object-fit: cover;
        }
        .property-card img {
            height: 200px;
            object-fit: cover;
        }
		/********************************/
		/* .hero-slider {
            position: relative;
        }
        .hero-slider img {
            height: 70vh;
            object-fit: cover;
        }*/
        .search-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 800px;
        }
        .search-container form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .search-container input,
        .search-container select,
        .search-container button {
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .top-buttons {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
            gap: 10px;
        }
        .top-buttons .btn {
            border-radius: 20px;
            padding: 10px 20px;
        }
		 @media (max-width: 768px) {
            .search-container {
                width: 90%;
                padding: 15px;
            }
            .d-flex.gap-2 {
                flex-direction: column;
                gap: 10px;
            }
        }
		
		/************ END **************/
		
		
        footer {
            background: #333;
            color: #fff;
            padding: 20px 0;
        }
        footer a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
   <?php include("header/header.php");?>
    <!-- Featured Properties Section -->
    <section class="container py-5">
        <h2 class="text-center mb-4">Featured Properties in Delhi</h2>
        <div class="row g-4">
            <!-- 8 Property Cards -->
            <div class="col-md-3">
                <div class="card property-card">
                    <img src="images/property1.jpg" class="card-img-top" alt="Flat 1">
                    <div class="card-body">
                        <h5 class="card-title">Luxury Apartment</h5>
                        <p class="card-text">$1,200,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card property-card">
                    <img src="images/property2.jpg" class="card-img-top" alt="Land 1">
                    <div class="card-body">
                        <h5 class="card-title">Prime Land</h5>
                        <p class="card-text">$800,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card property-card">
                    <img src="images/property3.jpg" class="card-img-top" alt="Flat 2">
                    <div class="card-body">
                        <h5 class="card-title">Modern Flat</h5>
                        <p class="card-text">$950,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card property-card">
                    <img src="images/property4.jpg" class="card-img-top" alt="Villa 1">
                    <div class="card-body">
                        <h5 class="card-title">Luxury Villa</h5>
                        <p class="card-text">$2,000,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card property-card">
                    <img src="images/property4.jpg" class="card-img-top" alt="Land 2">
                    <div class="card-body">
                        <h5 class="card-title">Land for Sale</h5>
                        <p class="card-text">$700,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card property-card">
                    <img src="images/property5.jpg" class="card-img-top" alt="Flat 3">
                    <div class="card-body">
                        <h5 class="card-title">Spacious Flat</h5>
                        <p class="card-text">$1,100,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card property-card">
                    <img src="images/property6.jpg" class="card-img-top" alt="Villa 2">
                    <div class="card-body">
                        <h5 class="card-title">Exclusive Villa</h5>
                        <p class="card-text">$3,500,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card property-card">
                    <img src="images/property7.jpg" class="card-img-top" alt="Land 3">
                    <div class="card-body">
                        <h5 class="card-title">Open Land</h5>
                        <p class="card-text">$600,000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
   <?php include("header/footer.php");?>