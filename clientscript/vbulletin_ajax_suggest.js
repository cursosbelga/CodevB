/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.2.3
|| # ---------------------------------------------------------------- # ||
|| # Copyright ©2000-2016 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/
var webkit_version=userAgent.match(/applewebkit\/([0-9]+)/);var use_suggest=AJAX_Compatible&&!(is_saf&&!(webkit_version[1]>=412));function vB_AJAX_Suggest(B,A,C){this.xmltag="item"}if(use_suggest){vB_AJAX_Suggest.prototype.base_init=function(B,A,C){this.menuobj=YAHOO.util.Dom.get(C+"_body");if(!this.menuobj){this.menuobj=YAHOO.util.Dom.get(C+"_menu")}if(!this.menuobj){this.menuobj=document.createElement("div");this.menuobj.id=C+"_body";YAHOO.util.Dom.addClass(this.menuobj,"popupbody");YAHOO.util.Dom.get(C).appendChild(this.menuobj)}this.textobj=YAHOO.util.Dom.get(A);this.textobj.setAttribute("autocomplete","off");this.textobj.onfocus=function(D){this.obj.active=true};this.textobj.onblur=function(D){this.obj.active=false};this.textobj.obj=this;this.set_primary_delimiter(",");this.varname=B;this.menukey=C;this.fragment="";this.doneitems="";this.selected=0;this.menuopen=false;this.timeout=null;this.items=new Array();this.active=false;this.ajax_req=null;this.allow_multiple=false;this.min_chars=3;this.show_title=true;this.textobj.onkeyup=function(D){return this.obj.key_event_handler(D)};this.textobj.onkeypress=function(D){D=D?D:window.event;if(D.keyCode==13){return(this.obj.menuopen?false:true)}}};vB_AJAX_Suggest.prototype.set_primary_delimiter=function(A){this.delim=A;this.delimiters=new Array(this.delim)};vB_AJAX_Suggest.prototype.set_delimiters=function(C){this.delimiters=new Array(this.delim);if(C){var A,B;if(A=PHP.match_all(C,"{([^}]*)}")){for(B=0;B<A.length;B++){if(A[B][1]!==""){this.delimiters.push(A[B][1])}C=C.replace(A[B][0],"")}}A=C.split(" ");for(B=0;B<A.length;B++){if(A[B]!==""){this.delimiters.push(A[B])}}}};vB_AJAX_Suggest.prototype.get_text=function(){if(this.allow_multiple){var B=-1,C;for(var A=0;A<this.delimiters.length;A++){if(this.textobj.value.lastIndexOf(this.delimiters[A])>B){B=this.textobj.value.lastIndexOf(this.delimiters[A]);C=this.delimiters[A].length}}if(B==-1){this.doneitems=new String("");this.fragment=new String(this.textobj.value)}else{this.doneitems=new String(this.textobj.value.substring(0,B+C));this.fragment=new String(this.textobj.value.substring(B+C))}}else{this.fragment=new String(this.textobj.value)}this.fragment=PHP.trim(this.fragment)};vB_AJAX_Suggest.prototype.set_text=function(B){if(this.allow_multiple){var A=(this.doneitems.substr(this.doneitems.length-1)==" "?"":" ");this.textobj.value=PHP.ltrim(this.doneitems+A+PHP.unhtmlspecialchars(this.items[B],true)+this.delim+" ")}else{this.textobj.value=PHP.unhtmlspecialchars(this.items[B],true)}this.textobj.focus();this.menu_hide();return false};vB_AJAX_Suggest.prototype.move_row_selection=function(A){var B=parseInt(this.selected,10)+parseInt(A,10);if(B<0){B=this.items.length-1}else{if(B>=this.items.length){B=0}}this.set_row_selection(B);return false};vB_AJAX_Suggest.prototype.set_row_selection=function(B){var A=fetch_tags(this.menuobj,"li");if(A.length){A[this.selected].className="vbmenu_option";this.selected=B;A[this.selected].className="vbmenu_hilite"}};vB_AJAX_Suggest.prototype.key_event_handler=function(A){A=A?A:window.event;this.active=true;if(this.menuopen){switch(A.keyCode){case 38:this.move_row_selection(-1);return false;case 40:this.move_row_selection(1);return false;case 27:this.menu_hide();return false;case 13:this.set_text(this.selected);return false}}this.get_text();if(this.fragment.length>=this.min_chars){clearTimeout(this.timeout);this.timeout=setTimeout(this.varname+".item_search();",500)}else{this.menu_hide()}};vB_AJAX_Suggest.prototype.item_search=function(){if(this.active){this.items=new Array();if(YAHOO.util.Connect.isCallInProgress(this.ajax_req)){YAHOO.util.Connect.abort(this.ajax_req)}this.ajax_req=YAHOO.util.Connect.asyncRequest("POST",fetch_ajax_url(this.get_search_url()),{success:this.handle_ajax_response,failure:vBulletin_AJAX_Error_Handler,timeout:vB_Default_Timeout,scope:this},this.get_search_post())}};vB_AJAX_Suggest.prototype.get_search_url=function(){};vB_AJAX_Suggest.prototype.get_search_post=function(){};vB_AJAX_Suggest.prototype.handle_ajax_response=function(D){if(D.responseXML){var C=this.textobj;do{if(C.style.display=="none"){this.menu_hide();return }}while((C=C.parentNode)!=null&&C.style);var A=D.responseXML.getElementsByTagName(this.xmltag);if(A.length){for(var B=0;B<A.length;B++){this.items[B]=A[B].firstChild.nodeValue}}if(this.items.length){this.menu_build();this.menu_show()}else{this.menu_hide()}}};vB_AJAX_Suggest.prototype.menu_build=function(){if(!YAHOO.vBulletin.vBPopupMenu.popups[this.menukey]){var D=new PopupMenu(YAHOO.util.Dom.get(this.menukey),YAHOO.vBulletin.vBPopupMenu);YAHOO.vBulletin.vBPopupMenu.register_menuobj(D)}else{if(!(YAHOO.env.ua.ie>0&&YAHOO.env.ua.ie<8)){var D=YAHOO.vBulletin.vBPopupMenu.popups[this.menukey];D.init(YAHOO.util.Dom.get(this.menukey),YAHOO.vBulletin.vBPopupMenu)}}this.menu_empty();var E=new RegExp("^("+PHP.preg_quote(this.fragment)+")","i");var C=document.createElement("ul");for(var B in this.items){if(YAHOO.lang.hasOwnProperty(this.items,B)){var A=document.createElement("li");A.className=(B==this.selected?"vbmenu_hilite":"vbmenu_option");if(this.show_title){A.title="nohilite"}else{A.title=""}A.innerHTML='<a href="#" onclick="return '+this.varname+".set_text("+B+')">'+this.items[B].replace(E,"<strong>$1</strong>")+"</a>";A.onmouseover=this.get_item_mouseover_handler(B);C.appendChild(A)}}this.menuobj.appendChild(C)};vB_AJAX_Suggest.prototype.get_item_mouseover_handler=function(A){var B=this;return function(){return B.set_row_selection(A)}};vB_AJAX_Suggest.prototype.menu_empty=function(){this.selected=0;while(this.menuobj.firstChild){this.menuobj.removeChild(this.menuobj.firstChild)}};vB_AJAX_Suggest.prototype.menu_show=function(){if(this.active){YAHOO.vBulletin.vBPopupMenu.popups[this.menukey].menu=this.menuobj;YAHOO.vBulletin.vBPopupMenu.popups[this.menukey].open_menu(this.textobj.id);this.menuopen=true}};vB_AJAX_Suggest.prototype.menu_hide=function(){YAHOO.vBulletin.vBPopupMenu.close_all();this.menuopen=false}}else{vB_AJAX_Suggest.prototype.set_delimiters=function(A){}}function vB_AJAX_TagSuggest(B,A,C){if(use_suggest){this.base_init(B,A,C)}}vB_AJAX_TagSuggest.prototype=new vB_AJAX_Suggest();if(use_suggest){vB_AJAX_TagSuggest.prototype.get_search_url=function(){return"ajax.php?do=tagsearch"};vB_AJAX_TagSuggest.prototype.get_search_post=function(){return"securitytoken="+SECURITYTOKEN+"&do=tagsearch&fragment="+PHP.urlencode(this.fragment)};vB_AJAX_TagSuggest.prototype.xmltag="tag"}function vB_AJAX_NameSuggest(B,A,C){if(use_suggest){this.base_init(B,A,C);this.set_primary_delimiter(";");this.show_title=false}}vB_AJAX_NameSuggest.prototype=new vB_AJAX_Suggest();if(use_suggest){vB_AJAX_NameSuggest.prototype.get_search_url=function(){return"ajax.php?do=usersearch"};vB_AJAX_NameSuggest.prototype.get_search_post=function(){return SESSIONURL+"securitytoken="+SECURITYTOKEN+"&do=usersearch&fragment="+PHP.urlencode(this.fragment)};vB_AJAX_NameSuggest.prototype.xmltag="user"}function vB_AJAX_SocialGroupSuggest(B,A,C){if(use_suggest){this.base_init(B,A,C)}}vB_AJAX_SocialGroupSuggest.prototype=new vB_AJAX_Suggest();if(use_suggest){vB_AJAX_SocialGroupSuggest.prototype.get_search_url=function(){return"ajax.php?do=socialgroupsearch"};vB_AJAX_SocialGroupSuggest.prototype.get_search_post=function(){return SESSIONURL+"securitytoken="+SECURITYTOKEN+"&do=socialgroupsearch&fragment="+PHP.urlencode(this.fragment)};vB_AJAX_SocialGroupSuggest.prototype.xmltag="socialgroup"};