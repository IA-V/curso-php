<div class="titulo">Integracao CSS</div>

<h1>
    <?php
        echo 'Ola ';
        echo '<small>Mundo kk</small>';
    ?>
</h1>

<?= "<div>Outra forma de me expressar</div>" ?>

<br>
<div>
    <button roxo>
        <?=  "Legal" ?>
    </button>
</div>

<style>
    button {
        padding: 5px <?= 2*50; ?>px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: 300;
        border-radius: 10px;
    }

    <?= '[roxo]' ?> {
        background-color: #9b68f3;
    }
</style>