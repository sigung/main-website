<script type="text/javascript">
    function toggleAnimals() {
        if ($('#animals').is(":visible")) {
            $('#animals').hide();
        }
        else {
            $('#animals').show();
        }
    }
</script>
<div class="manuals index">
    <h3 style="clear:none;margin-top:0px;">Record</h3>
    <div style="float:right;">
        <?php echo $this->Html->link( "Back Home", array('controller'=>'users', 'action'=>'user_home'),array('escape' => false) ); ?>
    </div>

    <ul>
        <li>
            Journal
        </li>
        <li>
            <a href="#" onclick="toggleAnimals()">Animal Techniques</a>
            <div style="display:none;" id="animals">
                <?php echo $this->Form->create('AnimalTechnique', array('url'=>'/students/addTechnique')); ?>
                <?php echo $this->Form->input('user_id', array('type'=>'hidden', 'value'=>AuthComponent::user('id'))); ?>
                <table id="pattern-style-b">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Thoughts</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($techniques as $technique): ?>
                        <tr>
                            <td><?php echo $technique['AnimalTechnique']['name']; ?></td>
                            <td><?php echo $technique['AnimalTechnique']['description']; ?></td>
                            <td><?php echo $technique['AnimalTechnique']['thoughts']; ?></td>
                            <td></td>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td><?php echo $this->Form->input('name', array('label'=>'', 'style'=>'width:200px')); ?></td>
                            <td><?php echo $this->Form->textarea('description', array('type'=>'text', 'label'=>'', 'style'=>'width:420px;'));?></td>
                            <td><?php echo $this->Form->textarea('thoughts', array('type'=>'text', 'label'=>'', 'style'=>'width:300px;'));?></td>
                            <td><?php echo $this->Form->end(__('Add')); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </li>
        <li>
            Questions
        </li>
    </ul>
</div>