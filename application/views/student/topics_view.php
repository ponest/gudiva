<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Example of Bootstrap 3 Accordion with Plus/Minus Icon</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="assets/css/index.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
            margin: 20px;
        }
        .panel-title .glyphicon{
            font-size: 14px;
        }
    </style>
    <script src="assets/js/gudiva.js" type="text/javascript">

    </script>
</head>
<body>
<div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <span data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-chevron-down"></span> What is Reproduction?</span>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Reproduction (or procreation or breeding) is the biological
                        process by which new individual organisms – "offspring" – are produced
                        from their "parents". Reproduction is a fundamental feature of all known
                        life; each individual organism exists as the result of reproduction..</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <span data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-chevron-down"></span> What is respiration in plants?</span>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Plant respiration is the opposite of photosynthesis, which is a biological
                        process performed by green plants that creates oxygen and releases it into
                        the air. During respiration,plants absorb free molecules of oxygen (O2) and
                        use them to create water, carbon dioxide, and energy, which helps the plant grow.</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <span data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-chevron-down"></span> What is Respiration in animals?</span>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>A process in living organisms involving the production of energy,
                        typically with the intake of oxygen and the release of carbon
                        dioxide from the oxidation of complex organic substances. </p>
                </div>
            </div>
        </div>

 <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <span data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-chevron-down"></span> What are the types of respiration?</span>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <p> Aerobic Respiration<br/>
                    Anaerobic Respiration</p>
                </div>
            </div>
        </div>


    </div>
    <p><strong>Note:</strong> Click on the linked heading text to expand or collapse accordion panels.</p>
</div>
    <ul class="pagination" style="margin-left: 2%">
        <li>
            <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
            <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</body>
</html>