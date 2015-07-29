<div class="content">
    <table class="account">
        <tr><th>Concepto</th><th>Fecha</th><th>Debe</th><th>Haber</th></tr>
        <?php
        if($movements=='') {
        ?>
            <tr><td colspan="4">No hay movimientos recientes</td></tr>
        <?php
        }else{
            foreach($movements as $row) {
                $date = strtotime($row->cc_fecha);
                $date = getdate($date);
                $date = $date['mday'] . '/' . $date['mon'] . '/' . $date['year'];
                ?>
                <tr class="<?php if($row->cc_debe > 0){ echo "debe"; }else{ echo "habe";}?>"><td><?php echo $row->cc_conce?></td><td><?php echo $date?></td><td><?php echo number_format($row->cc_debe,2,',','.')?></td><td><?php echo number_format($row->cc_habe,2,',','.')?></td></tr>
                <?php
            }?>
            <tr>
                <td colspan="2" rowspan="1">
                    TOTALES
                </td>
                <td>
                    <?php echo number_format($totals->cc_debe,2,',','.')?>
                </td>
                <td>
                    <?php echo number_format($totals->cc_habe,2,',','.')?>
                </td>
        </tr>
        <tr>
            <td style="border-right:none;"></td>
            <td style="border-left:none;">
                SALDO
            </td>
            <td colspan="2">
                <?php 
                $total = $totals->cc_debe - $totals->cc_habe;
                echo number_format($total, 2, ',','.');
                ?>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>