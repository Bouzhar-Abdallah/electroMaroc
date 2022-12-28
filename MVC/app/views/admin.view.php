<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>assets/css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="flex gap-3 h-screen w-screen p-3">

        <?php require_once 'components/dashboard_bar.php'; ?>
        <div class="flex flex-col gap-3 w-full">
            <!-- <div class="h-32 w-full bg-cadethh">
            </div> -->
            <?php require_once $componentfile; ?>
        </div>
    </div>

</body>

</html>