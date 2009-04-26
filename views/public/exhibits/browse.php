<?php head(array('title'=>'Browse Exhibits')); ?>
<div id="primary">
	<h1>Exhibits</h1>
	
	<?php 
	if($exhibits):
	?>
	
	<ul class="navigation" id="secondary-nav">
	    <?php echo nav(array('Browse All' => uri('exhibits'), 'Browse by Tag' => uri('exhibits/tags'))); ?>
    </ul>	
	
<div id="exhibits">
		
<?php foreach( $exhibits as $key=>$exhibit ): ?>
	<div class="exhibit <?php if($key%2==1) echo ' even'; else echo ' odd'; ?>">
		<h2><?php echo link_to_exhibit($exhibit); ?></h2>
		<div class="description"><?php echo $exhibit->description; ?></div>
		<p class="tags"><?php echo tag_string($exhibit, uri('exhibits/browse/tag/')); ?></p>
	</div>
<?php endforeach; ?>
</div>
<?php else: ?>
	<p>You have no exhibits. Please add some in the admin.</p>
	<?php endif; ?>
</div>
<?php foot(); ?>