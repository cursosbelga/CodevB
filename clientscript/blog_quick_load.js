/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.2.3
|| # ---------------------------------------------------------------- # ||
|| # Copyright �2000-2016 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/
vBulletin.events.systemInit.subscribe(function(){if(AJAX_Compatible){vB_QuickLoader_Factory=new vB_QuickLoader_Factory()}});function vB_QuickLoader_Factory(){this.editorcounter=0;this.controls=new Array();this.init()}vB_QuickLoader_Factory.prototype.init=function(){this.objecttype="bt";this.containertype="comment";this.ajaxtarget="blog_ajax.php";this.ajaxaction="loadcomment";this.returnbit="commentbit";if(vBulletin.elements.vB_QuickLoad){for(var B=0;B<vBulletin.elements.vB_QuickLoad.length;B++){var C=vBulletin.elements.vB_QuickLoad[B];var A=YAHOO.util.Dom.get("view_"+this.containertype+C);if(A){this.controls[C]=new vB_QuickLoader(C,this)}}vBulletin.elements.vB_QuickLoad=null}};vB_QuickLoader_Factory.prototype.obj_init=function(A){Comment_Init(YAHOO.util.Dom.get(this.containertype+"_"+A))};vB_QuickLoader_Factory.prototype.redirect=function(A){window.location="blog.php?"+SESSIONURL+"bt="+A+"#comment"+A};function vB_QuickLoader(B,A){this.init(B,A)}vB_QuickLoader.prototype.init=function(C,B){if(C){this.objectid=C}if(B){this.factory=B}this.node=YAHOO.util.Dom.get(this.factory.containertype+this.objectid);this.progress_indicator=YAHOO.util.Dom.get(this.factory.containertype+"_progress_"+this.objectid);var A=YAHOO.util.Dom.get("view_"+this.factory.containertype+C);YAHOO.util.Event.on(A,"click",this.load,this,true)};vB_QuickLoader.prototype.load=function(A){if(A){YAHOO.util.Event.stopEvent(A)}if(this.progress_indicator){this.progress_indicator.style.display=""}YAHOO.util.Connect.asyncRequest("POST",fetch_ajax_url(this.factory.ajaxtarget+"?do="+this.factory.ajaxaction+"&"+this.factory.objecttype+"="+this.objectid),{success:this.display,failure:this.handle_ajax_error,timeout:vB_Default_Timeout,scope:this},SESSIONURL+"securitytoken="+SECURITYTOKEN+"&do="+this.factory.ajaxaction+"&"+this.factory.objecttype+"="+this.objectid);return false};vB_QuickLoader.prototype.handle_ajax_error=function(A){vBulletin_AJAX_Error_Handler(A)};vB_QuickLoader.prototype.display=function(B){if(B.responseXML){if(this.progress_indicator){this.progress_indicator.style.display="none"}var C=B.responseXML.getElementsByTagName(this.factory.returnbit);if(C.length){var A=string_to_node(C[0].firstChild.nodeValue);this.node.parentNode.replaceChild(A,this.node);this.factory.obj_init(this.objectid)}else{this.factory.redirect(this.objectid)}}};