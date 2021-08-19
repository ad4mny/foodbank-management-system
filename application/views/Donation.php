<div class="container p-5">
    <div class="row">
        <div class="col">
            <h3 class="text-white">Current Donation Status</h3>
        </div>
    </div>

    <div class="row">
        <div class="col text-dark">
            <div id='myChart' class="d-block vh-100 w-100 bg-light"></div>
            <?php if (isset($donation) && is_array($donation)) {
            ?>
                <script>
                    var myConfig = {
                        "type": "bar",
                        "scaleX": {
                            "labels": <?php echo $donation[2]; ?>
                        },
                        "series": [{
                            "values": <?php echo $donation[1]; ?>
                        }]
                    };

                    zingchart.render({
                        id: 'myChart',
                        data: myConfig,
                        height: '100%',
                        width: '100%'
                    });
                </script>
            <?php } ?>
        </div>
    </div>

</div>