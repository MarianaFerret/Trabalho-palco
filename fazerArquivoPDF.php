<?php

require_once __DIR__ . '/dompdf/autoload.inc.php';
require_once __DIR__ . '/conectar.php';

use Dompdf\Dompdf;


$sql = "select vendas.*, shows.titulo from vendas inner join shows on vendas.show_id = shows.id_show order by vendas.id";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
// cria a tebela
$html = '
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    body  { font-family: Helvetica, sans-serif; font-size: 11px; color: #263238; }
    h1    { text-align: center; font-size: 18px; margin-bottom: 15px; }
    table { width: 100%; border-collapse: collapse; background: #ffffff; text-align: left; }
    th    { padding: 10px; background: #eceff1; border-bottom: 1px solid #cfd8dc;
            font-weight: normal; color: #546e7a; }
    td    { padding: 10px; border-bottom: 1px solid #eceff1; }
    tr    { page-break-inside: avoid; }
</style>
<h1>RELATÓRIO DE VENDAS</h1>
<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Show</th>
            <th>Comprador</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Qtd</th>
            <th>Total</th>
            <th>Data</th>
        </tr>
    </thead>
    <tbody>';

while ($linha = mysqli_fetch_assoc($result)) {
    $html .= '<tr>
        <td>' . $linha['id'] . '</td>
        <td>' . htmlspecialchars($linha['titulo']) . '</td>
        <td>' . htmlspecialchars($linha['nome_comprador']) . '</td>
        <td>' . $linha['cpf'] . '</td>
        <td>' . htmlspecialchars($linha['email']) . '</td>
        <td>' . $linha['qtd_ing'] . '</td>
        <td>R$ ' . number_format($linha['valor_total'], 2, ',', '.') . '</td>
        <td>' . date('d/m/Y', strtotime($linha['data_compra'])) . '</td>
    </tr>';
}

$html .= '</tbody></table>';
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');   // paisagem, porque são 8 colunas
$dompdf->render();
$dompdf->stream('relatorio_vendas.pdf', ['Attachment' => false]);   // true = baixar em vez de abrir