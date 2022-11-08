<?php $__env->startSection("style"); ?>
<link rel="stylesheet" href="css/student-entry.088b234232eb46986c8c.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleformaincontent.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main>
            <section class="section--spesial">
                <div class="section__header section__header--special">
                    <div class="header__inner">
                        <a href="" class="section__suptitle">
                            <h2>Computing</h2>
                        </a>
                        <h1 class="section__title">
                            Computer programming
                        </h1>
                    </div>
                </div>
            </section>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section>
                <div id="accordion" class="accordion">
                    <div class="accordion__item">
                        <div class="accordion__header">
                            <h2 href="" class="accordion__suptitle">
                                Lessen 1
                            </h2>
                            <h1 class="accordion__title">
                                <?php echo e($item->lesson_name); ?>

                            </h1>
                        </div>
                        <div class="accordion__content">
                            <div class="video">
                                <video class="video__item" src="<?php echo e($item->url_lesson_video); ?>" controls>
                                    <track kind="subtitles" src="videos/130.mp4" srclang="en" label="English">
                                </video>
                            </div>
                            <div class="text">
                                <p>
                                    <?php echo e($item->lesson_text); ?>

                                </p>
                            </div>
                        </div>
                    </div><!--accordion__item-->
                </div>
            </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\freeeducationplatform\resources\views/maincontent.blade.php ENDPATH**/ ?>