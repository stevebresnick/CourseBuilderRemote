<?php $this->start('sessionpreview'); ?>
<meta charset="utf-8" />
<title><?php echo $section['Course']['title']; ?> Session <?php echo $section['Section']['number']; ?>: <?php echo $section['Section']['title']; ?></title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://facing.mrooms3.net/resources/demos/style.css" />
<script type="text/javascript">// <![CDATA[
    $(function() {
        $("#tabs").tabs();
    });
    // ]]></script>
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Session <?php echo $section['Section']['number']; ?>: <?php echo $section['Section']['title']; ?></a></li>
        <li><a href="#tabs-2">Overview</a></li>
        <li><a href="#tabs-3">Activities (To-Do List)</a></li>
        <li><a href="#tabs-4">Session Resources</a></li>
    </ul>
    <div id="tabs-1">
        <p style="text-align: center;"><em><span style="font-size: small;"><span size="4"><span size="3"><?php echo $section['Section']['quote']; ?></span></span><span size="3"> </span></span></em></p>
        <p style="text-align: center;"><span size="3" style="font-size: small;">--<?php echo $section['Section']['speaker']; ?> <?php echo $section['Section']['year']; ?><br /></span></p>
        <hr />
        <table style="background-color: #fffbd9; border-color: #84817b; border-width: 1px; width: 100%; border-style: solid;" cellpadding="10" align="center" border="1">
            <tbody>
                <tr>
                    <td><img src="http://www.stevebresnick.com/facing_history/coursebuilder/app/webroot/img/sessiontiles/sessiontile<?php echo $section['Section']['number']; ?>.png" width="110" height="110" style="vertical-align: top;"/></td>
                    <td>
                        <h2>Session <?php echo $section['Section']['number']; ?>: <?php echo $section['Section']['title']; ?></h2>
                        <p><span style="font-size: medium;"><?php echo $section['Section']['intro']; ?><br /></span></span></span></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" cellpadding="10" cellspacing="10" align="center" border="0">
            <tbody>
                <tr>
                    <td>
                        <h2><img src="http://stevebresnick.com/facing_history/coursebuilder/app/webroot/img/icons/questions.png" style="vertical-align: middle; margin-left: 10px; margin-right: 10px;" height="40" width="40" />Essential Questions</h2>
                        <p></p>
                        <ul>
                            <?php foreach ($section['EssentialQuestion'] as $question): ?>
                                <li>
                                    <p><span style="font-size: medium;"><?php echo $question['question']; ?></span></p>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <p><span size="2" style="font-size: small;"> </span></p>
                    </td>
                    <td><img src="http://stevebresnick.com/facing_history/coursebuilder/app/webroot/img/scopeandsequence/scope<?php echo $section['Scope']['id']; ?>.png" width="211" height="194" style="display: block; margin-left: auto; margin-right: auto;"/></td>                </tr>
            </tbody>
        </table>
    </div>
    <div id="tabs-2">
        <p></p>
        <hr style="width: 100%; height: 2px;" />
        <p><span style="font-weight: bold; font-size: large;" size="4"><span style="color: #0000ff;"><br /><span style="font-family: arial,helvetica,sans-serif; color: #000099; font-size: medium;" size="3">[PLACEHOLDER FOR OPTIONAL SECONDARY SESSION QUOTE]</span></span></span><span style="font-family: arial,helvetica,sans-serif; font-size: medium;" size="3"> <span style="font-weight: bold;">--[PLACEHOLDER FOR SECONDARY SESSION QUOTE SPEAKER]</span></span><span style="font-size: large;" size="4"><span style="font-family: arial,helvetica,sans-serif; font-weight: bold; font-size: medium;" size="3"><span style="color: #0000ff;"></span></span><br /></span></p>
        <div style="margin-left: 200px;"></div>
        <hr style="width: 100%; height: 2px;" />
        <table class="choicesshadow" style="margin: 10px 20px; width: 315px;" cellpadding="10" cellspacing="10" align="right" border="0">
            <tbody>
                <tr style="background: #58a796;">
                    <td>
                        <h2 style="text-align: center;"><span style="font-size: medium;"><img src="http://stevebresnick.com/facing_history/coursebuilder/app/webroot/img/icons/icon11.png" style="margin-left: 10px; margin-right: 10px; vertical-align: middle; float: left;" height="41" width="40" /><span style="color: #ffffff;">[PLACEHOLDER FOR SESSION VIDEO]</span></span></h2>
                    </td>
                </tr>
                <tr style="background: #fffbd9;"> <!---START VIDEO WRAPPER------>
                    <td><!-- Start of Brightcove Player -->
                        <div style="display: none;"></div>
                        <!--
                        By use of this code snippet, I agree to the Brightcove Publisher T and C 
                        found at https://accounts.brightcove.com/en/terms-and-conditions/. 
                        -->
                        <script src="http://admin.brightcove.com/js/BrightcoveExperiences.js" type="text/javascript"></script>
                        <object id="myExperience2686042344001" class="BrightcoveExperience"><param name="bgcolor" value="#FFFFFF" /><param name="width" value="310" /><param name="height" value="174" /><param name="playerID" value="2210701511001" /><param name="playerKey" value="AQ~~,AAABYEdBaAk~,1dGnVytVBSyAcRv2ttkHUilGtqLWHavw" /><param name="isVid" value="true" /><param name="isUI" value="true" /><param name="dynamicStreaming" value="true" /><param name="@videoPlayer" value="2686042344001" /></object> <!-- 
                        This script tag will cause the Brightcove Players defined above it to be created as soon
                        as the line is read by the browser. If you wish to have the player instantiated only after
                        the rest of the HTML is processed and the page load is complete, remove the line.
                        -->
                        <script type="text/javascript">// <![CDATA[
    brightcove.createExperiences();
    // ]]></script>
                        <!-- End of Brightcove Player -->
                        <p style="text-align: center;"><span style="font-size: x-small;"><em>Facing History Scholar Reflection: Scholar Paul Bookbinder providers historical contexts for this session on the Holocaust</em></span></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php foreach ($section['Overview'] as $overview): ?>
            <p><span style="font-size: medium;"><?php echo $overview['paragraph']; ?></span><br /><span style="font-size: small;" size="2"></span></p>
        <?php endforeach; ?>
    </div>
    <div id="tabs-3">
        <table style="width: 100%;" cellpadding="10" cellspacing="10" align="center" border="0">
            <tbody>
                <tr  style="background: #58a796;">
                    <td>
                        <h2 style="color: #ffffff;">Session <?php echo $section['Section']['number']; ?> Activities</h2>
                    </td>
                </tr>

                <!-----ROW----->

                <tr>
                    <td>
                        <?php foreach ($section['Activity'] as $activity): ?>
                            <table style="border:2px solid #58a796; margin: 10px 10px 10px 10px; padding: 10px 15px 10px 15px; width: 90%;">
                                <tbody>
                                    <tr>
                                        <td>                                      
                                            <h2 style="margin-left: 50px;">
                                                <img src="http://stevebresnick.com/facing_history/coursebuilder/app/webroot/img/icons/icon<?php echo $activity['type_id']; ?>.png" style="margin-left: -50px; margin-right: 40px; float: left;" height="40" width="40" />
                                                <?php echo $activity['title']; ?>
                                            </h2>                                         
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="color:#58a796;" align="left"><span style="font-size:large;"><strong>Activity Introduction:</strong></span></p>
                                            <p style="display: block;"><span style="font-size:medium;"><?php echo $activity['introbrief']; ?></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-top:20px;">
                                            <p style="color:#58a796;" align="left"><span style="font-size:large;"><strong>Activity Procedure:</strong></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <ol>
                                            <?php foreach ($activity['Step'] as $step):?>
                                                <li style="margin-top: 1.6em;"><?php echo $step['procedureStep'];?></li>
                                            <?php endforeach;?>
                                            </ol>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="<?php echo $activity['url'];?>">Click Here to Enter Activity</a>
                                        </td>
                                    </tr>
                                </tbody>                            
                            </table>
                        <?php endforeach; ?>
                    </td>   
                </tr>
            </tbody>
        </table>
    </div>
    <div id="tabs-4">
        <table style="width: 100%;" cellpadding="10" cellspacing="10" align="center" border="0">
            <tbody>
                <tr  style="background: #58a796;">
                    <td>
                        <h2 style="color: #ffffff;">Session <?php echo $section['Section']['number']; ?> Activity Resources</h2>
                    </td>
                </tr>
                <?php foreach ($section['Activity'] as $activity): ?>
                    <tr>
                        <td>
                            <h3>
                                <?php echo $activity['title']; ?>
                            </h3>
                            <?php foreach ($activity['Resource'] as $resource):?>
                            <table  style="margin: 5px 0 5px 0; border: 1px solid #58a796; padding: 10px; background:#fffbd9; width:100%;">
                                <tbody>
                                    <tr>
                                        <td style="vertical-align: top;">
                                           <p><img style="float:left; margin:0 10px 10px 0;" src="http://stevebresnick.com/facing_history/coursebuilder/app/webroot/img/icons/icon<?php echo $resource['type_id']; ?>.png" height="20" width="20" />
                                            <span style="font-size: medium;"><span style="color:#8d2422;"><strong><?php echo $this->Html->link($resource['title'], $resource['path'], array('target' => 'blank')); ?></strong></span>: <?php echo $resource['description']; ?> </span></p> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <?php endforeach;?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr  style="background: #58a796;">
                    <td>
                        <h2 style="color: #ffffff;">Session <?php echo $section['Section']['number']; ?> Additional Resources</h2>
                    </td>
                </tr>
                <?php foreach ($section['Resource'] as $sessionresource): ?>
                    <tr>
                        <td>
                            <table  style="margin: 5px 0 5px 0; border: 1px solid #58a796; padding: 10px; background:#fffbd9; width:100%;">
                                <tbody>
                                    <tr>
                                        <td style="vertical-align: top;">
                                           <p><img style="float:left; margin:0 10px 10px 0;" src="http://stevebresnick.com/facing_history/coursebuilder/app/webroot/img/icons/icon<?php echo $sessionresource['type_id']; ?>.png" height="20" width="20" />
                                            <span style="font-size: medium;"><span style="color:#8d2422;"><strong><?php echo $this->Html->link($sessionresource['title'], $sessionresource['path'], array('target' => 'blank')); ?></strong></span>: <?php echo $sessionresource['description']; ?> </span></p> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $this->end(); ?>
                
