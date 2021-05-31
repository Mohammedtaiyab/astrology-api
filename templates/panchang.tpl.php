<?php include 'common/header.tpl.php'; ?>

<div class="main-content">
    <div class="header-1 mb-0 section-rotate bg-section-secondary">
        <div class="section-inner bg-gradient-violet bg-container section-radius-min">
        </div>
        <div class="container top-header-wrapper">
            <div class="row my-auto">
                <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 text-lg-left top-header-text-content">
                    <h2 class="text-white mb-5">
                        <span class="font-weight-thin">Panchang</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container prokerala-api-demo-container">
        <?php include 'common/helper.tpl.php'; ?>

        <?php if (!empty($result)): ?>
            <h2 class="text-center text-black">Panchang Details</h2>
            <div class="panchang-details">
                <?php foreach ($panchangResult as $key => $data): ?>

                    <?php if (in_array($key, ['Nakshatra', 'Tithi', 'Karana', 'Yoga'], true)):?>
                        <hr>
                        <span class="text-black d-block b"><?= ucwords($key)?></span>
                        <?php foreach ($data as $idx => $value):?>
                            <span class="text-black d-block"><?=$value['name']?>

                            <?php if ('Nakshatra' === $key):?>
                                (Lord: <?= $value['nakshatra_lord']?>) :
                            <?php endif; ?>
                                <?=$value['start']->format('h:i A') . ' - ' . $value['end']->format('h:i A')?></span>
                        <?php endforeach; ?>

                    <?php elseif ('vaara' === $key):?>
                        <span class="text-black d-block"><b><?= ucwords($key)?></b> : <?=$data?></span>
                    <?php else:?>
                        <span class="text-black d-block"><b><?= ucwords($key)?></b> : <?=$data->format('h:i A')?></span>
                    <?php endif; ?>
                <?php endforeach?>

                <?php if ('advanced' === $result_type):?>
                <hr>
                    <table class="table table-bordered">
                            <tr class="alert-success text-center"><td colspan="2">Auspicious Timing</td></tr>
                            <?php foreach ($auspiciousPeriod as $muhuratName => $muhuratDetails):?>
                                <tr>
                                    <td><?= ucwords($muhuratName)?></td><td>
                                        <?php foreach ($muhuratDetails as $idx => $value):?>
                                            <?=$value['start']->format('h:i A')?> - <?=$value['end']->format('h:i A')?><br>

                                        <?php endforeach; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <tr class="alert-danger text-center"><td colspan="2">Inauspicious Timing</td></tr>
                            <?php foreach ($inAuspiciousPeriod as $muhuratName => $muhuratDetails):?>
                                <tr>
                                    <td><?= ucwords($muhuratName)?></td><td>
                                        <?php foreach ($muhuratDetails as $idx => $value):?>
                                            <?=$value['start']->format('h:i A')?> - <?=$value['end']->format('h:i A')?><br>
                                        <?php endforeach; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                    </table>
                <?php endif; ?>
            </div>
        <?php endif; ?>
            <section>
                <div class="card contact-form-wrapper box-shadow mx-auto rounded-2 mb-5">
                    <form class="p-5 text-default"  action="panchang.php" method="POST">
                        <?php include 'common/panchang-form.tpl.php'; ?>
                        <div class="form-group row">
                            <label class="col-sm-3 col-md-4 col-form-label  text-md-right text-xs-left">Result Type: </label>
                            <div class="col-sm-9 col-md-6 ">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="result_type" id="result_type1" value="basic" <?='basic' === $result_type ? 'checked' : ''?>>
                                    <label class="form-check-label" for="result_type1">Basic</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="result_type" id="result_type2" value="advanced" <?='advanced' === $result_type ? 'checked' : ''?>>
                                    <label class="form-check-label" for="result_type2">Advanced</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-warning btn-submit">Get Result</button>
                            <input type="hidden" name="submit" value="1">
                        </div>
                    </form>
                </div>
            </section>
        <?php include 'common/calculator-list.tpl.php'; ?>


    </div>
</div>


<?php include 'common/footer.tpl.php'; ?>

<!-- CODE FOR LOCATION SEARCH STARTS -->
<script src="https://client-api.prokerala.com/static/js/location.min.js"></script>
<script>
    (function () {
        let location = document.querySelectorAll('.prokerala-location-input');
        [...location].map(function (input) {
            new LocationSearch(input, function (data) {
                const inputPrefix = input.dataset.location_input_prefix ? input.dataset.location_input_prefix : '';
                const hiddenDiv = document.getElementById('form-hidden-fields');
                const coordinates = document.createElement('input');
                coordinates.name = inputPrefix +'coordinates';
                coordinates.type = 'hidden';
                coordinates.value = `${data.latitude},${data.longitude}`;
                const timezone = document.createElement('input');
                timezone.name = inputPrefix +'timezone';
                timezone.type = 'hidden';
                timezone.value = data.timezone;
                hiddenDiv.appendChild(coordinates);
                hiddenDiv.appendChild(timezone);
            }, {clientId: CLIENT_ID});
        });
    })();
</script>
<!-- CODE FOR LOCATION SEARCH ENDS -->
</body>
</html>
