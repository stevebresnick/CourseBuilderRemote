<?php $this->start('activitypreview'); ?>
<meta charset="utf-8" />
<title><?php echo $activity['Activity']['title']; ?></title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://facing.mrooms3.net/resources/demos/style.css" />
<table style="width: 100%; background: #58a796; border: 3px solid #fffbd9;">
    <tbody>
        <tr>
            <td style="width: 80px; height:80px; padding: 10px;">
                <p align="middle">
                    <img src="http://www.stevebresnick.com/facing_history/coursebuilder/app/img/icons/icon<?php echo $activity['Activity']['type_id']; ?>.png" width="40" height="40"/>
                </p>
                <p align="middle"><span style="font-size: small; color:#ffffff;">
                        <?php echo $activity['Type']['type']; ?> Activity
                    </span>
                </p>
            </td>
            <td>
                <h2 style="margin-left: 20px; color:#ffffff;text-align: center; vertical-align: middle;"><span size="2"><?php echo $activity['Activity']['title']; ?></span></h2>
            </td>
        </tr>
    </tbody>
</table>
<table style="width: 100%; background:#fffbd9; padding: 20px 20px 10px 15px;">
    <tbody>
        <tr>
            <td>
                <table style="margin-bottom: 20px; width:90%;">
                    <tbody>
                        <tr>
                            <td>
                                <p style="text-align: center;">
                                    <span size="2">
                                        <img src="<?php echo $activity['Activity']['image']; ?>" style="margin: 0px 30px 10px 10px; float: left;" class="choicesshadow" height="195" width="250" />
                                    </span>
                                </p>
                            </td>
                            <td style="vertical-align: top;">
                                <p style="font-size: larger">
                                    <strong>Activity Overview:</strong>
                                </p>
                                <p style="font-size: large;">
                                    <?php echo $activity['Activity']['introbrief']; ?>
                                </p>
                                <p style="font-size: large;">
                                    <?php echo $activity['Activity']['introdetailed']; ?>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <?php if(!empty($activity['Goal'])):?>
        <tr>
            <td>
                <table style="width:80%; margin-left: auto; margin-right: auto;">
                    <tbody>
                        <tr>
                            <td style=" padding-top: 1.0em;">
                                <h3 style="text-align:center; font-size: larger;">Goals for this Activity:</h3>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 15px 10px 10px 10px;">
                                <ol>
                                    <?php foreach ($activity['Goal'] as $goal): ?>
                                        <li style="margin-top: 15px;"><p style="font-size: large;"><?php echo $goal['goal']; ?></p></li>
                                        <?php endforeach; ?>
                                </ol>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <?php endif;?>
        <tr>
            <td>
                <table style="width:80%; background: #ffffff; border: 1px solid #58a796; margin-left: auto; margin-right: auto;">
                    <tbody>
                        <tr>
                            <td style="background:#58a796; padding-top: 1.0em;">
                                <h3 style="text-align:center; color:#ffffff; font-size: larger;">Activity Procedure:</h3>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 15px 10px 10px 10px;">
                                <ol>
                                    <?php foreach ($activity['Step'] as $step): ?>
                                        <li style="margin-top: 15px;"><p style="font-size: large;"><?php echo $step['procedureStep']; ?></p></li>
                                        <?php endforeach; ?>
                                </ol>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <h3 style="text-align:center; margin-top: 20px; font-size: larger;">Activity Resources:</h3>
            </td>
        </tr>
        <tr>
            <td>
                <?php foreach($activity['Resource'] as $resource):?>
                <table style="width:80%; margin-left: auto; margin-right: auto; background: #ffffff; border: 1px solid #58a796; padding: 10px 20px 10px 20px; margin-top: 10px;">
                    <tbody>
                        <tr>
                            <td>
                                <h3>
                                <img src="http://www.stevebresnick.com/facing_history/coursebuilder/app/img/icons/icon<?php echo $resource['type_id'];?>.png" style="vertical-align: middle; margin-right: 30px; width:25px; height:25px;"/>
                                <?php echo $resource['title'];?></h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <?php echo $resource['description'];?>
                                </p>
                                <p>
                                    <a href="<?php echo $resource['path'];?>" target="_blank">Click here to see resource</a>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php endforeach;?>
            </td>
        </tr>
    </tbody>
</table>
</td>
</tr>
</tbody>
</table>
<?php $this->end(); ?>