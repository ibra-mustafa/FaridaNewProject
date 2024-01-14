<?php $__env->startSection('content_header'); ?>
    <h1><?php echo app('translator')->getFromJson('Districts'); ?></h1>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

        </div>
        <div class="clearfix"></div>
    <?php endif; ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-bpoint">

                    <a class="btn btn-sm btn-success btn-lg btn-new-element"
                       href="<?php echo e(action('Admin\DistrictController@create')); ?>"><?php echo app('translator')->getFromJson('Add'); ?> <?php echo app('translator')->getFromJson('District'); ?></a>

                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class='table table-hover'>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo app('translator')->getFromJson('Arabic Name'); ?></th>
                                <th><?php echo app('translator')->getFromJson('Name'); ?></th>
                                <th><?php echo app('translator')->getFromJson('City'); ?></th>
                                <th><?php echo app('translator')->getFromJson('Controllers'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($district->id); ?></td>
                                    <td><?php echo e($district->name_ar); ?></td>
                                    <td><?php echo e($district->name); ?></td>
                                    <td><?php echo e($district->city->name_ar); ?></td>
                                    <td>
                                        <button class="btn btn-primary btn-xs"
                                                onclick="location.href='<?php echo e(action('Admin\DistrictController@edit',$district->id)); ?>'"><?php echo app('translator')->getFromJson('Edit'); ?></button>
                                        <button class="delete-model btn  btn-danger  btn-xs"
                                                data-obj="<?php echo e($district->id); ?>"><?php echo app('translator')->getFromJson('Delete'); ?></button>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($districts->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <?php echo $__env->make('includes.delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>