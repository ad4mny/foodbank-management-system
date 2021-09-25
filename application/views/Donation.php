<div class="container p-5">
    <div class="row">
        <div class="col">
            <h3 class="text-white">Daily Donation Status</h3>
        </div>
    </div>

    <div class="row">
        <div class="col text-dark">
            <div id='myChart' class="d-block vh-100 w-100"></div>
            <?php if (isset($donation)) { ?>
                <script>
                    var myConfig = {
                        title: {
                            text: "Total Availability of Foodbank"
                        },
                        "type": "pie",
                        plot: {
                            borderColor: "#2B313B",
                            borderWidth: 5,
                            // slice: 90,
                            valueBox: {
                                placement: 'out',
                                text: '%t\n%npv%',
                                fontFamily: "Open Sans"
                            },
                            tooltip: {
                                fontSize: '18',
                                fontFamily: "Open Sans",
                                padding: "5 10",
                                text: "%npv%"
                            }
                        },
                        "series": <?php echo $donation; ?>
                    };

                    zingchart.render({
                        id: 'myChart',
                        data: myConfig
                    });
                </script>
            <?php } ?>
        </div>
    </div>

</div>