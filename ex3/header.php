
<header>

    <h1>John's Birthday</h1>

    <div class = "event-description"> <p>We're going to celebrate John's 3rd birthday so get ready to get wild.<br>
            There will be lots of tuna, chicken and all the snacks the little ones love so come hungry.</p>
    </div>
    <p class="col-sm-12">Today: <?php echo date('d/m/Y'); ?>,its only
        <?php
        $now = time();
        $event_date = strtotime("2019-06-30");
        $datediff = $event_date- $now ;
        echo round($datediff / (60 * 60 * 24));
        ?> days left to johns's birthday
    </p>

</header>