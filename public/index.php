<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zephir Playground [DDEV]</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
          integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
          integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <blockquote class="blockquote">
        <?php
        if (extension_loaded('utils')) {
            echo '<p>✅ utils.so Module is loaded.</p><hr style="width: 100%">';
            echo '<p>' . Utils\Greeting::say() . '</p>';
            echo '<p>' . (new Utils\Filter())->alpha('foo-bar') . '</p>';
        } else {
            echo '<p>❌ utils.so Module is loaded. <pre>ddev ssh</pre> into container and run <pre>make build-all</pre></p>';
        }
        ?>
    </blockquote>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne"
                        aria-expanded="false" aria-controls="collapseOne">
                    phpinfo()
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                 data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <?php
                    phpinfo() ?>
                </div>
            </div>
        </div>
        <?php
        if (extension_loaded('xdebug')) { ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        xdebug_info (if activated)
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php xdebug_info();?>
                    </div>
                </div>
            </div>
        <?php
        } ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>
</html>