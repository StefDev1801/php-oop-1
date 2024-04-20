<main>
        <div class="container">
            <div class="row">
                <!-- php cards -->
                <?php foreach ($productions as $production) :?>
                    <div class="col">
                        <div class="card">
                            <?= $production->getTitle() ?>
                        </div>
                    </div>
                <?php  endforeach?>
                <!-- end php cards -->
            </div>
        </div>
    </main>