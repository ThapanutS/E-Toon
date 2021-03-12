$(function() {

  var setCookie = function(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  };

  var getCookie = function(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
      var c = ca[i].trim();
      if(c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  };

  var request_path = window.location.pathname;
  var language_code_in_url = "en"; //ç”¨æˆ·è¯·æ±‚åœ°å€ä¸­çš„è¯­è¨€
  if(request_path == "/") {
    language_code_in_url = "en";
  } else {
    var reg = /^\/(cn|hant|en|id|vi|es|pt|th)($|\/.*)/;
    var matches = request_path.match(reg);
    if(matches && matches[1]) {
      language_code_in_url = matches[1];
    }
  }

  var cookie_name = "MANGATOON_WEBSITE_LANGUAGE";
  var user_selected_language = getCookie(cookie_name);
  if(user_selected_language && user_selected_language !== '') return false;

  //ç”¨æˆ·é€‰æ‹©çš„è¯­è¨€å’Œè®¿é—®åœ°å€ä¸­çš„è¯­è¨€ä¸€è‡´ï¼Œåˆ™ä¸è¿›è¡Œå¼¹æ¡†æç¤º
  if(user_selected_language && user_selected_language == language_code_in_url) return false;
  //è‹¥ç”¨æˆ·æ²¡æœ‰é€‰æ‹©è¿‡è¯­è¨€å¹¶ä¸”IPåœ°å€å¯¹åº”çš„è¯­è¨€æ˜¯è‹±æ–‡çš„ï¼Œåˆ™ä¸è¿›è¡Œå¼¹æ¡†æç¤º
  if(!user_selected_language && current_language_code == "en") return false;

  var languages_map = [
    {code: "en", name: "English"},
    {code: "vi", name: "Tiáº¿ng viá»‡t"},
    {code: "id", name: "Bahasa Indonesia"},
    {code: "cn", name: "ä¸­æ–‡"},
    {code: "es", name: "EspaÃ±ol"},
    {code: "pt", name: "PortuguÃªs"},
    {code: "th", name: "à¹„à¸—à¸¢"}
  ];

  var select_view;
  var language_view;
  var style;
  if(window.screen.width < 600) {
    //ç§»åŠ¨ç«¯å°å±å¹•å…¼å®¹
    select_view = '<ul id="language-select-view" style="list-style-type:none;margin:0;padding:0 15px;padding-top:15px;text-align:center;font-size:15px;overflow:hidden;margin-left:-5px;">';
    for(var index in languages_map) {
      select_view += '<li val="' + languages_map[index].code + '" id="language-' + languages_map[index].code + '">' +
        languages_map[index].name +
        '</li>';
    }
    select_view += '</ul>';
    style = "<style>" +
      "#language-select-view .language-selected{background-color:#FF5454;color:white;border:1px solid #FF5454;}" +
      "#language-select-view li{cursor:pointer;width:110px;height:30px;color:#333333;display:inline-block;font-size:12px;margin-top:5px;margin-left:5px;border-radius:10px;border:1px solid #979797;text-align:center;line-height:30px;}" +
      "</style>";

    language_view = '<div id="language-view" style="background: rgba(0, 0, 0, 0.5);position:fixed;top:0;left:0;width:100%;height:100%;z-index:1000">' +
      '<div style="width:300px;height:250px;background-color:white;top:50%;margin-top:-100px;position:absolute;left:50%;margin-left:-150px;border-radius:15px;">' +
      '<span id="close-language-view" class="iconfont" style="background-color:#FFF;position:absolute;right:8px;top:8px;font-size:16px;cursor:pointer">&#xe62a;</span>' +
      '<h3 style="line-height:20px;margin:0;padding:0;padding-top:25px;font-size:16px;" align="center">SELECT CONTENTS LANGUAGE</h3>' +
      '<h4 style="line-height:20px;margin:0;padding:0;font-size:14px;font-weight:normal" align="center">Language can be changed from settings</h4>' +
      select_view +
      '<div id="submit_language" style="cursor:pointer;position:absolute;background-color:black;bottom:0px;height:40px;font-size:16px;text-align:center;line-height:40px;width:100%;color:white;border-bottom-left-radius:15px;border-bottom-right-radius:15px;border-top:1px solid #CCCCCC">OK</div></div></div>';
  } else {
    select_view = '<ul id="language-select-view" style="list-style-type:none;margin:0;padding:0 10px;padding-top:10px;text-align:center;font-size:15px;overflow:hidden;margin-left:-10px;">';
    // for (var index in languages_map){
    //   select_view += '<li style="float:left;width:20%">' +
    //     '<div class="language-view" id="language-' + languages_map[index].code +
    //     '" val="'+ languages_map[index].code  +'" style="width:50px;height:50px;border-radius:25px;margin:0 auto;position:relative">' +
    //     '<div class="language-selected" style="display:none;position:absolute;width:50px;height:50px;left:0;border-radius:25px;background: rgba(0, 0, 0, 0.5);text-align:center;line-height:50px;">' +
    //     '<i class="iconfont" style="color:white;font-size:24px;">&#xe713;</i></div>' +
    //     '<img src="http://cn.e.pic.mangatoon.mobi/for-clients/flag_' + languages_map[index].code + '.png" style="width:50px;"></div>' +
    //     '<span style="display:block;text-align:center;padding:10px 0;">' + languages_map[index].name + '</span></li>';
    // }
    for(var index in languages_map) {
      select_view += '<li val="' + languages_map[index].code + '" id="language-' + languages_map[index].code + '">' +
        languages_map[index].name +
        '</li>';
    }
    select_view += '</ul>';

    style = "<style>" +
      "#language-select-view .language-selected{background-color:#FF5454;color:white;border:1px solid #FF5454;}" +
      "#language-select-view li{cursor:pointer;width:130px;height:40px;color:#333333;display:inline-block;font-size:14px;margin-left:10px;margin-top:10px;border-radius:20px;border:1px solid #979797;text-align:center;line-height:40px;}" +
      "</style>";

    language_view = '<div id="language-view" style="background: rgba(0, 0, 0, 0.5);position:fixed;top:0;left:0;width:100%;height:100%;z-index:1000">' +
      '<div style="width:450px;height:340px;background-color:white;top:50%;margin-top:-150px;position:absolute;left:50%;margin-left:-225px;border-radius:20px;">' +
      '<span id="close-language-view" class="iconfont" style="background-color:#FFF;position:absolute;right:10px;top:10px;font-size:20px;cursor:pointer">&#xe62a;</span>' +
      '<h3 style="line-height:30px;margin:0;padding:0;padding-top:30px;" align="center">SELECT CONTENTS LANGUAGE</h3>' +
      '<h4 style="line-height:30px;margin:0;padding:0;font-size:18px;font-weight:normal" align="center">Language can be changed from settings</h4>' +
      select_view +
      '<div id="submit_language" style="cursor:pointer;position:absolute;background-color:black;bottom:0px;height:70px;font-size:24px;text-align:center;line-height:70px;width:100%;color:white;border-bottom-left-radius:20px;border-bottom-right-radius:20px;border-top:1px solid #CCCCCC">OK</div></div></div>';

  }
  $("body").append(language_view);
  $("body").append(style);


  //é»˜è®¤é€‰ä¸­ç”¨æˆ·å½“å‰çš„è¯­ç§
  user_selected_language = current_language_code;
  $("#language-" + current_language_code).addClass('language-selected');

  //ç”¨æˆ·æ‰‹åŠ¨é€‰æ‹©
  $("#language-select-view li").click(function() {
    $("#language-select-view li").removeClass('language-selected')
    $(this).addClass('language-selected');
    user_selected_language = $(this).attr('val');
  });


  var get_request_uri = function() {
    // request_path = "/es/c/d";
    if(request_path == "/") {
      if(user_selected_language == 'en') return "/";
      return "/" + user_selected_language;
    }
    var uri = request_path.replace(/^\/(cn|hant|en|id|vi|es|pt)($|\/.*)/, "/" + user_selected_language + "$2");
    uri += window.location.search;
    return uri;
  };

  //ç¡®è®¤è¯­ç§é€‰æ‹©
  $("#submit_language").click(function() {
    setCookie(cookie_name, user_selected_language, 365);
    // alert(get_request_uri());
    window.location.href = "https://mangatoon.mobi" + get_request_uri();
  });


  //å…³é—­é€‰æ‹©æ¡†
  $("#close-language-view").click(function() {
    if(language_code_in_url) {
      //å…³é—­è¯­è¨€é€‰æ‹©æ¡†åˆ™ç›´æŽ¥å­˜å‚¨è¯·æ±‚åœ°å€ä¸­çš„è¯­è¨€
      setCookie(cookie_name, language_code_in_url, 365);
    }
    $("#language-view").hide();
  })

});