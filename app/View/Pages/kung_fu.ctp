<?php
$imagePrefix = $this->webroot;
?>
<script>
    function run(animal) {
        alert(animal);
    }
</script>

<div id="five_animals" style="width:100%; clear:both; height: 100px;">

    <div id="dragon" onclick="run('dragon')" class="kungfuAnim">&nbsp;</div>
    <div id="leopard" onclick="run('dragon')" class="kungfuAnim"></div>
    <div id="crane" onclick="run('dragon')"  class="kungfuAnim"></div>
    <div id="snake" onclick="run('dragon')"  class="kungfuAnim"></div>
    <div id="tiger" onclick="run('dragon')"  class="kungfuAnim"></div>

    <div id="explanation"></div>
</div>