<?php
if (!defined('PONMONITOR')){
	die('Hacking attempt!');
}
if(!checkAccess(6)) $go->redirect('main');
$metatags['title'] = $lang['setup_pon'];
$metatags['description'] = $lang['setup'];
$setup .= formpage(['img'=>'addconnect.png','name'=>$lang['cfg_root'],'descr'=>$lang['cfg_root_descr'],'pole'=>'<input style="width:200px;" name="root" class="input1" type="text" value="'.$config['root'].'">']);
$setup .= formpage(['img'=>'www.png','name'=>'URL','descr'=>$lang['cfg_url_descr'],'pole'=>'<input style="width:200px;" name="url" class="input1" type="text" value="'.$config['url'].'">']);
$setup .= formpage(['img'=>'number-20.png','name'=>$lang['cfg_count'],'descr'=>$lang['cfg_count_descr'],'pole'=>'<input style="width:200px;" name="countviewpageonu" class="input1" type="text" value="'.$config['countviewpageonu'].'">']);
$setup .= formpage(['img'=>'font.png','name'=>'Style','descr'=>$lang['cfg_style_descr'],'pole'=>'<input style="width:200px;" name="skin" class="input1" type="text" value="'.$config['skin'].'">']);
$setup .= formpage(['img'=>'api.png','name'=>'API','descr'=>$lang['cfg_api_descr'],'pole'=>'<input style="width:200px;" name="monitorapi" class="input1" type="text" value="'.$config['monitorapi'].'">']);
$setup .= formpage(['img'=>'map.png','name'=>$lang['cfg_geo_lan'],'descr'=>$lang['cfg_geo_lan_descr'],'pole'=>'<input style="width:400px;" name="geo_lan" class="input1" type="text" value="'.$config['geo_lan'].'">']);
$setup .= formpage(['img'=>'map.png','name'=>$lang['cfg_geo_lon'],'descr'=>$lang['cfg_geo_lan_descr'],'pole'=>'<input style="width:400px;" name="geo_lon" class="input1" type="text" value="'.$config['geo_lon'].'">']);
$sel1 .= '<option value="on" '.($config['comment']=='on'?'selected="selected"':'').'>'.($config['comment']=='on'?$lang['ons']:$lang['on']).'</option><option value="off" '.($config['comment']=='off'?'selected="selected"':'').'>'.($config['comment']=='off'?$lang['offs']:$lang['off']).'</option>';
$setup .= formpage(['img'=>'addconnect.png','name'=>$lang['cfg_comm_onu'],'descr'=>$lang['cfg_comm_onu_decr'],'pole'=>'<select class="select" name="comment">'.$sel1.'</select>']);
$sel11 .= '<option value="on" '.($config['viewipswitch']=='on'?'selected="selected"':'').'>'.($config['viewipswitch']=='on'?$lang['ons']:$lang['on']).'</option><option value="off" '.($config['viewipswitch']=='off'?'selected="selected"':'').'>'.($config['viewipswitch']=='off'?$lang['offs']:$lang['off']).'</option>';
$setup .= formpage(['img'=>'eth_na.png','name'=>$lang['cfg_view_ip'],'descr'=>$lang['cfg_view_ip_descr'],'pole'=>'<select class="select" name="viewipswitch">'.$sel11.'</select>']);
$sel0 .= '<option value="on" '.($config['errorport']=='on'?'selected="selected"':'').'>'.($config['errorport']=='on'?$lang['ons']:$lang['on']).'</option><option value="off" '.($config['errorport']=='off'?'selected="selected"':'').'>'.($config['errorport']=='off'?$lang['offs']:$lang['off']).'</option>';
$setup .= formpage(['img'=>'error.png','name'=>$lang['cfg_err_name'],'descr'=>$lang['cfg_err_descr'],'pole'=>'<select class="select" name="errorport">'.$sel0.'</select>']);
$sel10 .= '<option value="on" '.($config['statusport']=='on'?'selected="selected"':'').'>'.($config['statusport']=='on'?$lang['ons']:$lang['on']).'</option><option value="off" '.($config['statusport']=='off'?'selected="selected"':'').'>'.($config['statusport']=='off'?$lang['offs']:$lang['off']).'</option>';
$setup .= formpage(['img'=>'log-format.png','name'=>$lang['cfg_statusport_name'],'descr'=>$lang['cfg_statusport_descr'],'pole'=>'<select class="select" name="statusport">'.$sel10.'</select>']);
$sel2 .= '<option value="on" '.($config['tag']=='on'?'selected="selected"':'').'>'.($config['tag']=='on'?$lang['ons']:$lang['on']).'</option><option value="off" '.($config['tag']=='off'?'selected="selected"':'').'>'.($config['tag']=='off'?$lang['offs']:$lang['off']).'</option>';
$setup .= formpage(['img'=>'m11.png','name'=>'Tag','descr'=>$lang['marker_cfg'],'pole'=>'<select class="select" name="tag">'.$sel2.'</select>']);
$sel3 .= '<option value="on" '.($config['pon']=='on'?'selected="selected"':'').'>'.($config['pon']=='on'?$lang['ons']:$lang['on']).'</option><option value="off" '.($config['pon']=='off'?'selected="selected"':'').'>'.($config['pon']=='off'?$lang['offs']:$lang['off']).'</option>';
$setup .= formpage(['img'=>'technology.png','name'=>'Pon','descr'=>$lang['cfg_pon_descr'],'pole'=>'<select class="select" name="pon">'.$sel3.'</select>']);
$selrx .= '<option value="on" '.($config['onugraph']=='on'?'selected="selected"':'').'>'.($config['onugraph']=='on'?$lang['ons']:$lang['on']).'</option><option value="off" '.($config['onugraph']=='off'?'selected="selected"':'').'>'.($config['onugraph']=='off'?$lang['offs']:$lang['off']).'</option>';
$setup .= formpage(['img'=>'technology.png','name'=>$lang['cfg_rx'],'descr'=>$lang['cfg_pon_onugraph'],'pole'=>'<select class="select" name="onugraph">'.$selrx.'</select>']);
$sel4 .= '<option value="on" '.($config['sklad']=='on'?'selected="selected"':'').'>'.($config['sklad']=='on'?$lang['ons']:$lang['on']).'</option><option value="off" '.($config['sklad']=='off'?'selected="selected"':'').'>'.($config['sklad']=='off'?$lang['offs']:$lang['off']).'</option>';
$setup .= formpage(['img'=>'open-box.png','name'=>$lang['cfg_tmc_sklad'],'descr'=>$lang['cfg_tmc_sklad_descr'],'pole'=>'<select class="select" name="sklad">'.$sel4.'</select>']);
$sel5 .= '<option value="on" '.($config['configport']=='on'?'selected="selected"':'').'>'.($config['configport']=='on'?$lang['ons']:$lang['on']).'</option><option value="off" '.($config['configport']=='off'?'selected="selected"':'').'>'.($config['configport']=='off'?$lang['offs']:$lang['off']).'</option>';
$setup .= formpage(['img'=>'switch.png','name'=>$lang['cfg_port'],'descr'=>$lang['cfg_port_descr'],'pole'=>'<select class="select" name="configport">'.$sel5.'</select>']);
$sel6 .= '<option value="on" '.($config['unit']=='on'?'selected="selected"':'').'>'.($config['unit']=='on'?$lang['ons']:$lang['on']).'</option><option value="off" '.($config['unit']=='off'?'selected="selected"':'').'>'.($config['unit']=='off'?$lang['offs']:$lang['off']).'</option>';
$setup .= formpage(['img'=>'database.png','name'=>$lang['cfg_unit'],'descr'=>$lang['cfg_unit_descr'],'pole'=>'<select class="select" name="unit">'.$sel6.'</select>']);
$sel7 .= '<option value="on" '.($config['telegram']=='on'?'selected="selected"':'').'>'.($config['telegram']=='on'?$lang['ons']:$lang['on']).'</option><option value="off" '.($config['telegram']=='off'?'selected="selected"':'').'>'.($config['telegram']=='off'?$lang['offs']:$lang['off']).'</option>';
$setup .= formpage(['img'=>'telegram.png','name'=>'Telegram','descr'=>$lang['cfg_telegran_sms'],'pole'=>'<select class="select" name="telegram">'.$sel7.'</select>']);
$setup .= formpage(['img'=>'telegramtoken.png','name'=>'Token Telegram','descr'=>$lang['cfg_telegran_token'],'pole'=>'<input style="width:200px;" name="telegramtoken" class="input1" type="text" value="'.$config['telegramtoken'].'">']);
$setup .= formpage(['img'=>'telegramchat.png','name'=>'ChatID Telegram','descr'=>$lang['cfg_telegran_chat'],'pole'=>'<input style="width:200px;" name="telegramchatid" class="input1" type="text" value="'.$config['telegramchatid'].'">']);
$sel8 .= '<option value="on" '.($config['marker']=='on'?'selected="selected"':'').'>'.($config['marker']=='on'?$lang['ons']:$lang['on']).'</option><option value="off" '.($config['marker']=='off'?'selected="selected"':'').'>'.($config['marker']=='off'?$lang['offs']:$lang['off']).'</option>';
$setup .= formpage(['img'=>'tag.png','name'=>'Marker','descr'=>$lang['marker_cfg'],'pole'=>'<select class="select" name="marker">'.$sel8.'</select>']);
$sel9 .= '<option value="on" '.($config['map']=='on'?'selected="selected"':'').'>'.($config['map']=='on'?$lang['ons']:$lang['on']).'</option><option value="off" '.($config['map']=='off'?'selected="selected"':'').'>'.($config['map']=='off'?$lang['offs']:$lang['off']).'</option>';
$setup .= formpage(['img'=>'m6.png','name'=>$lang['map'],'descr'=>$lang['map_cfg'],'pole'=>'<select class="select" name="map">'.$sel9.'</select>']);
$setup .= formpage(['img'=>'laser_2.png','name'=>$lang['cfg_bad_rx'],'descr'=>$lang['cfg_bad_rx_descr'],'pole'=>$lang['vid'].' -<input style="width:50px;display:inline-block;" name="badsignalstart" class="input1" type="text" value="'.(!empty($config['badsignalstart'])?$config['badsignalstart']:28).'"> '.$lang['do'].' -<input style="width:50px;display:inline-block;" name="badsignalend" class="input1" type="text" value="'.(!empty($config['badsignalend']) ? $config['badsignalend'] : 40).'">']);
$tpl->load_template('setup/config.tpl');
$tpl->set('{config}',$lang['setup_pon']);
$tpl->set('{result}','<form action="/?do=send" method="post" id="formadd"><input name="act" type="hidden" value="saveconfig">'.$setup.'<div class="polebtn"><button type="submit" form="formadd" value="submit">'.$lang['save'].'</button></form>');
$tpl->compile('content');
$tpl->clear();
?>