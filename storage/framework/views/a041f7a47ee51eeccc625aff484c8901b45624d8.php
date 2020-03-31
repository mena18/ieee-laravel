<div class="col-xs-12 col-sm-6 <?php echo e($event->event_type); ?>">
    <div class="events-item">
        <div class="events-item-img">
            <a href="<?php echo e(route('mega.event',['id'=>$event->id])); ?>"
               style="background-image:url('<?php echo e($event->image); ?>');">
            </a>
        </div>
        <div class="events-item-info">
            <h3><a href="<?php echo e(route('mega.event',['id'=>$event->id])); ?>">
								<?php echo e($event->title); ?>

                </a></h3><br><br>
            <ul class="event-meta">
                <li>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <?php echo e(\Carbon\Carbon::createFromTimeString($event->date)->toFormattedDateString()); ?>

                </li>
                <li>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
									<?php echo e($event->location); ?>

                </li>
            </ul>
            <p><?php echo e(substr(preg_replace("(\<.*?\>)", " ", $event->description), 0, 200)); ?>...</p>
        </div>
        <div class="events-item-link">
            <a href="<?php echo e(route('mega.event',['id'=>$event->id])); ?>" class="hvr-push">Read More</a>
        </div>
    </div>
</div>