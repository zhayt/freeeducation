
<?php $__env->startSection('content'); ?>
    <main>
        <div id="header-dropdown" class="modal__overlay">
            <ul class="modal__window" data-test-id="learn-menu">
                <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $arr = [];
                        for($i = 0; $i < count($area->courses); $i++){
                            $arr[] = $i;
                        }
                    ?>
                    <li class="modal__item">
                        <div class="_1b2zmqj" data-test-learn-menu-domain="math">
                            <ul>
                                <li data-navigable-index="0">
                                    <a tabindex="-1" class="_1rio1scd" href="<?php echo e(route('courses.index')); ?>">
                                        <span class="_17zmj242"><?php echo e($area->area_name); ?></span>
                                    </a>
                                </li>
                            </ul>
                                <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <ul class="_121xeo4">
                                    <li data-navigable-index="1">
                                        <a tabindex="-1" aria-label="Python" href="<?php echo e(route('post.show', ['post' => $area->courses[$item]->id])); ?>" class="_knb39h5">
                                            <span class="_xy39ea8">
                                                <?php echo e($area->courses[$item]->course_name); ?>

                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div><!--modal__overlay-->
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\freeeducationplatform\resources\views/course.blade.php ENDPATH**/ ?>