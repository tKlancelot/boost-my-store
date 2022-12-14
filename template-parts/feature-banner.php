<?php

$upOne = dirname(__DIR__, 1);
$path = $upOne.'/classes/IconsENFT.php';
require_once($path);
$librairie_icons = new IconsENFT();
$theme_color = '#F24E1D';

?>

<section id="feature-banner" class="feature-banner">
    <div class="feature-banner__body">
        <div class="grid">
            <div class="grid__item">
                <div class="grid__item__content">
                    <p>Rapprochez votre carte du téléphone de votre client</p>
                </div>
                <div class="grid__item__heading">
                    <h3>sans contact</h3>
                </div>
                <div class="grid__item__picto">
                    <?= $librairie_icons::chrono($theme_color);?>
                </div>
            </div>
            <div class="grid__item">
                <div class="grid__item__content">
                    <p>Votre client est instantanément redirigé vers votre formulaire 
d’avis Google</p>
                </div>
                <div class="grid__item__heading">
                    <h3>instantané</h3>
                </div>
                <div class="grid__item__picto">
                    <?= $librairie_icons->renderSvg('map',$theme_color);?>
                </div>
            </div>
            <div class="grid__item">
                <div class="grid__item__content">
                    <p>Vous avez reçu un avis 100% authentique et géolocalisé</p>
                </div>
                <div class="grid__item__heading">
                    <h3>authentique et géolocalisé</h3>
                </div>
                <div class="grid__item__picto">
                    <?= $librairie_icons->renderSvg('credit-card',$theme_color);?>
                </div>
            </div>
            <div>

            </div>
        </div>
        <div class="cta">
            <button>en savoir plus</button>
        </div>
    </div>


</section>