<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Cuisine</title>
</head>
<body>
    <main class="pages-cusines">
        <!-- Banner -->
        <div class="header-include">
            <?php include 'components/header.php'; ?>
        </div>
        <section class="banner-cusines">
            <h1 class="title-cusines">Explore Our Cuisines</h1>
            <p class="description-cusines">
                Cuisines are distinct cooking traditions reflecting the flavors and culture of their origins
            </p>
        </section>

        <section class="cuisines-content" id="cuisines-content">
            <div class="cuisine-header">
                <h4 class="content cu-headeisines-header-title">Trending destinations</h4>
                <a href="#" onclick="seeAll()">
                    See all
                </a>
            </div>
            <div class="cuisine-cards" id="cuisine-cards">

            </div>
            </div>
        </section>
    </main>
    <script src="scripts/cuisines.js" type="module"></script>
</body>
</html>