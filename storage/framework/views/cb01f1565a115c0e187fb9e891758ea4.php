

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Editar Registro</h1>
    <form action="<?php echo e(url('/reservistas/' . $reservista->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="unidad" class="form-label">Unidad</label>
            <input type="text" class="form-control" id="unidad" name="unidad" value="<?php echo e($reservista->Unidad); ?>" required>
        </div>
        <div class="mb-3">
            <label for="plantilla" class="form-label">Plantilla</label>
            <input type="text" class="form-control" id="plantilla" name="plantilla" value="<?php echo e($reservista->Plantilla); ?>" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">ESTADO</label>
            <input type="text" class="form-control" id="estado" name="estado" value="<?php echo e($reservista->ESTADO); ?>" required>
        </div>
        <div class="mb-3">
            <label for="cargo" class="form-label">CARGO</label>
            <input type="text" class="form-control" id="cargo" name="cargo" value="<?php echo e($reservista->CARGO); ?>" required>
        </div>
        <div class="mb-3">
            <label for="grado" class="form-label">GRADO</label>
            <input type="text" class="form-control" id="grado" name="grado" value="<?php echo e($reservista->GRADO); ?>" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">NOMBRE Y APELLIDOS</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo e($reservista->NOMBRE_Y_APELLIDOS); ?>" required>
        </div>
        <div class="mb-3">
            <label for="c_identidad" class="form-label">C.IDENTIDAD</label>
            <input type="text" class="form-control" id="c_identidad" name="c_identidad" value="<?php echo e($reservista->C_IDENTIDAD); ?>" required>
        </div>
        <div class="mb-3">
            <label for="municipio" class="form-label">MUNICIPIO</label>
            <input type="text" class="form-control" id="municipio" name="municipio" value="<?php echo e($reservista->MUNICIPIO); ?>" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">DIRECCION</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo e($reservista->DIRECCION); ?>" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label"># de Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo e($reservista->TELEFONO); ?>" required>
        </div>
        <div class="mb-3">
            <label for="preparado" class="form-label">Preparado</label>
            <input type="text" class="form-control" id="preparado" name="preparado" value="<?php echo e($reservista->Preparado); ?>" required>
        </div>
        <div class="mb-3">
            <label for="fecha_preparado" class="form-label">Fecha Preparado</label>
            <input type="date" class="form-control" id="fecha_preparado" name="fecha_preparado" value="<?php echo e($reservista->Fecha_Preparado); ?>" required>
        </div>
        <div class="mb-3">
            <label for="recorrido" class="form-label">Recorrido</label>
            <input type="text" class="form-control" id="recorrido" name="recorrido" value="<?php echo e($reservista->Recorrido); ?>" required>
        </div>
        <div class="mb-3">
            <label for="fecha_recorrido" class="form-label">Fecha Recorrido</label>
            <input type="date" class="form-control" id="fecha_recorrido" name="fecha_recorrido" value="<?php echo e($reservista->Fecha_Recorrido); ?>" required>
        </div>
        <div class="mb-3">
            <label for="causal" class="form-label">Causal</label>
            <input type="text" class="form-control" id="causal" name="causal" value="<?php echo e($reservista->Causal); ?>" required>
        </div>
        <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones</label>
            <textarea class="form-control" id="observaciones" name="observaciones" rows="3" required><?php echo e($reservista->Observaciones); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\datamoviben\resources\views/edit.blade.php ENDPATH**/ ?>