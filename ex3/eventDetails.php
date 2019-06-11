
<div id ="anotherdiv" align="center">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="John2.jpeg" class="d-block w-100" alt="John">
        </div>
        <div class="carousel-item">
            <img src="John3.jpeg" class="d-block w-100" alt="John">
        </div>
        <div class="carousel-item">
            <img src="John4.jpeg" class="d-block w-100" alt="John">
        </div>
        <div class="carousel-item">
            <img src="John5.jpeg" class="d-block w-100" alt="John">
        </div>
        <div class="carousel-item">
            <img src="John6.jpeg" class="d-block w-100" alt="John">
        </div>
    </div>
    <!-- prev button-->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <!-- next button-->
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



<p><h4>30.8.2019</h4> </p>

</div>

</div>

<?php

$agenda = ["20:00: Chit chatting","20:30: Collective games","21:30: Snacks and congrats saying","22:00: Dance until you cant stand"];
echo '<ul>';
foreach($agenda as $item){
    echo "<li>$item</li>";
}
echo '</ul>'
?>
<ul>
    <li>20:00: Chit chatting</li>
    <li>20:30: Collective games</li>
    <li>21:30: Snacks and congrats saying</li>
    <li>22:00: Dance until you cant stand</li>

</ul>

<div align="center">

    <div class="mapouter"><div class="gmap_canvas"><iframe width="400" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=%D7%A8%D7%97%D7%91%D7%AA%20%D7%94%D7%A8%D7%91%20%D7%A2%D7%95%D7%96%D7%99%D7%90%D7%9C%2025%2C%20%D7%91%D7%90%D7%A8%20%D7%A9%D7%91%D7%A2&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Werbung: <a href="https://www.jetzt-drucken-lassen.de">jetzt-drucken-lassen.de</a></div><style>.mapouter{position:relative;text-align:right;height:300px;width:400px;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:400px;}</style></div>
    <br>
    <a href="https://www.facebook.com/anna.filippov.1"><img class="icon"src="facebook.png" alt="Facebook"></a>
    <a href="https://plus.google.com/u/1/?pli=1"><img class="icon"src="google+.png"alt="Google+"></a>
    <a href="https://twitter.com/login/"><img class="icon"src="twitter_PNG19.png"alt="Twittet"></a>

<?php
$shuttle = [['name'=>'Mark','address'=>'Bnei-Aysh','hours'=>'19:00'],
    ['name'=>'Jacob','address'=>'Beer sheva','hours'=>'19:30'],
    ['name'=>'Larry','address'=>'Netivot','hours'=>'19:40']];
?>
    <p><table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col"> </th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Hours</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for($i=0;$i<count($shuttle);$i++){
            echo "<tr><th scope='row'>$i</th><td>". $shuttle[$i]["name"].
                "</td><td>". $shuttle[$i]["address"]."</td>
            <td>". $shuttle[$i]["hours"]."</td>
        </tr>";
        }
        ?>

        </tbody>
    </table>
    </p>
</div>
