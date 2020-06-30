<?php
//Criando as constantes com as credencias de acesso ao banco de dados
$servername = 'localhost'; $username = 'root'; $password = 'Julh@01'; $database = 'OKEX';

//Criar a conexão com banco de dados 
try {
	$connection = mysqli_connect($servername, $username, $password, $database);
    } catch (PDOException $e) {
      echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
                              }

//selecionando o banco de dados 
$db = mysqli_select_db($connection, "OKEX");

//Teste do "if" com "while"
$contador = 0;
while ($contador <= 100000000) {
	
    if ($contador == 1000000) {
		$url = "https://www.okex.com/api/spot/v3/instruments/BTC-USDT/ticker";
		$ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$moeda = json_decode(curl_exec($ch));  
		$instrument_id = $moeda->instrument_id;$product_id = $moeda->product_id;$timestamp = date("Y-m-d H:i:s");$best_ask = $moeda->best_ask;$best_bid = $moeda->best_bid;$last = $moeda->last;$last_qty = $moeda->last_qty;$ask = $moeda->ask;$best_ask_size = $moeda->best_ask_size;$bid = $moeda->bid;$best_bid_size = $moeda->best_bid_size;$open_24h = $moeda->open_24h;$high_24h = $moeda->high_24h;$low_24h = $moeda->low_24h;$base_volume_24h = $moeda->base_volume_24h;$quote_volume_24h = $moeda->quote_volume_24h ;
		$best_ask = floatval ($best_ask); $best_ask = number_format($best_ask, 8, '.', '');$best_bid = floatval ($best_bid); $best_bid = number_format($best_bid, 8, '.', '');$last = floatval ($last); $last = number_format($last, 8, '.', '');$last_qty = floatval ($last_qty); $last_qty = number_format($last_qty, 8, '.', '');$ask = floatval ($ask); $ask = number_format($ask, 8, '.', '');$best_ask_size = floatval ($best_ask_size); $best_ask_size = number_format($best_ask_size, 8, '.', '');$bid = floatval ($bid); $bid = number_format($bid, 8, '.', '');$best_bid_size = floatval ($best_bid_size); $best_bid_size = number_format($best_bid_size, 8, '.', '');$open_24h = floatval ($open_24h); $open_24h = number_format($open_24h, 8, '.', '');$high_24h = floatval ($high_24h); $high_24h = number_format($high_24h, 8, '.', '');$low_24h = floatval ($low_24h); $low_24h = number_format($low_24h, 8, '.', '');$base_volume_24h = floatval ($base_volume_24h); $base_volume_24h = number_format($base_volume_24h, 8, '.', '');$quote_volume_24h = floatval ($quote_volume_24h); $quote_volume_24h = number_format($quote_volume_24h, 8, '.', '');
		$sql = mysqli_query($connection, "SELECT MAX(id) FROM MOEDAS") or die(mysqli_error($connection));
		while($aux = mysqli_fetch_assoc($sql)) {$id = $aux["MAX(id)"] + 1;}
		$sql = "INSERT INTO MOEDAS (id, best_ask, best_bid, instrument_id, product_id, last, last_qty, ask, best_ask_size, bid, best_bid_size, open_24h, high_24h, low_24h, base_volume_24h, quote_volume_24h, timestamp)
		VALUES ($id, $best_ask, $best_bid, '$instrument_id', '$product_id', $last, $last_qty, $ask, $best_ask_size, $bid, $best_bid_size, $open_24h, $high_24h, $low_24h, $base_volume_24h, $quote_volume_24h, '$timestamp')";
		mysqli_query($connection, $sql);
    }
	if ($contador == 20000000) {
		$url = "https://www.okex.com/api/spot/v3/instruments/ETH-USDT/ticker";
		$ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$moeda = json_decode(curl_exec($ch));  
		$instrument_id = $moeda->instrument_id;$product_id = $moeda->product_id;$timestamp = date("Y-m-d H:i:s");$best_ask = $moeda->best_ask;$best_bid = $moeda->best_bid;$last = $moeda->last;$last_qty = $moeda->last_qty;$ask = $moeda->ask;$best_ask_size = $moeda->best_ask_size;$bid = $moeda->bid;$best_bid_size = $moeda->best_bid_size;$open_24h = $moeda->open_24h;$high_24h = $moeda->high_24h;$low_24h = $moeda->low_24h;$base_volume_24h = $moeda->base_volume_24h;$quote_volume_24h = $moeda->quote_volume_24h ;
		$best_ask = floatval ($best_ask); $best_ask = number_format($best_ask, 8, '.', '');$best_bid = floatval ($best_bid); $best_bid = number_format($best_bid, 8, '.', '');$last = floatval ($last); $last = number_format($last, 8, '.', '');$last_qty = floatval ($last_qty); $last_qty = number_format($last_qty, 8, '.', '');$ask = floatval ($ask); $ask = number_format($ask, 8, '.', '');$best_ask_size = floatval ($best_ask_size); $best_ask_size = number_format($best_ask_size, 8, '.', '');$bid = floatval ($bid); $bid = number_format($bid, 8, '.', '');$best_bid_size = floatval ($best_bid_size); $best_bid_size = number_format($best_bid_size, 8, '.', '');$open_24h = floatval ($open_24h); $open_24h = number_format($open_24h, 8, '.', '');$high_24h = floatval ($high_24h); $high_24h = number_format($high_24h, 8, '.', '');$low_24h = floatval ($low_24h); $low_24h = number_format($low_24h, 8, '.', '');$base_volume_24h = floatval ($base_volume_24h); $base_volume_24h = number_format($base_volume_24h, 8, '.', '');$quote_volume_24h = floatval ($quote_volume_24h); $quote_volume_24h = number_format($quote_volume_24h, 8, '.', '');
		$sql = mysqli_query($connection, "SELECT MAX(id) FROM MOEDAS") or die(mysqli_error($connection));
		while($aux = mysqli_fetch_assoc($sql)) {$id = $aux["MAX(id)"] + 1;}
		$sql = "INSERT INTO MOEDAS (id, best_ask, best_bid, instrument_id, product_id, last, last_qty, ask, best_ask_size, bid, best_bid_size, open_24h, high_24h, low_24h, base_volume_24h, quote_volume_24h, timestamp)
		VALUES ($id, $best_ask, $best_bid, '$instrument_id', '$product_id', $last, $last_qty, $ask, $best_ask_size, $bid, $best_bid_size, $open_24h, $high_24h, $low_24h, $base_volume_24h, $quote_volume_24h, '$timestamp')";
		mysqli_query($connection, $sql);
    }
    if ($contador == 30000000) {
		$url = "https://www.okex.com/api/spot/v3/instruments/XRP-USDT/ticker";
		$ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$moeda = json_decode(curl_exec($ch));  
		$instrument_id = $moeda->instrument_id;$product_id = $moeda->product_id;$timestamp = date("Y-m-d H:i:s");$best_ask = $moeda->best_ask;$best_bid = $moeda->best_bid;$last = $moeda->last;$last_qty = $moeda->last_qty;$ask = $moeda->ask;$best_ask_size = $moeda->best_ask_size;$bid = $moeda->bid;$best_bid_size = $moeda->best_bid_size;$open_24h = $moeda->open_24h;$high_24h = $moeda->high_24h;$low_24h = $moeda->low_24h;$base_volume_24h = $moeda->base_volume_24h;$quote_volume_24h = $moeda->quote_volume_24h ;
		$best_ask = floatval ($best_ask); $best_ask = number_format($best_ask, 8, '.', '');$best_bid = floatval ($best_bid); $best_bid = number_format($best_bid, 8, '.', '');$last = floatval ($last); $last = number_format($last, 8, '.', '');$last_qty = floatval ($last_qty); $last_qty = number_format($last_qty, 8, '.', '');$ask = floatval ($ask); $ask = number_format($ask, 8, '.', '');$best_ask_size = floatval ($best_ask_size); $best_ask_size = number_format($best_ask_size, 8, '.', '');$bid = floatval ($bid); $bid = number_format($bid, 8, '.', '');$best_bid_size = floatval ($best_bid_size); $best_bid_size = number_format($best_bid_size, 8, '.', '');$open_24h = floatval ($open_24h); $open_24h = number_format($open_24h, 8, '.', '');$high_24h = floatval ($high_24h); $high_24h = number_format($high_24h, 8, '.', '');$low_24h = floatval ($low_24h); $low_24h = number_format($low_24h, 8, '.', '');$base_volume_24h = floatval ($base_volume_24h); $base_volume_24h = number_format($base_volume_24h, 8, '.', '');$quote_volume_24h = floatval ($quote_volume_24h); $quote_volume_24h = number_format($quote_volume_24h, 8, '.', '');
		$sql = mysqli_query($connection, "SELECT MAX(id) FROM MOEDAS") or die(mysqli_error($connection));
		while($aux = mysqli_fetch_assoc($sql)) {$id = $aux["MAX(id)"] + 1;}
		$sql = "INSERT INTO MOEDAS (id, best_ask, best_bid, instrument_id, product_id, last, last_qty, ask, best_ask_size, bid, best_bid_size, open_24h, high_24h, low_24h, base_volume_24h, quote_volume_24h, timestamp)
		VALUES ($id, $best_ask, $best_bid, '$instrument_id', '$product_id', $last, $last_qty, $ask, $best_ask_size, $bid, $best_bid_size, $open_24h, $high_24h, $low_24h, $base_volume_24h, $quote_volume_24h, '$timestamp')";
		mysqli_query($connection, $sql);
    }
    if ($contador == 40000000) {
		$url = "https://www.okex.com/api/spot/v3/instruments/BCH-USDT/ticker";
		$ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$moeda = json_decode(curl_exec($ch));  
		$instrument_id = $moeda->instrument_id;$product_id = $moeda->product_id;$timestamp = date("Y-m-d H:i:s");$best_ask = $moeda->best_ask;$best_bid = $moeda->best_bid;$last = $moeda->last;$last_qty = $moeda->last_qty;$ask = $moeda->ask;$best_ask_size = $moeda->best_ask_size;$bid = $moeda->bid;$best_bid_size = $moeda->best_bid_size;$open_24h = $moeda->open_24h;$high_24h = $moeda->high_24h;$low_24h = $moeda->low_24h;$base_volume_24h = $moeda->base_volume_24h;$quote_volume_24h = $moeda->quote_volume_24h ;
		$best_ask = floatval ($best_ask); $best_ask = number_format($best_ask, 8, '.', '');$best_bid = floatval ($best_bid); $best_bid = number_format($best_bid, 8, '.', '');$last = floatval ($last); $last = number_format($last, 8, '.', '');$last_qty = floatval ($last_qty); $last_qty = number_format($last_qty, 8, '.', '');$ask = floatval ($ask); $ask = number_format($ask, 8, '.', '');$best_ask_size = floatval ($best_ask_size); $best_ask_size = number_format($best_ask_size, 8, '.', '');$bid = floatval ($bid); $bid = number_format($bid, 8, '.', '');$best_bid_size = floatval ($best_bid_size); $best_bid_size = number_format($best_bid_size, 8, '.', '');$open_24h = floatval ($open_24h); $open_24h = number_format($open_24h, 8, '.', '');$high_24h = floatval ($high_24h); $high_24h = number_format($high_24h, 8, '.', '');$low_24h = floatval ($low_24h); $low_24h = number_format($low_24h, 8, '.', '');$base_volume_24h = floatval ($base_volume_24h); $base_volume_24h = number_format($base_volume_24h, 8, '.', '');$quote_volume_24h = floatval ($quote_volume_24h); $quote_volume_24h = number_format($quote_volume_24h, 8, '.', '');
		$sql = mysqli_query($connection, "SELECT MAX(id) FROM MOEDAS") or die(mysqli_error($connection));
		while($aux = mysqli_fetch_assoc($sql)) {$id = $aux["MAX(id)"] + 1;}
		$sql = "INSERT INTO MOEDAS (id, best_ask, best_bid, instrument_id, product_id, last, last_qty, ask, best_ask_size, bid, best_bid_size, open_24h, high_24h, low_24h, base_volume_24h, quote_volume_24h, timestamp)
		VALUES ($id, $best_ask, $best_bid, '$instrument_id', '$product_id', $last, $last_qty, $ask, $best_ask_size, $bid, $best_bid_size, $open_24h, $high_24h, $low_24h, $base_volume_24h, $quote_volume_24h, '$timestamp')";
		mysqli_query($connection, $sql);
    }
    if ($contador == 50000000) {
		$url = "https://www.okex.com/api/spot/v3/instruments/BSV-USDT/ticker";
		$ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$moeda = json_decode(curl_exec($ch));  
		$instrument_id = $moeda->instrument_id;$product_id = $moeda->product_id;$timestamp = date("Y-m-d H:i:s");$best_ask = $moeda->best_ask;$best_bid = $moeda->best_bid;$last = $moeda->last;$last_qty = $moeda->last_qty;$ask = $moeda->ask;$best_ask_size = $moeda->best_ask_size;$bid = $moeda->bid;$best_bid_size = $moeda->best_bid_size;$open_24h = $moeda->open_24h;$high_24h = $moeda->high_24h;$low_24h = $moeda->low_24h;$base_volume_24h = $moeda->base_volume_24h;$quote_volume_24h = $moeda->quote_volume_24h ;
		$best_ask = floatval ($best_ask); $best_ask = number_format($best_ask, 8, '.', '');$best_bid = floatval ($best_bid); $best_bid = number_format($best_bid, 8, '.', '');$last = floatval ($last); $last = number_format($last, 8, '.', '');$last_qty = floatval ($last_qty); $last_qty = number_format($last_qty, 8, '.', '');$ask = floatval ($ask); $ask = number_format($ask, 8, '.', '');$best_ask_size = floatval ($best_ask_size); $best_ask_size = number_format($best_ask_size, 8, '.', '');$bid = floatval ($bid); $bid = number_format($bid, 8, '.', '');$best_bid_size = floatval ($best_bid_size); $best_bid_size = number_format($best_bid_size, 8, '.', '');$open_24h = floatval ($open_24h); $open_24h = number_format($open_24h, 8, '.', '');$high_24h = floatval ($high_24h); $high_24h = number_format($high_24h, 8, '.', '');$low_24h = floatval ($low_24h); $low_24h = number_format($low_24h, 8, '.', '');$base_volume_24h = floatval ($base_volume_24h); $base_volume_24h = number_format($base_volume_24h, 8, '.', '');$quote_volume_24h = floatval ($quote_volume_24h); $quote_volume_24h = number_format($quote_volume_24h, 8, '.', '');
		$sql = mysqli_query($connection, "SELECT MAX(id) FROM MOEDAS") or die(mysqli_error($connection));
		while($aux = mysqli_fetch_assoc($sql)) {$id = $aux["MAX(id)"] + 1;}
		$sql = "INSERT INTO MOEDAS (id, best_ask, best_bid, instrument_id, product_id, last, last_qty, ask, best_ask_size, bid, best_bid_size, open_24h, high_24h, low_24h, base_volume_24h, quote_volume_24h, timestamp)
		VALUES ($id, $best_ask, $best_bid, '$instrument_id', '$product_id', $last, $last_qty, $ask, $best_ask_size, $bid, $best_bid_size, $open_24h, $high_24h, $low_24h, $base_volume_24h, $quote_volume_24h, '$timestamp')";
		mysqli_query($connection, $sql);
    }
    if ($contador == 60000000) {
		$url = "https://www.okex.com/api/spot/v3/instruments/LTC-USDT/ticker";
		$ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$moeda = json_decode(curl_exec($ch));  
		$instrument_id = $moeda->instrument_id;$product_id = $moeda->product_id;$timestamp = date("Y-m-d H:i:s");$best_ask = $moeda->best_ask;$best_bid = $moeda->best_bid;$last = $moeda->last;$last_qty = $moeda->last_qty;$ask = $moeda->ask;$best_ask_size = $moeda->best_ask_size;$bid = $moeda->bid;$best_bid_size = $moeda->best_bid_size;$open_24h = $moeda->open_24h;$high_24h = $moeda->high_24h;$low_24h = $moeda->low_24h;$base_volume_24h = $moeda->base_volume_24h;$quote_volume_24h = $moeda->quote_volume_24h ;
		$best_ask = floatval ($best_ask); $best_ask = number_format($best_ask, 8, '.', '');$best_bid = floatval ($best_bid); $best_bid = number_format($best_bid, 8, '.', '');$last = floatval ($last); $last = number_format($last, 8, '.', '');$last_qty = floatval ($last_qty); $last_qty = number_format($last_qty, 8, '.', '');$ask = floatval ($ask); $ask = number_format($ask, 8, '.', '');$best_ask_size = floatval ($best_ask_size); $best_ask_size = number_format($best_ask_size, 8, '.', '');$bid = floatval ($bid); $bid = number_format($bid, 8, '.', '');$best_bid_size = floatval ($best_bid_size); $best_bid_size = number_format($best_bid_size, 8, '.', '');$open_24h = floatval ($open_24h); $open_24h = number_format($open_24h, 8, '.', '');$high_24h = floatval ($high_24h); $high_24h = number_format($high_24h, 8, '.', '');$low_24h = floatval ($low_24h); $low_24h = number_format($low_24h, 8, '.', '');$base_volume_24h = floatval ($base_volume_24h); $base_volume_24h = number_format($base_volume_24h, 8, '.', '');$quote_volume_24h = floatval ($quote_volume_24h); $quote_volume_24h = number_format($quote_volume_24h, 8, '.', '');
		$sql = mysqli_query($connection, "SELECT MAX(id) FROM MOEDAS") or die(mysqli_error($connection));
		while($aux = mysqli_fetch_assoc($sql)) {$id = $aux["MAX(id)"] + 1;}
		$sql = "INSERT INTO MOEDAS (id, best_ask, best_bid, instrument_id, product_id, last, last_qty, ask, best_ask_size, bid, best_bid_size, open_24h, high_24h, low_24h, base_volume_24h, quote_volume_24h, timestamp)
		VALUES ($id, $best_ask, $best_bid, '$instrument_id', '$product_id', $last, $last_qty, $ask, $best_ask_size, $bid, $best_bid_size, $open_24h, $high_24h, $low_24h, $base_volume_24h, $quote_volume_24h, '$timestamp')";
		mysqli_query($connection, $sql);
    }
    if ($contador == 70000000) {
		$url = "https://www.okex.com/api/spot/v3/instruments/ADA-USDT/ticker";
		$ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$moeda = json_decode(curl_exec($ch));  
		$instrument_id = $moeda->instrument_id;$product_id = $moeda->product_id;$timestamp = date("Y-m-d H:i:s");$best_ask = $moeda->best_ask;$best_bid = $moeda->best_bid;$last = $moeda->last;$last_qty = $moeda->last_qty;$ask = $moeda->ask;$best_ask_size = $moeda->best_ask_size;$bid = $moeda->bid;$best_bid_size = $moeda->best_bid_size;$open_24h = $moeda->open_24h;$high_24h = $moeda->high_24h;$low_24h = $moeda->low_24h;$base_volume_24h = $moeda->base_volume_24h;$quote_volume_24h = $moeda->quote_volume_24h ;
		$best_ask = floatval ($best_ask); $best_ask = number_format($best_ask, 8, '.', '');$best_bid = floatval ($best_bid); $best_bid = number_format($best_bid, 8, '.', '');$last = floatval ($last); $last = number_format($last, 8, '.', '');$last_qty = floatval ($last_qty); $last_qty = number_format($last_qty, 8, '.', '');$ask = floatval ($ask); $ask = number_format($ask, 8, '.', '');$best_ask_size = floatval ($best_ask_size); $best_ask_size = number_format($best_ask_size, 8, '.', '');$bid = floatval ($bid); $bid = number_format($bid, 8, '.', '');$best_bid_size = floatval ($best_bid_size); $best_bid_size = number_format($best_bid_size, 8, '.', '');$open_24h = floatval ($open_24h); $open_24h = number_format($open_24h, 8, '.', '');$high_24h = floatval ($high_24h); $high_24h = number_format($high_24h, 8, '.', '');$low_24h = floatval ($low_24h); $low_24h = number_format($low_24h, 8, '.', '');$base_volume_24h = floatval ($base_volume_24h); $base_volume_24h = number_format($base_volume_24h, 8, '.', '');$quote_volume_24h = floatval ($quote_volume_24h); $quote_volume_24h = number_format($quote_volume_24h, 8, '.', '');
		$sql = mysqli_query($connection, "SELECT MAX(id) FROM MOEDAS") or die(mysqli_error($connection));
		while($aux = mysqli_fetch_assoc($sql)) {$id = $aux["MAX(id)"] + 1;}
		$sql = "INSERT INTO MOEDAS (id, best_ask, best_bid, instrument_id, product_id, last, last_qty, ask, best_ask_size, bid, best_bid_size, open_24h, high_24h, low_24h, base_volume_24h, quote_volume_24h, timestamp)
		VALUES ($id, $best_ask, $best_bid, '$instrument_id', '$product_id', $last, $last_qty, $ask, $best_ask_size, $bid, $best_bid_size, $open_24h, $high_24h, $low_24h, $base_volume_24h, $quote_volume_24h, '$timestamp')";
		mysqli_query($connection, $sql);
    }
    if ($contador == 80000000) {
		$url = "https://www.okex.com/api/spot/v3/instruments/EOS-USDT/ticker";
		$ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$moeda = json_decode(curl_exec($ch));  
		$instrument_id = $moeda->instrument_id;$product_id = $moeda->product_id;$timestamp = date("Y-m-d H:i:s");$best_ask = $moeda->best_ask;$best_bid = $moeda->best_bid;$last = $moeda->last;$last_qty = $moeda->last_qty;$ask = $moeda->ask;$best_ask_size = $moeda->best_ask_size;$bid = $moeda->bid;$best_bid_size = $moeda->best_bid_size;$open_24h = $moeda->open_24h;$high_24h = $moeda->high_24h;$low_24h = $moeda->low_24h;$base_volume_24h = $moeda->base_volume_24h;$quote_volume_24h = $moeda->quote_volume_24h ;
		$best_ask = floatval ($best_ask); $best_ask = number_format($best_ask, 8, '.', '');$best_bid = floatval ($best_bid); $best_bid = number_format($best_bid, 8, '.', '');$last = floatval ($last); $last = number_format($last, 8, '.', '');$last_qty = floatval ($last_qty); $last_qty = number_format($last_qty, 8, '.', '');$ask = floatval ($ask); $ask = number_format($ask, 8, '.', '');$best_ask_size = floatval ($best_ask_size); $best_ask_size = number_format($best_ask_size, 8, '.', '');$bid = floatval ($bid); $bid = number_format($bid, 8, '.', '');$best_bid_size = floatval ($best_bid_size); $best_bid_size = number_format($best_bid_size, 8, '.', '');$open_24h = floatval ($open_24h); $open_24h = number_format($open_24h, 8, '.', '');$high_24h = floatval ($high_24h); $high_24h = number_format($high_24h, 8, '.', '');$low_24h = floatval ($low_24h); $low_24h = number_format($low_24h, 8, '.', '');$base_volume_24h = floatval ($base_volume_24h); $base_volume_24h = number_format($base_volume_24h, 8, '.', '');$quote_volume_24h = floatval ($quote_volume_24h); $quote_volume_24h = number_format($quote_volume_24h, 8, '.', '');
		$sql = mysqli_query($connection, "SELECT MAX(id) FROM MOEDAS") or die(mysqli_error($connection));
		while($aux = mysqli_fetch_assoc($sql)) {$id = $aux["MAX(id)"] + 1;}
		$sql = "INSERT INTO MOEDAS (id, best_ask, best_bid, instrument_id, product_id, last, last_qty, ask, best_ask_size, bid, best_bid_size, open_24h, high_24h, low_24h, base_volume_24h, quote_volume_24h, timestamp)
		VALUES ($id, $best_ask, $best_bid, '$instrument_id', '$product_id', $last, $last_qty, $ask, $best_ask_size, $bid, $best_bid_size, $open_24h, $high_24h, $low_24h, $base_volume_24h, $quote_volume_24h, '$timestamp')";
		mysqli_query($connection, $sql);
    }
    if ($contador == 90000000) {
		$url = "https://www.okex.com/api/spot/v3/instruments/XTZ-USDT/ticker";
		$ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$moeda = json_decode(curl_exec($ch));  
		$instrument_id = $moeda->instrument_id;$product_id = $moeda->product_id;$timestamp = date("Y-m-d H:i:s");$best_ask = $moeda->best_ask;$best_bid = $moeda->best_bid;$last = $moeda->last;$last_qty = $moeda->last_qty;$ask = $moeda->ask;$best_ask_size = $moeda->best_ask_size;$bid = $moeda->bid;$best_bid_size = $moeda->best_bid_size;$open_24h = $moeda->open_24h;$high_24h = $moeda->high_24h;$low_24h = $moeda->low_24h;$base_volume_24h = $moeda->base_volume_24h;$quote_volume_24h = $moeda->quote_volume_24h ;
		$best_ask = floatval ($best_ask); $best_ask = number_format($best_ask, 8, '.', '');$best_bid = floatval ($best_bid); $best_bid = number_format($best_bid, 8, '.', '');$last = floatval ($last); $last = number_format($last, 8, '.', '');$last_qty = floatval ($last_qty); $last_qty = number_format($last_qty, 8, '.', '');$ask = floatval ($ask); $ask = number_format($ask, 8, '.', '');$best_ask_size = floatval ($best_ask_size); $best_ask_size = number_format($best_ask_size, 8, '.', '');$bid = floatval ($bid); $bid = number_format($bid, 8, '.', '');$best_bid_size = floatval ($best_bid_size); $best_bid_size = number_format($best_bid_size, 8, '.', '');$open_24h = floatval ($open_24h); $open_24h = number_format($open_24h, 8, '.', '');$high_24h = floatval ($high_24h); $high_24h = number_format($high_24h, 8, '.', '');$low_24h = floatval ($low_24h); $low_24h = number_format($low_24h, 8, '.', '');$base_volume_24h = floatval ($base_volume_24h); $base_volume_24h = number_format($base_volume_24h, 8, '.', '');$quote_volume_24h = floatval ($quote_volume_24h); $quote_volume_24h = number_format($quote_volume_24h, 8, '.', '');
		$sql = mysqli_query($connection, "SELECT MAX(id) FROM MOEDAS") or die(mysqli_error($connection));
		while($aux = mysqli_fetch_assoc($sql)) {$id = $aux["MAX(id)"] + 1;}
		$sql = "INSERT INTO MOEDAS (id, best_ask, best_bid, instrument_id, product_id, last, last_qty, ask, best_ask_size, bid, best_bid_size, open_24h, high_24h, low_24h, base_volume_24h, quote_volume_24h, timestamp)
		VALUES ($id, $best_ask, $best_bid, '$instrument_id', '$product_id', $last, $last_qty, $ask, $best_ask_size, $bid, $best_bid_size, $open_24h, $high_24h, $low_24h, $base_volume_24h, $quote_volume_24h, '$timestamp')";
		mysqli_query($connection, $sql);
    }
    if ($contador == 10000000) {
		$url = "https://www.okex.com/api/spot/v3/instruments/LINK-USDT/ticker";
		$ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$moeda = json_decode(curl_exec($ch));  
		$instrument_id = $moeda->instrument_id;$product_id = $moeda->product_id;$timestamp = date("Y-m-d H:i:s");$best_ask = $moeda->best_ask;$best_bid = $moeda->best_bid;$last = $moeda->last;$last_qty = $moeda->last_qty;$ask = $moeda->ask;$best_ask_size = $moeda->best_ask_size;$bid = $moeda->bid;$best_bid_size = $moeda->best_bid_size;$open_24h = $moeda->open_24h;$high_24h = $moeda->high_24h;$low_24h = $moeda->low_24h;$base_volume_24h = $moeda->base_volume_24h;$quote_volume_24h = $moeda->quote_volume_24h ;
		$best_ask = floatval ($best_ask); $best_ask = number_format($best_ask, 8, '.', '');$best_bid = floatval ($best_bid); $best_bid = number_format($best_bid, 8, '.', '');$last = floatval ($last); $last = number_format($last, 8, '.', '');$last_qty = floatval ($last_qty); $last_qty = number_format($last_qty, 8, '.', '');$ask = floatval ($ask); $ask = number_format($ask, 8, '.', '');$best_ask_size = floatval ($best_ask_size); $best_ask_size = number_format($best_ask_size, 8, '.', '');$bid = floatval ($bid); $bid = number_format($bid, 8, '.', '');$best_bid_size = floatval ($best_bid_size); $best_bid_size = number_format($best_bid_size, 8, '.', '');$open_24h = floatval ($open_24h); $open_24h = number_format($open_24h, 8, '.', '');$high_24h = floatval ($high_24h); $high_24h = number_format($high_24h, 8, '.', '');$low_24h = floatval ($low_24h); $low_24h = number_format($low_24h, 8, '.', '');$base_volume_24h = floatval ($base_volume_24h); $base_volume_24h = number_format($base_volume_24h, 8, '.', '');$quote_volume_24h = floatval ($quote_volume_24h); $quote_volume_24h = number_format($quote_volume_24h, 8, '.', '');
		$sql = mysqli_query($connection, "SELECT MAX(id) FROM MOEDAS") or die(mysqli_error($connection));
		while($aux = mysqli_fetch_assoc($sql)) {$id = $aux["MAX(id)"] + 1;}
		$sql = "INSERT INTO MOEDAS (id, best_ask, best_bid, instrument_id, product_id, last, last_qty, ask, best_ask_size, bid, best_bid_size, open_24h, high_24h, low_24h, base_volume_24h, quote_volume_24h, timestamp)
		VALUES ($id, $best_ask, $best_bid, '$instrument_id', '$product_id', $last, $last_qty, $ask, $best_ask_size, $bid, $best_bid_size, $open_24h, $high_24h, $low_24h, $base_volume_24h, $quote_volume_24h, '$timestamp')";
		mysqli_query($connection, $sql);
    }

    $contador++;
}

Shell_exec("/usr/bin/php  /var/www/html/okex/okex_compra.php '".$id."' 'alert' >> /var/www/html/okex/log_okex_compra &");

//Fechando a conexão com o banco de dados
mysqli_close($connection);
?>