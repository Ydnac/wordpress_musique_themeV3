<?php
global $redux_musique;
$slides = $redux_musique ['opt-slides'];
$slidewidth = $redux_musique ['opt-slider-size-width'];
$slidemin = $redux_musique ['opt-slider-min-slides'];
$slidemax = $redux_musique ['opt-slider-max-slides'];
$slidemargin = $redux_musique ['opt-slider-margin-slides'];
$slidepager = $redux_musique ['opt-slider-pager-slides'];
$slidecaptions = $redux_musique ['opt-slider-captions-slides'];
$slidemoveslides = $redux_musique ['opt-slider-move-slides'];
?>
<ul class="bxslider" data-bx-slidewidth="<?php echo $slidewidth; ?>"
	data-bx-minslides="<?php echo $slidemin; ?>"
	data-bx-maxslides="<?php echo $slidemax; ?>"
	data-bx-slidemargin="<?php echo $slidemargin; ?>"
	data-bx-pager="<?php echo $slidepager; ?>"
	data-bx-captions="<?php echo $slidecaptions; ?>"
	data-moveslides="<?php echo $slidemoveslides; ?>">
<?php foreach ($slides as $slide) : ?>
	<li><img src="<?php echo $slide['image'];?>" alt=""
		title="<?php echo $slide['title']; ?>" /></li>
<?php endforeach;?>
</ul>