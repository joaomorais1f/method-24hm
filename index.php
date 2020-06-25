<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="src/css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method 24hm 7d, 30d</title>
</head>
<body>
    <section class="form-section">
        <h1 class="section-title">Add new Content</h1>
        <div class="">
            <form class="form-body" action="add-subject.php" method="post">
                <div class="input-block">
                    <label for="content-form">Content</label>
                    <input type="text" name="content" id="content-form">
                </div>
                <div class="input-block">
                    <label for="content-date-form">Date</label>
                    <input data-mask="00/00/0000" type="text" name="date-content" id="content-date-form">
                </div>
                <button type="submit" class="btn-add">Add</button>
                <div class="content-added text-center">
                    <span><a class="content-link" href="view-contents.php">Contents</a> </span>
                </div>
            </form>
        </div>
    </section>


<script src="src/js/script.js"></script>
<script src="src/js/jquery.js"></script>
<script src="src/js/jquery.mask.js"></script>
<script src="src/js/jquery.mask.min.js"></script>

</body>
</html>