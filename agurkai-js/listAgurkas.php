<?php foreach($store->getAll() as $augalas): ?>
    
<div class="agurkas">
    <div class="imgDiv">
        <img src="./img/agurkas/<?= $augalas->img ?>.png" alt="agurcikas" class="images">
    </div>
    <div class="agurkai">
        <p class="agurkaiText">
        Agurkas nr. <?= $augalas->id ?>
        Agurku: <?= $augalas->count ?>
        </p>
    </div>
    <div class="israuti">
        <button type="button" name="rautiAgurka" class="israutiButton" value="<?= $augalas->id ?>">israuti</button>
    </div>
</div>

<?php endforeach ?>