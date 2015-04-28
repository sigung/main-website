<?php
class KungFuRank extends AppModel {
    var $hasMany = array('User', 'Skill');
    var $belongsTo = array('RankType');
}
?>