<footer>
    <section id="footer" style="background-color: rgb(36,45,82);">
        <div class="container flex flex-col-reverce justify-between px-6 py-10 mx-auto space-y-8 md:flex-row space-y-0">
            <!-- logos -->
            <div
                class="flex flex-col-reverce items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start">
                <div class="mx auto my-6 text-center text-white md:hidden">
                    Copyright &copy; 2023, All rights Reserved
                </div>
                <!-- logo -->
                <div>
                    <img src="./images/logo-white.svg" class="h-8">
                </div>
                <!-- social link container -->
                <div class="flex justify-center space-x-4">
                    <?php img_btn(["facebook", "youtube", "twitter", "instagram"]); ?>
                </div>
            </div>

            <div class="flex justify-around space-x-32">
                <div class="flex flex-col space-y-3 text-white">
                    <?php link_btn(["Home", "Pricing", "Products", "About"], "blue"); ?>

                </div>
                <div class="flex flex-col space-y-3 text-white">
                    <?php link_btn(["Careers", "Community", "Privacy Policy"], "blue"); ?>
                </div>
            </div>

            <!-- input container -->
            <div class="flex flex-col justify-between">
                <form action="">
                    <div class="flex space-x-3">
                        <input type="text" name="" class="flex-1 px-4 rounded-full focus:outline-none"
                            placeholder="Updated in your inbox">
                        <?php button("Go", "red"); ?>
                    </div>
                </form>

                <div class="hidden text-white md:block">
                    Copyright &copy; 2023, All rights Reserved
                </div>
            </div>
        </div>
</footer>
</section>
</body>

</html>