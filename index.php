<?php include 'includes/header.php' ?>

<body>
    <?php include 'includes/navbar.php' ?>


    
    <div class = "container-fluid text-center justify-content-center">
        <img src="images/arbi-banner.png" class="w-25 h-auto justify-content-center" alt="arbisoft">

        <h2 class="text-secondary">
            Feedback Form <br>
            <small class="text-black-50">Let us know what you think!</small>
        </h2>
    </div>
    <br><br>
    <div class = 'container-fluid w-25'>
        <form method="POST">
            <div class="mb-3">
                <label for="Email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="Email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="Name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="Name">
            </div>
            <div class="mb-3">
                <label for="Feedback" class="form-label">Give us your feedback!</label>
                <textarea type="text" class="form-control" id="Feedback"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    <?php include 'includes/footer.php' ?>
</body>