<?php

    $datas = [
        [
        "title"=>"Anisha li",
        "details"=>"Manage makes it simle for software teams to plan day-to-day
        tasks while keeping the larger
        teams goals in view .",
        "img"=>"images/avatar-anisha.png"
        ],
        [
        "title"=>"Ali Bravo",
        "details"=>"Manage makes it simle for software teams to plan day-to-day
        tasks while keeping the larger
        teams goals in view .",
        "img"=>"images/avatar-ali.png"
        ],
        [
            "title"=>"Richard Whatts",
            "details"=>"Manage makes it simle for software teams to plan day-to-day
            tasks while keeping the larger
            teams goals in view .",
            "img"=>"images/avatar-richard.png"
        ],
    ]

?>
<?php foreach ($datas as $data):?>
    <div class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-gray-100 md:w-1/3 md:flex">
        <img src="<?php echo $data["img"];?>" alt="image" class="w-16 -mt-14">
        <h5 class="text-lg font-bold"><?php  echo $data["title"];?></h5>
        <p class="text-sm text-black-400">
           <?php echo $data["details"]; ?>
        </p>
    </div>
<?php endforeach ; ?>