<?php
$session = $data['session'];
?>
<section class="image-slider">
 <ul class="rslides rslides2">
      <li id="rslides2_s1">
      <?php if ($session->isAuthenticated()) : ?>
                <a href="index.php?pID=24&m=reservations"><img src="site/img/slides/paameldning.png" alt=""/> <h3>Meld deg på nå!</h3> </a>
                <?php else : ?>
                <a href=""id="registerTile"><img
                        src="site/img/slides/paameldning.png" alt=""/>
                    <h3>Meld deg på nå!</h3></a>
                <?php endif; ?></li>
      <li id="rslides2_s2"><a href="index.php?m=articles&act=view&artID=35&pID=25"><img src="site/img/slides/compo.png" alt=""/> <h3>Alt om alle compoer</h3></a></li>
      <li id="rslides2_s3"><a href="index.php?m=articles&act=view&artID=52&pID=15"><img src="site/img/slides/arrangement.png" alt=""/> <h3>Nemean 2014</h3></a></li>
      <li id="slide4"><a href="index.php?m=articles&act=view&artID=34&pID=56"><img src="site/img/slides/foreldre.png" alt=""/><h3>Til foreldre</h3></a></li>
    </ul>
    <div id="naver"></div>
</section>
<!--         <section class="socialfeed">
<div class="box-title">
<h3>Siste oppdateringer</h3>
</div>
<-- Box-content ->
</section>
<section class="burgerfeed">
<div class="box-title">
<h3>Nemean-Burger</h3>
</div>
<!-- Box-content ->
<h1 class="box-content" id="burger-status" style="margin-top: 55px;">Stengt</h1><!-- php variable ->
<h5 class="box-content-text" id="burger-time">Åpner om <span id="hours">1 timer og </span><span id="minutes">14</span> minutter.</h5><!-- php variable, modifications may be necessary! ->
</section>
-->
<section>
    <section class="sponsors">
        <div class="box-title">
            <h3>Våre samarbeidspartnere</h3>
        </div>
        <!-- Box-content -->
        <a href="http://www.hemnenett.no"><img src="site/img/sponsorer/hemnenett.jpg"/></a>
        <a href="http://www.sparebankenhemne.no"><img src="site/img/sponsorer/sparebankenHemne.jpg"/></a>
        <a href="http://www.mot.no"><img width="420px" src="site/img/sponsorer/mot.jpg"/></a>

    </section>

    <a href="https://www.facebook.com/nemeanlan/photos_stream" class="gallery">
    <div class="box-title">
        <h3>Galleri</h3>
    </div> <!-- To-be dynamic --></a>

    <a href="?m=articles&act=view&artID=37" class="questions">
    <div class="box-title">
        <h3>Spørsmål?</h3>
    </div> <!-- Box-content --> <h1 class="box-content">Kontakt oss!</h1> </a>

    <a href="" class="applytocrew">
    <div class="box-title">
        <h3>Lyst til å bli en av oss?</h3>
    </div> <!-- Box-content --> <h1 class="box-content">Søk nå!</h1> </a>


<a href="https://www.facebook.com/nemeanlan">
<section class="facebook social">
    <h1 class="box-content" style="line-height:100px;">Facebook</h1>
</section></a>

<a href="https://twitter.com/NemeanLAN">
<section class="twitter social">
    <h1 class="box-content" style="line-height:100px;">Twitter</h1>
</section></a>

<a href="http://www.youtube.com/channel/UCnqj-QgG5GdaZNagYXH88Ng">
<section class="youtube social">
    <h1 class="box-content" style="line-height:100px;">Youtube!</h1>
</section></a>

</section>
