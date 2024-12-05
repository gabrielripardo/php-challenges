<style>
    .coin {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        background-color: gray;
        width: 90px;
        height: 90px;
        border-radius: 100px;
        text-align: center;
        color: white;
    }

</style>

<html>
    <div class="coin">
        <?php echo flip() ?>
    </div>
</html>

<?php

function flip(){
   return 0 == rand(0, 1) ? "Cara" : "Coroa";
}




