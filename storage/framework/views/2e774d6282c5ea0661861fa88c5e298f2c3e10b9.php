<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Szakdolgozat2022</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/index.js"></script>
    <script src="../js/ajax.js"></script>
    <script src="../js/dogaklistazasa.js"></script>

    <link href="../css/kezdooldal.css" rel="stylesheet" type="text/css" />

    <!-- <script src="./js/dogaklistazasa.js" type="module"></script> -->
</head>

<body class="antialiased">


    <main>

        <header>
        <img class="kep" src="szamalklogo.jpg" alt="logo">
            <h1 class="kozepre">Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai</h1>
        </header>
        <section class="bejelentkezes kozepre">
            <h2>A szakdolgozatokat bejelentkezés után tudja megnézni!</h2>
            <?php if(Route::has('login')): ?>
            <div class=" px-6 py-4 sm:block">
                <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/dashboard')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Szakdolgozatok</a>
                <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Bejelentkezés</a>

                <?php if(Route::has('register')): ?>
                <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regisztráció</a>
                <?php endif; ?>
                <?php endif; ?>
            </div>

            <?php endif; ?>
        </section>
        <article>
        <div class="tablazat">
            <table >
                    <tr>
                        <th>Szakdolgozat címe</th>
                        <th>Készítők neve</th>
                        <th>Github link</th>
                        <th>Szakdolgozat elérhetőség</th>
                        
                      </tr>
                </table>
                <form class=ujfelvisz>
                    <div class="sor">
                        <label id="szoveg" for="fname">Szakdolgozat címe: </label>
                        <input type="txt" placeholder="Szakdolgozat címe" class="szakdogaCim" required />
                    </div>
                        <div class="sor">
                            <label id="szoveg" for="fname">Készítők neve: </label>
                            <input type="txt" placeholder="Készítők neve" class="keszitokneve" required />
                        </div>
                    <div class="sor">
                        <label id="szoveg" for="fname">Az oldal erérhetősége: </label>
                        <input type="txt" placeholder="Az oldal erérhetősége" class="oldalElerhetoseg" required />
                    </div>

                    <div class="sor">
                        <label id="szoveg" for="fname">GitHub elérhetőség:</label>
                        <input type="txt" placeholder="GitHub elérhetőség" class="githubElerhetoseg" required />
                    </div>
                    <div class="sor">
                        <button type="submit" class="felvisz">Új</button>
                    </div>
            </form>
            </div>
        </article>
        <footer class="kozepre">
            <table>
                <tr class="szakdoga">
                    <td class="cime">cime</td>
                    <td class="neve">neve</td>
                    <td class="gitlink">gitlink</td>
                    <td class="elerhetoseg">elerhetoseg</td>
                    <td ><button class="szerkesztGomb" type="submit">Szerkeszt</button></td>
                    <td ><button class="torolGomb" type="submit">Torol</button></td>
                </tr>
            </table>
            Laravel v<?php echo e(Illuminate\Foundation\Application::VERSION); ?> (PHP v<?php echo e(PHP_VERSION); ?>)
        </footer>
    </main>
    </div>
    </div>
</body>

</html>
<?php /**PATH C:\Users\hallgato\Desktop\probavizsga_kiindulo\resources\views/welcome.blade.php ENDPATH**/ ?>