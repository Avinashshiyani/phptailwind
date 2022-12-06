<?php
$processes = [
    [
        "title"=>"Whats Different about Manage?",
        "details"=>"Manage makes it simle for software teams to plan day-to-day
        tasks while keeping the larger
        teams goals in view.
        Manage makes it simle for software teams to plan day-to-day
        tasks while keeping the larger
        teams goals in view."
    ],
];
?>
<?php foreach ($processes as $process): ?>
<!-- apart from foreach -->
<section id="features">
    <div class="container flex flex-col ml-16 px-6 absolute mx-auto  space-y-12 md:space-y-0 md:flex-row">
            <!-- whats different -->
            <div class="flex flex-col space-y-12 md:w-1/2">
                <h2 class="max-w-md text-4xl font-bold text-center md:text-left">
                    <?php echo $process["title"];?>
                </h2>
                <p class="max-w-xs text-center md:text-left">
                    <?php echo $process["details"];?>
                </p>
            </div>
    </div>
            <?php endforeach ;?>


            <!-- numbered liste --> 
            <?php
            $datas=[
                [
                    "title"=>"Track company Small Process",
                    "details"=>"Manage makes it simle for software teams to plan day-to-day
                    tasks while keeping the larger
                    teams goals in view.
                    Manage makes it simle for software teams to plan day-to-day
                    tasks while keeping the larger
                    teams goals in view."
                ],
                [
                    "title"=>"Track company Small Process",
                    "details"=>"Manage makes it simle for software teams to plan day-to-day
                    tasks while keeping the larger
                    teams goals in view.
                    Manage makes it simle for software teams to plan day-to-day
                    tasks while keeping the larger
                    teams goals in view."
                ],
                [
                    "title"=>"Track company Small Process",
                    "details"=>"Manage makes it simle for software teams to plan day-to-day
                    tasks while keeping the larger
                    teams goals in view.
                    Manage makes it simle for software teams to plan day-to-day
                    tasks while keeping the larger
                    teams goals in view."
                ]       
            ];
            ?>
<?php foreach($datas as $data):?>
    <div class="container flex flex-row px-4 justify-end relative mx-auto  space-y-6 md:space-y-0 md:flex-row ">
    <div class="flex flex-col space-y-8 md:w-1/2 mb-5 ">
        <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
            <!-- heading -->
                    <div class="rounded-l-full bg-orange-500 md:bg-transparent">
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py-2 rounded-full md:py-1 bg-orange-500 text-white">
                                01
                            </div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden">
                                <?php echo $data["title"] ;?>
                            </h3>
                        </div>
                    </div>
                    <div class="">
                        <h3 class="hidden mb-4 text-lg font-bold md:block">
                        <?php echo $data["title"]?>
                        </h3>
                        <p class="text-black-400">
                            <?php echo $data["details"]?>
                        </p>
                    </div>
                </div>    
            </div>       
        </div>
    </section>
    <?php endforeach; ?>