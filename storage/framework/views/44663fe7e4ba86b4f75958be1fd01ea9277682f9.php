<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                    <div class="szakdolgozatoklistazasa">
                        Admin oldal
                        <div class="listaadmin">
                            <div class="fejlec">
                                <div class="szakdogacime">Szakdolgozat címe</div>
                                <div class="tagok">Készítők neve</div>
                                <div class="githublink">GitHub link</div>
                                <div class="oldallink">Szakdolgozat elérhetősége</div>

                            </div>




                        </div>
                    </div>
                    <div class="ujadat">
                        <form>
                            <div style="display:none"><input type="text" id="id"></div>
                            <div class="sor"><label for="szakdoga_nev">Szakdolgozat címe</label><input type="text" id="szakdoga_nev"></div>
                            <div class="sor"><label for="tagokneve">Készítők neve</label><input type="text" id="tagokneve"></div>
                            <div class="sor"><label for="oldallink">Az oldal elérhetősége </label><input type="text" id="oldallink"></div>
                            <div class="sor"><label for="githublink"> GitHub elérhetőség</label><input type="text" id="githublink"></div>
                            <div class="gomb"><button id="uj">Új</button>
                                <button id="modosit">Módosít</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hallgato\Desktop\probavizsga_kiindulo\resources\views/dashboard.blade.php ENDPATH**/ ?>