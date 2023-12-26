






<select onchange="window.location.href = this.value;">
    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e(LaravelLocalization::getLocalizedURL($lang)); ?>" <?php if(LaravelLocalization::getCurrentLocale() == $lang): ?> selected <?php endif; ?>>
            <?php echo e($lang); ?>

        </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

<?php /**PATH D:\Pustok\resources\views/layouts/front/lang.blade.php ENDPATH**/ ?>