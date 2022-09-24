;

<?php $__env->startSection('title'); ?>
    Contact
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- section -->

<section class="inner_banner pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="full">
                    <h3>Contact us</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end section -->

<!-- section -->
<div class="section layout_padding contact_section" style="background:#f6f6f6;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="full float-right_img">
                    <img src="<?php echo e(asset('frontEndAsset')); ?>/images/img10.png" alt="#">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="contact_form">
                    <form action="contact.html">
                        <fieldset>
                            <div class="full field">
                                <input type="text" placeholder="Your Name" name="your name" />
                            </div>
                            <div class="full field">
                                <input type="email" placeholder="Email Address" name="Email" />
                            </div>
                            <div class="full field">
                                <input type="phn" placeholder="Phone Number" name="Phone number" />
                            </div>
                            <div class="full field">
                                <textarea placeholder="Massage"></textarea>
                            </div>
                            <div class="full field">
                                <div class="center"><button>Send</button></div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\MRK batch-9\server-9\htdocs\SMS\resources\views/frontEnd/contact/contact.blade.php ENDPATH**/ ?>