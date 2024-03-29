<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxonomy Definition</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        ul {
            list-style: none;
            backdrop-filter: blur(2px); /* Adjust the blur amount */
        }
    </style>
    <link href='https://fonts.googleapis.com/css?family=Lexend' rel='stylesheet'>
<style>
body {
    font-family: 'Lexend';
}
</style>
</head>
<body>
<h1></h1>
<div class="container-fluid mt-4">
    <ul class="nav nav-pills sticky-top" id="pills-tab">
        <li class="nav-item p-1">
            <a class="btn btn-primary" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
</svg></a>
        </li>
        <li class="nav-item p-1">
            <a class="btn btn-secondary rounded-pill active" data-toggle="pill" href="#Exploring">MyBIS Home Page</a>
        </li>
        <li class="nav-item p-1">
            <a class="btn btn-secondary rounded-pill" data-toggle="pill" href="#Taxonomy"> Hopea Subalata Taxonomy</a>
        </li>
        <li class="nav-item p-1">
            <a class="btn btn-secondary rounded-pill" data-toggle="pill" href="#Taxonomy2">Malayan Tiger Taxonomy </a>
        </li>
        <li class="nav-item p-1">
            <a class="btn btn-secondary rounded-pill" data-toggle="pill" href="#Taxonomy3">Agathis Borneensis Taxonomy </a>
        </li>
        <li class="nav-item p-1">
            <a class="btn btn-secondary rounded-pill" data-toggle="pill" href="#Specimen">Malaysian Iconic Wallace By Specimen </a>
        </li>
        <li class="nav-item p-1">
            <a class="btn btn-secondary rounded-pill" data-toggle="pill" href="#Photo">Explore Species By Photo </a>
        </li>
        <li class="nav-item p-1">
            <a class="btn btn-secondary rounded-pill" data-toggle="pill" href="#Photo">Explore Species By Photo </a>
        </li>
    </ul>

    <div class="tab-content mt-2">
        <div id="Exploring" class="tab-pane fade show active">
        <h3 class="text-center">Exploring Home Page in Malaysia Biodiversity Information System (MyBIS)</h3>
        <iframe src="https://scribehow.com/embed/Exploring_Biodiversity_Information_on_MYBIS_Website__wat8g8_wQB2IgHJVrm0tZg" width="100%" height="640" allowfullscreen frameborder="0"></iframe>
        </div>
        <div id="Taxonomy" class="tab-pane fade">
            <h3 class="text-center">Exploring Hopea Subalata Taxonomy In Malaysia Biodiversity Information System (MyBIS)</h3>
            <iframe src="https://scribehow.com/embed/Explore_the_Taxonomy_of_Hopea_subalata__tcN4rZiaR6WeZufEH0s4Uw" width="100%" height="640" allowfullscreen frameborder="0"></iframe>
        </div>
        <div id="Taxonomy2" class="tab-pane fade">
            <h3 class="text-center">Exploring Malayan Tiger Taxonomy In Malaysia Biodiversity Information System (MyBIS)</h3>
            <iframe src="https://scribehow.com/embed/Exploring_Malayan_Tiger_Taxonomy_In_Malaysia_Biodiversity_Information_System_MyBIS__QjeSynTzS1em5o9oJMO32g" width="100%" height="640" allowfullscreen frameborder="0"></iframe>
        </div>
        <div id="Taxonomy3" class="tab-pane fade">
            <h3 class="text-center">Exploring Agathis Borneensis (Damar Minyak) Taxonomy In Malaysia Biodiversity Information System (MyBIS)
.</h3>
            <iframe src="https://scribehow.com/embed/Exploring_Agathis_Borneensis_Damar_Minyak_Taxonomy_In_Malaysia_Biodiversity_Information_System_MyBIS__WF4Vfc7fR7GwODzouSq4pg" width="100%" height="640" allowfullscreen frameborder="0"></iframe>
        </div>
        <div id="Specimen" class="tab-pane fade">
            <h3 class="text-center">Explore Malaysian Iconic Wallace By Specimen on Malaysia Biodiversity Information System (MyBIS)</h3>
            <iframe src="https://scribehow.com/embed/Explore_Malaysian_Iconic_Wallace_Specimen_on_Malaysia_Biodiversity_Information_System_MyBIS__bJ_2StJ8RgWEXKIPFLcthw" width="100%" height="640" allowfullscreen frameborder="0"></iframe>
        </div>
        <div id="Photo" class="tab-pane fade">
            <h3 class="text-center">Explore Species By Photo.</h3>
            <iframe src="https://scribehow.com/embed/Explore_Species_By_Photo_in_Malaysia_Biodiversity_Information_System_MyBIS__1HYgzqw_SBOglKK7rQzANg" width="100%" height="640" allowfullscreen frameborder="0"></iframe>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Restore last selected pill from local storage
    $(document).ready(function () {
        var lastSelectedPill = localStorage.getItem('lastSelectedPill');
        if (lastSelectedPill) {
            $('#pills-tab a[href="' + lastSelectedPill + '"]').tab('show');
        }
    });

    // Save selected pill to local storage
    $('#pills-tab a').on('shown.bs.tab', function (e) {
        var selectedPill = $(e.target).attr('href');
        localStorage.setItem('lastSelectedPill', selectedPill);
    });
</script>

</body>
</html>
