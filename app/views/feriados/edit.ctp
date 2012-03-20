<?php if (!empty($this->validationErrors)) { ?>
    <div class="box">  
        <div class="flash_error">        
            <?php echo $this->Html->image('test-fail-icon.png', array('alt' => 'flash_error')) ?>   
            <?php echo "Existen errores en la forma corrigalos antes de continuar" ?>
        </div>
    </div>
<?php } ?>
<div class="box">
    <div class="title"><h2>Modificar Feriado</h2>
        <?php echo $this->Html->image("title-hide.gif", array('class' => 'toggle')); ?>
    </div>
    <div class="content form">
        <?php
        echo $this->Form->create('Feriado');
        echo $this->Form->input('id', array('type' => 'hidden'));
        echo "<div class='row'>";
        echo "<div style='float:left;width:20%'>";
        echo $this->Form->label('Dia Feriado');
        echo $this->Form->input('FECHA', array('type' => 'text', 'div' => false, 'label' => false, 'class' => 'datepicker dp-applied')) . "</br>";
        echo "</div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div style='float:left;width:25%'>";
        echo $this->Form->label('Breve Descripcion');
        echo $this->Form->input('DESCRIPCION', array('div' => false, 'label' => false, 'class' => 'medium'));
        echo "</div>";
        echo "</div>";                        
        ?>
    </div>
</div>

<div class="box">
    <div class="title"><h2>Acciones</h2>
        <?php echo $this->Html->image("title-hide.gif", array('class' => 'toggle')); ?>
    </div>
    <div class="content form">
        <div class="row">
            <?php echo $this->Form->end(__('Modificar', true)); ?>

        </div>
    </div>
</div>
