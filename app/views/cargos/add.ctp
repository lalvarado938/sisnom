<div class="box">
    <div class="title"><h2>Datos del Cargo</h2>
        <?php echo $this->Html->image("title-hide.gif", array('class' => 'toggle')); ?>
    </div>
    <div class="content form">
        <?php
        echo $this->Form->create('Cargo');
        echo "<div class='row'>";
        echo "<div style='float:left;width:25%'>";
        echo $this->Form->label('Nombre');
        echo $this->Form->input('NOMBRE', array('div' => false, 'label' => false, 'class' => 'medium'));
        echo "</div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div style='float:left;width:25%'>";
        echo $this->Form->label('Breve Descripcion');
        echo $this->Form->input('DESCRIPCION', array('div' => false, 'label' => false, 'class' => 'medium'));
        echo "</div>";
        echo "</div>";        
        echo "<div class='row'>";
        echo "<div class='row'>";
        echo "<div style='float:left;width:25%'>";
        echo $this->Form->label('Sueldo');
        echo $this->Form->input('Sueldos.SUELDO_BASE', array('div' => false, 'label' => false, 'class' => 'medium'));
        echo "</div>";
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
            <?php echo $this->Form->end(__('Agregar Cargo', true)); ?>

        </div>
    </div>
</div>