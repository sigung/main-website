<?php
class Skill extends AppModel {
    var $belongsTo = array('SkillType', 'KungFuRank', 'TaiChiRank');
}
?>