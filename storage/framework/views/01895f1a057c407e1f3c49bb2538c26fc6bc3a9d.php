
<?php $__env->startSection('content'); ?>
    <main>
        <div class="container">

            <div class="intro">
                <div class="intro__inner">
                    <div class="intro__item">
                        <img src="img/intro img.png" alt="">
                    </div>

                    <div class="intro__item">
                        <h1 class="intro__header">Very lazy person <br>
                            needs comfortable <br>
                            lessons
                        </h1>

                        <div class="intro__text">
                            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
                        </div>

                        <div class="intro__btn">
                            <a href="<?php echo e(route('courses.index')); ?>" class="btn">
                                Get started
                            </a>
                            <a href="#carb" class="btn">
                                Learn more
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div><!--intro-->

            <section class="section">
                <h1 class="section__header" id="carb">
                    Why We Works
                </h1>

                <div class="card">
                    <div class="card__item">
                        <div class="card__img">
                            <img src="img/images1.png" alt="">
                        </div>
                        <h2 class="card__header">Personalized learning</h2>
                        <div class="card__text">Students practice at their own pace, first filling in gaps in their understanding and then accelerating their learning.</div>
                    </div>

                    <div class="empty_block"></div> 
                    
                    <div class="card__item">
                        <div class="card__img">
                            <img src="img/L_02.png" alt="">
                        </div>
                        <h2 class="card__header">Trusted content</h2>
                        <div class="card__text">Created by experts, FE's library of trusted practice and lessons covers math, science, and more. Always free for learners and teachers.</div>
                    </div>

                    <div class="empty_block"></div> 
                    
                    <div class="card__item">
                        <div class="card__img">
                            <img src="img/L_03.png" alt="">
                        </div>
                        <h2 class="card__header">Tools to empower teachers</h2>
                        <div class="card__text">With FE, teachers can identify gaps in their students’ understanding, tailor instruction, and meet the needs of every student.</div>
                    </div>
                </div>
            </section>

            <section class="section">

                <div class="intro">
                    <div class="intro__inner">
                        <div class="intro__item">
                            <img src="img/section img.png" alt="">
                        </div>
    
                        <div class="intro__item--other">
                            <h1 class="intro__header">While you watch<br>
                                others study
                            </h1>
    
                            <div class="intro__text">
                                Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
                            </div>
    
                            <div class="intro__btn">
                                <a href="<?php echo e(route('courses.index')); ?>" class="btn">
                                    Start learning
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div><!--intro-->

            </section>

            <section class="section">
                <div class="section__inner">

                    <div class="section__item">
                        <form action="disa.blade.php" method="post" style=" justify-content">
                            <div class="inputBox">
                                <input type="text" placeholder="Имя" name="name">
                                <br>
                                <input type="email" placeholder="Емайл" name="email">
                                <br>
                            </div>
                            <div class="inputBox">
                                <textarea name="message" id="" cols="70" rows="7"></textarea>
                                <br>
                                <input  type="submit"  value="отправить" class="" name="send" >
                            </div>
                        </form>
                    </div>

                    <div class="section__item">
                        <div class="section__img">
                            <img src="img/form_img.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\freeeducationplatform\resources\views/index.blade.php ENDPATH**/ ?>