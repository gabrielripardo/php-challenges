<?php

/*
 * Objetivo: o jogador que tiver a maior carta vai ganhar
 *
 */

$values = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
$suits = ['C', 'D', 'H','S'];

function createCard()
{
    global $values; //Palavra chave global
    global $suits;
    $indexValue = rand(0, count($values) - 1);
    $indexSuit = rand(0, count($suits) - 1);

    return array(
        'value' => $indexValue,
        'name' => $values[$indexValue] . $suits[$indexSuit]
    );
}

function play_game()
{
    $cards = array(
        "player_1" => createCard(),
        "player_2" => createCard()
    );

    if($cards["player_1"]['value'] > $cards["player_2"]['value']) {
        $cards["winner"] = ["player" => "player_1", ...$cards["player_1"]];
    }elseif ($cards["player_2"]['value'] > $cards["player_1"]['value']) {
        $cards["winner"] = ["player" => "player_2", ...$cards["player_2"]];
    }else {
        $cards["winner"] = ["player" => "empate"];
    }

    return $cards;
}

$game = play_game();

?>

<div>
    Jogador 1 possui carta: <?= $game["player_1"]['name']; ?> <br/>
    Jogador 2 possui carta: <?= $game["player_2"]['name']; ?>

    <hr>
    <p>
        O vencedor é <?= $game["winner"]["player"] ?> <br/>
        Com a carta <?= $game["winner"] != null ? $game["winner"]["name"] : ""?> <br/>
    </p>

    <a href="<?= $_SERVER['PHP_SELF'] ?>">Jogar novamente</a>
    <br>
    <br>
    <?= $_SERVER['HTTP_USER_AGENT'] ?>
</div>
