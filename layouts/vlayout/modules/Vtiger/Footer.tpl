{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
*
 ********************************************************************************/
-->*}
{strip}
		<input id='activityReminder' class='hide noprint' type="hidden" value="{$ACTIVITY_REMINDER}"/>

		{* Feedback side-panel button *}
		{if $HEADER_LINKS && $MAIN_PRODUCT_SUPPORT && !$MAIN_PRODUCT_WHITELABEL}
		{assign var="FIRSTHEADERLINK" value=$HEADER_LINKS.0}
		{assign var="FIRSTHEADERLINKCHILDRENS" value=$FIRSTHEADERLINK->get('childlinks')}
		{assign var="FEEDBACKLINKMODEL" value=$FIRSTHEADERLINKCHILDRENS.2}
		<div id="userfeedback" class="feedback noprint">
			<a href="javascript:;" onclick="{$FEEDBACKLINKMODEL->get('linkurl')}" class="handle">{vtranslate("LBL_FEEDBACK", "Vtiger")}</a>
		</div>
		{/if}

		{if !$MAIN_PRODUCT_WHITELABEL}
		<footer class="noprint">
                    <div class="vtFooter">
			<p>
				Bản quyền phát triển bởi CRM+ &nbsp;
				&copy; 2013 - 2014 &nbsp;&nbsp;
			</p>
                     </div>
		</footer>
		{/if}
		
		{* javascript files *}
		{include file='JSResources.tpl'|@vtemplate_path}
		</div>
		
	</body>
</html>
{/strip}