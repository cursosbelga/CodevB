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
function vB_AJAX_ThreadRate_Init(E,F){var D=YAHOO.util.Dom.get(E);if(AJAX_Compatible&&(typeof vb_disable_ajax=="undefined"||vb_disable_ajax<2)&&D){var A=new vB_AJAX_ThreadRate(D,F);for(var C=0;C<D.elements.length;C++){if(D.elements[C].type=="submit"){var G=D.elements[C];var B=document.createElement("input");B.type="button";B.className=G.className;B.value=G.value;YAHOO.util.Event.addListener(B,"click",A.form_click,undefined,A);G.parentNode.insertBefore(B,G);G.parentNode.removeChild(G)}}}}function vB_AJAX_ThreadRate(A,B){this.formobj=A;this.threadid=B;this.output_element_id="threadrating_current"}vB_AJAX_ThreadRate.prototype.handle_ajax_response=function(H){if(H.responseXML){YAHOO.vBulletin.vBPopupMenu.close_all();var C=H.responseXML.getElementsByTagName("error");if(C.length){alert(C[0].firstChild.nodeValue)}else{var A=this.get_child_value(H.responseXML,"vote_threshold_met");if(A){var E=this.get_child_value(H.responseXML,"rating");var G=YAHOO.util.Dom.getElementsByClassName("rating",undefined,this.output_element_id);console.log(G);for(var D=0;D<G.length;D++){for(var B=1;B<=5;B++){YAHOO.util.Dom.removeClass(G[D],"r"+B)}YAHOO.util.Dom.addClass(G[D],"r"+E)}YAHOO.util.Dom.removeClass(this.output_element_id,"hidden")}var F=H.responseXML.getElementsByTagName("message");if(F.length){alert(F[0].firstChild.nodeValue)}}}};vB_AJAX_ThreadRate.prototype.get_child_value=function(B,A){var C=B.getElementsByTagName(A);if(C.length&&C[0].firstChild){return C[0].firstChild.nodeValue}return""};vB_AJAX_ThreadRate.prototype.rate=function(){var A=new vB_Hidden_Form("threadrate.php");A.add_variable("ajax",1);A.add_variables_from_object(this.formobj);if(A.fetch_variable("vote")!=null){YAHOO.util.Connect.asyncRequest("POST",fetch_ajax_url("threadrate.php?t="+this.threadid+"&vote="+PHP.urlencode(A.fetch_variable("vote"))),{success:this.handle_ajax_response,failure:this.handle_ajax_error,timeout:vB_Default_Timeout,scope:this},SESSIONURL+"securitytoken="+SECURITYTOKEN+"&"+A.build_query_string())}};vB_AJAX_ThreadRate.prototype.handle_ajax_error=function(A){vBulletin_AJAX_Error_Handler(A);this.formobj.submit()};vB_AJAX_ThreadRate.prototype.form_click=function(){this.rate();return false};