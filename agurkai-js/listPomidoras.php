<?php foreach($store->getAll() as $augalas): ?>

<div class="pomidoras">
    <div class="imgDiv">
        <img src="./img/pomidoras/<?= $augalas->img ?>.png" alt="agurcikas" class="images">
    </div>
    <div class="agurkai">
        <p class="agurkaiText">
        Pomidoras nr. <?= $augalas->id ?>
        Pomidoru: <?= $augalas->count ?>
        </p>
    </div>
    <div class="israuti">
        <button type="submit" name="rautiPomidora" class="israutiButton" value="<?= $augalas->id ?>">israuti</button>
    </div>
</div>

<?php endforeach ?>