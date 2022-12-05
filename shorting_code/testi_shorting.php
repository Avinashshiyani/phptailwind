<?php $data = [
    [
        "img" => "https://github.com/bradtraversy/tailwind-landing-page/blob/main/img/avatar-anisha.png?raw=true",
        "title" => "Anisha Li",
        "details" => "Manage has supercharged out team's workflow. The ability to maintain visibility on larger milestons at all times keepseveryone motivated."
    ],
    [
        "img" => "https://github.com/bradtraversy/tailwind-landing-page/blob/main/img/avatar-ali.png?raw=true",
        "title" => "Ali Bravo",
        "details" => "We have been able to cancel so many other subscriptions since using Manage. There is no more cross channel confusion and  everyone is much more focused"
    ],
    [
        "img" => "https://github.com/bradtraversy/tailwind-landing-page/blob/main/img/avatar-richard.png?raw=true",
        "title" => "Richard Watts",
        "details" => "Manage has supercharged out team's workflow. The ability to  maintain visibility on larger milestons at all times  keeps everyone motivated."
    ],
];
?>
<?php foreach ($data as $dat) : ?>
<div class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-gray-100 md:flex md:w-1/3">
    <img src= <?php echo $dat["img"]; ?>
        class="w-16 -mt-14" alt="">
    <h5 class="text-lg font-bold"><?php echo $dat["title"]; ?></h5>
    <p class="text-sm">
        <?php echo $dat["details"]; ?>
    </p>
</div>
<?php endforeach; ?>