<?php $__env->startSection('page_title', 'Edit Grade'); ?>
<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Grade</h6>
            <?php echo Qs::getPanelOptions(); ?>

        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="<?php echo e(route('grades.update', $gr->id)); ?>">
                        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Name <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="name" value="<?php echo e($gr->name); ?>" required type="text" class="form-control" placeholder="Eg. C4">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="class_type_id" class="col-lg-3 col-form-label font-weight-semibold">Grade Type</label>
                            <div class="col-lg-9">
                                <select class="form-control select" name="class_type_id" id="class_type_id">
                                    <option value="">Not Applicable</option>
                                    <?php $__currentLoopData = $class_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e($gr->class_type_id == $ct->id ? 'selected' : ''); ?> value="<?php echo e($ct->id); ?>"><?php echo e($ct->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Mark From <span class="text-danger">*</span></label>
                            <div class="col-lg-3">
                                <input name="mark_from" min="0" max="100" value="<?php echo e($gr->mark_from); ?>" required type="number" class="form-control" placeholder="0">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Mark To <span class="text-danger">*</span></label>
                            <div class="col-lg-3">
                                <input name="mark_to" min="0" max="100" value="<?php echo e($gr->mark_to); ?>" required type="number" class="form-control" placeholder="0">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="remark" class="col-lg-3 col-form-label font-weight-semibold">Remark</label>
                            <div class="col-lg-9">
                                <select  class="form-control select" name="remark" id="remark">
                                    <option value="">Select Remark...</option>
                                    <?php $__currentLoopData = Mk::getRemarks(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e($gr->remark == $rem ? 'selected' : ''); ?> value="<?php echo e($rem); ?>"><?php echo e($rem); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/schrodinger/Desktop/Ai Edu/lav_sms/resources/views/pages/support_team/grades/edit.blade.php ENDPATH**/ ?>