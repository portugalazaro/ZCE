<?php echo 'tag padrao do php' ."\n"; ?>
<?= 'tag curta de echo do php' . "\n";?>
<!--
    funciona somente se no arquivoo php.init na linha, short_open_tag estiver habilitada:
    short_open_tag = On 
    <? echo  'tag curto do php';?>
 -->

<p>Isto vai ser ignorado pelo PHP e exibido pelo navegador.</p>
<?= "Isso vai ser interpretado pelo php <br><br>". PHP_EOL ?>

<?php $expression = true; ?>

<?php if ($expression == true): ?>
  Isto irá aparecer se a expressão for verdadeira.
<?php else: ?>
  Senão isso que aparecerá.
<?php endif; ?>

<?= "<br>"?>

<p<?php if ($highlight): ?> class="highlight"<?php endif;?>>This is a paragraph.</p>

<?php

/* Observe como o código PHP está embutido no meio de uma tag de abertura HTML. 
O analisador PHP não se importa se está no meio de uma tag de abertura e não exige que seja fechado. 
Também não importa que após o fechamento ?> 
tag é o final da tag de abertura HTML. Portanto, se $highlight for verdadeiro, a saída será:

    <p class="highlight">This is a paragraph.</p>

*/
