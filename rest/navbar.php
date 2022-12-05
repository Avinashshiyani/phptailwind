<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="relative container mx-auto p-6">

        <div class="flex items-center justify-between">

            <div class="pt-2">
                <img src="https://raw.githubusercontent.com/bradtraversy/tailwind-landing-page/249d73eaa143aa213a5d56de2b2a941f68b20a7a/img/logo.svg"
                    alt="image">
            </div>
            <!-- menu itemsj -->
            <div class="hidden md:flex space-x-6">
                <?php

                link_btn(["Pricing", "Product", "About Us", "Careers", " Community"]);


                ?>

            </div>
            <!-- button-->
            <?php button("Get Started"); ?>
        </div>
    </nav>